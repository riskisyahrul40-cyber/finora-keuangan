<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    /**
     * Menampilkan halaman laporan keuangan.
     */
    public function index(Request $request)
    {
        $userId = Auth::id();

        // Bulan dan tahun yang dipilih
        $bulan = (int) $request->input('bulan', now()->month);
        $tahun = (int) $request->input('tahun', now()->year);

        // Validasi sederhana
        if ($bulan < 1 || $bulan > 12) {
            $bulan = now()->month;
        }

        if ($tahun < 2000 || $tahun > 2100) {
            $tahun = now()->year;
        }

        /*
        |--------------------------------------------------------------------------
        | TOTAL BULAN TERPILIH
        |--------------------------------------------------------------------------
        */

        $totalPemasukanBulan = Transaksi::where('user_id', $userId)
            ->where('jenis', 'masuk')
            ->whereYear('tanggal', $tahun)
            ->whereMonth('tanggal', $bulan)
            ->sum('jumlah');

        $totalPengeluaranBulan = Transaksi::where('user_id', $userId)
            ->where('jenis', 'keluar')
            ->whereYear('tanggal', $tahun)
            ->whereMonth('tanggal', $bulan)
            ->sum('jumlah');

        $saldoBulan = $totalPemasukanBulan - $totalPengeluaranBulan;


        /*
        |--------------------------------------------------------------------------
        | TOTAL TAHUN TERPILIH
        |--------------------------------------------------------------------------
        */

        $totalPemasukanTahun = Transaksi::where('user_id', $userId)
            ->where('jenis', 'masuk')
            ->whereYear('tanggal', $tahun)
            ->sum('jumlah');

        $totalPengeluaranTahun = Transaksi::where('user_id', $userId)
            ->where('jenis', 'keluar')
            ->whereYear('tanggal', $tahun)
            ->sum('jumlah');

        $saldoTahun = $totalPemasukanTahun - $totalPengeluaranTahun;


        /*
        |--------------------------------------------------------------------------
        | REKAP PER BULAN
        |--------------------------------------------------------------------------
        */

        $namaBulan = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        ];

        $laporanBulanan = collect();

        for ($i = 1; $i <= 12; $i++) {

            $pemasukan = Transaksi::where('user_id', $userId)
                ->where('jenis', 'masuk')
                ->whereYear('tanggal', $tahun)
                ->whereMonth('tanggal', $i)
                ->sum('jumlah');

            $pengeluaran = Transaksi::where('user_id', $userId)
                ->where('jenis', 'keluar')
                ->whereYear('tanggal', $tahun)
                ->whereMonth('tanggal', $i)
                ->sum('jumlah');

            $laporanBulanan->push([
                'bulan' => $i,
                'nama_bulan' => $namaBulan[$i],
                'pemasukan' => $pemasukan,
                'pengeluaran' => $pengeluaran,
                'saldo' => $pemasukan - $pengeluaran,
            ]);
        }


        /*
        |--------------------------------------------------------------------------
        | REKAP PER TAHUN
        |--------------------------------------------------------------------------
        */

        $laporanTahunan = Transaksi::where('user_id', $userId)
            ->selectRaw('YEAR(tanggal) as tahun')
            ->selectRaw("
                SUM(
                    CASE
                        WHEN jenis = 'masuk' THEN jumlah
                        ELSE 0
                    END
                ) as pemasukan
            ")
            ->selectRaw("
                SUM(
                    CASE
                        WHEN jenis = 'keluar' THEN jumlah
                        ELSE 0
                    END
                ) as pengeluaran
            ")
            ->groupByRaw('YEAR(tanggal)')
            ->orderByDesc('tahun')
            ->get()
            ->map(function ($item) {
                return [
                    'tahun' => $item->tahun,
                    'pemasukan' => (float) $item->pemasukan,
                    'pengeluaran' => (float) $item->pengeluaran,
                    'saldo' => (float) $item->pemasukan - (float) $item->pengeluaran,
                ];
            });


        /*
        |--------------------------------------------------------------------------
        | TAMBAHKAN TAHUN YANG DIPILIH JIKA BELUM ADA TRANSAKSI
        |--------------------------------------------------------------------------
        */

        if (!$laporanTahunan->contains('tahun', $tahun)) {

            $laporanTahunan->push([
                'tahun' => $tahun,
                'pemasukan' => 0,
                'pengeluaran' => 0,
                'saldo' => 0,
            ]);

            $laporanTahunan = $laporanTahunan
                ->sortByDesc('tahun')
                ->values();
        }


        /*
        |--------------------------------------------------------------------------
        | RIWAYAT TRANSAKSI BULAN TERPILIH
        |--------------------------------------------------------------------------
        */

        $transaksis = Transaksi::where('user_id', $userId)
            ->whereYear('tanggal', $tahun)
            ->whereMonth('tanggal', $bulan)
            ->orderByDesc('tanggal')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | DAFTAR TAHUN UNTUK FILTER
        |--------------------------------------------------------------------------
        */

        $daftarTahun = Transaksi::where('user_id', $userId)
            ->selectRaw('YEAR(tanggal) as tahun')
            ->distinct()
            ->orderByDesc('tahun')
            ->pluck('tahun')
            ->map(fn ($tahun) => (int) $tahun);

        // Pastikan tahun yang sedang dipilih selalu muncul
        if (!$daftarTahun->contains($tahun)) {
            $daftarTahun->push($tahun);
        }

        $daftarTahun = $daftarTahun
            ->sortDesc()
            ->values();


        /*
        |--------------------------------------------------------------------------
        | KIRIM DATA KE VIEW
        |--------------------------------------------------------------------------
        */

        return view('laporan.index', compact(
            'bulan',
            'tahun',
            'namaBulan',
            'totalPemasukanBulan',
            'totalPengeluaranBulan',
            'saldoBulan',
            'totalPemasukanTahun',
            'totalPengeluaranTahun',
            'saldoTahun',
            'laporanBulanan',
            'laporanTahunan',
            'transaksis',
            'daftarTahun'
        ));
    }


    /**
     * Export laporan ke CSV yang dapat dibuka menggunakan Microsoft Excel.
     */
    public function exportExcel(Request $request)
    {
        $userId = Auth::id();

        $bulan = (int) $request->input('bulan', now()->month);
        $tahun = (int) $request->input('tahun', now()->year);

        if ($bulan < 1 || $bulan > 12) {
            $bulan = now()->month;
        }

        if ($tahun < 2000 || $tahun > 2100) {
            $tahun = now()->year;
        }

        $namaBulan = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        ];

        $transaksis = Transaksi::where('user_id', $userId)
            ->whereYear('tanggal', $tahun)
            ->whereMonth('tanggal', $bulan)
            ->orderBy('tanggal')
            ->get();

        $filename = 'laporan-keuangan-' . $namaBulan[$bulan] . '-' . $tahun . '.csv';

        return response()->streamDownload(function () use ($transaksis, $namaBulan, $bulan, $tahun) {

            $file = fopen('php://output', 'w');

            // BOM agar Excel membaca UTF-8 dengan benar
            fwrite($file, "\xEF\xBB\xBF");

            fputcsv($file, [
                'LAPORAN KEUANGAN DOMPETKU'
            ], ';');

            fputcsv($file, [
                'Periode',
                $namaBulan[$bulan] . ' ' . $tahun
            ], ';');

            fputcsv($file, [], ';');

            fputcsv($file, [
                'Tanggal',
                'Jenis',
                'Kategori',
                'Jumlah',
                'Keterangan'
            ], ';');

            foreach ($transaksis as $transaksi) {

                fputcsv($file, [
                    date('d/m/Y', strtotime($transaksi->tanggal)),
                    $transaksi->jenis === 'masuk'
                        ? 'Pemasukan'
                        : 'Pengeluaran',
                    $transaksi->kategori,
                    $transaksi->jumlah,
                    $transaksi->keterangan ?? '-',
                ], ';');
            }

            fclose($file);

        }, $filename, [
            'Content-Type' => 'text/csv; charset=UTF-8',
        ]);
    }


    /**
     * Menampilkan laporan dalam format halaman cetak.
     * Bisa dipilih "Save as PDF" dari browser.
     */
    public function exportPdf(Request $request)
    {
        $userId = Auth::id();

        $bulan = (int) $request->input('bulan', now()->month);
        $tahun = (int) $request->input('tahun', now()->year);

        if ($bulan < 1 || $bulan > 12) {
            $bulan = now()->month;
        }

        if ($tahun < 2000 || $tahun > 2100) {
            $tahun = now()->year;
        }

        $namaBulan = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        ];

        $totalPemasukan = Transaksi::where('user_id', $userId)
            ->where('jenis', 'masuk')
            ->whereYear('tanggal', $tahun)
            ->whereMonth('tanggal', $bulan)
            ->sum('jumlah');

        $totalPengeluaran = Transaksi::where('user_id', $userId)
            ->where('jenis', 'keluar')
            ->whereYear('tanggal', $tahun)
            ->whereMonth('tanggal', $bulan)
            ->sum('jumlah');

        $transaksis = Transaksi::where('user_id', $userId)
            ->whereYear('tanggal', $tahun)
            ->whereMonth('tanggal', $bulan)
            ->orderBy('tanggal')
            ->get();

        return view('laporan.pdf', compact(
            'bulan',
            'tahun',
            'namaBulan',
            'totalPemasukan',
            'totalPengeluaran',
            'transaksis'
        ));
    }
}
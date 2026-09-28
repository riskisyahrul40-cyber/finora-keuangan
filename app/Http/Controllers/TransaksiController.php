<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Menampilkan dashboard transaksi
     */
    public function index()
    {
        $transaksis = Transaksi::where('user_id', Auth::id())
            ->orderByDesc('tanggal')
            ->orderByDesc('id')
            ->get();

        $totalPemasukan = Transaksi::where('user_id', Auth::id())
            ->where('jenis', 'masuk')
            ->sum('jumlah');

        $totalPengeluaran = Transaksi::where('user_id', Auth::id())
            ->where('jenis', 'keluar')
            ->sum('jumlah');

        $saldo = $totalPemasukan - $totalPengeluaran;

        return view('dashboard', compact(
            'transaksis',
            'totalPemasukan',
            'totalPengeluaran',
            'saldo'
        ));
    }


    /**
     * Menyimpan transaksi baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required|in:masuk,keluar',
            'kategori' => 'required|string|max:255',
            'jumlah' => 'required|numeric|min:0',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string|max:1000',
        ]);


        Transaksi::create([
            'user_id' => Auth::id(),
            'jenis' => $request->jenis,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
        ]);


        return redirect()
            ->route('dashboard')
            ->with('success', 'Transaksi berhasil ditambahkan.');
    }


    /**
     * Menghapus transaksi
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::where('user_id', Auth::id())
            ->where('id', $id)
            ->firstOrFail();

        $transaksi->delete();


        return redirect()
            ->route('dashboard')
            ->with('success', 'Transaksi berhasil dihapus.');
    }
}
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laporan Keuangan — Finora</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family:
                -apple-system,
                BlinkMacSystemFont,
                "SF Pro Display",
                "SF Pro Text",
                "Segoe UI",
                Arial,
                sans-serif;

            background: #f5f5f7;

            color: #1d1d1f;

            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 1180px;
            margin: auto;
            padding: 35px 30px 60px;
        }

        /* =========================
           HEADER
        ========================= */

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            padding-bottom: 28px;
            border-bottom: 1px solid #dedee2;

            margin-bottom: 35px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .brand-icon {
            width: 43px;
            height: 43px;

            border-radius: 13px;

            background: #111;
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 19px;
            font-weight: 700;
        }

        .brand-text h1 {
            font-size: 22px;
            line-height: 1;
            letter-spacing: -.6px;
            font-weight: 600;
        }

        .brand-text p {
            color: #86868b;
            font-size: 12px;
            margin-top: 5px;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .back-button,
        .logout-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            text-decoration: none;

            padding: 11px 17px;

            border-radius: 13px;

            font-family: inherit;
            font-size: 13px;
            font-weight: 500;

            transition: .25s ease;

            cursor: pointer;
        }

        .back-button {
            background: white;
            color: #1d1d1f;
            border: 1px solid #d2d2d7;
        }

        .back-button:hover {
            background: #f5f5f7;
            transform: translateY(-1px);
        }

        .logout-button {
            border: 1px solid #d2d2d7;
            background: white;
            color: #1d1d1f;
        }

        .logout-button:hover {
            background: #111;
            color: white;
            border-color: #111;
        }

        /* =========================
           PAGE TITLE
        ========================= */

        .page-title {
            margin-bottom: 28px;
        }

        .page-title small {
            color: #86868b;
            font-size: 12px;
            letter-spacing: .7px;
            text-transform: uppercase;
        }

        .page-title h2 {
            font-size: 38px;
            letter-spacing: -1.8px;
            margin-top: 8px;
            font-weight: 600;
        }

        .page-title p {
            color: #6e6e73;
            margin-top: 8px;
            font-size: 15px;
        }

        /* =========================
           FILTER
        ========================= */

        .filter-card {
            background: white;

            border: 1px solid #e5e5e7;

            border-radius: 22px;

            padding: 23px;

            margin-bottom: 22px;

            box-shadow:
                0 8px 30px rgba(0,0,0,.035);
        }

        .filter-title {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 17px;
        }

        .filter-form {
            display: grid;

            grid-template-columns:
                1fr 1fr auto;

            gap: 12px;

            align-items: end;
        }

        .form-group label {
            display: block;

            font-size: 11px;

            color: #6e6e73;

            font-weight: 600;

            margin-bottom: 7px;
        }

        .select {
            width: 100%;

            height: 45px;

            padding: 0 13px;

            border: 1px solid #d2d2d7;

            border-radius: 12px;

            background: #fbfbfd;

            font-family: inherit;

            font-size: 13px;

            color: #1d1d1f;

            outline: none;
        }

        .select:focus {
            border-color: #111;

            background: white;

            box-shadow:
                0 0 0 4px rgba(0,0,0,.04);
        }

        .filter-button {
            height: 45px;

            border: none;

            border-radius: 12px;

            background: #111;

            color: white;

            padding: 0 23px;

            font-family: inherit;

            font-size: 13px;

            font-weight: 600;

            cursor: pointer;

            transition: .25s ease;
        }

        .filter-button:hover {
            background: #292929;

            transform:
                translateY(-1px);
        }

        /* =========================
           SUMMARY
        ========================= */

        .summary {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 17px;

            margin-bottom: 22px;
        }

        .summary-card {
            background: white;

            border: 1px solid #e5e5e7;

            border-radius: 22px;

            padding: 25px;

            min-height: 145px;

            position: relative;

            overflow: hidden;

            box-shadow:
                0 8px 30px rgba(0,0,0,.035);

            transition: .25s ease;
        }

        .summary-card:hover {
            transform: translateY(-3px);

            box-shadow:
                0 15px 35px rgba(0,0,0,.07);
        }

        .summary-card::after {
            content: "";

            position: absolute;

            width: 90px;
            height: 90px;

            border-radius: 50%;

            right: -35px;
            bottom: -40px;

            background: #f5f5f7;
        }

        .summary-label {
            color: #86868b;

            font-size: 11px;

            font-weight: 600;

            letter-spacing: .3px;

            text-transform: uppercase;
        }

        .summary-value {
            position: relative;

            z-index: 2;

            font-size: 25px;

            font-weight: 600;

            letter-spacing: -.8px;

            margin-top: 13px;
        }

        .income .summary-value {
            color: #12966c;
        }

        .expense .summary-value {
            color: #d94a55;
        }

        .balance .summary-value {
            color: #1d1d1f;
        }

        .summary-period {
            margin-top: 9px;

            color: #a1a1a6;

            font-size: 11px;
        }

        .summary-icon {
            position: absolute;

            right: 22px;
            top: 22px;

            width: 38px;
            height: 38px;

            border-radius: 12px;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 16px;
            font-weight: 600;
        }

        .income .summary-icon {
            background: #eaf8f0;
            color: #12966c;
        }

        .expense .summary-icon {
            background: #fff0f1;
            color: #d94a55;
        }

        .balance .summary-icon {
            background: #f0f0f2;
            color: #1d1d1f;
        }

        /* =========================
           CONTENT CARD
        ========================= */

        .card {
            background: white;

            border: 1px solid #e5e5e7;

            border-radius: 22px;

            padding: 26px;

            margin-bottom: 22px;

            box-shadow:
                0 8px 30px rgba(0,0,0,.035);
        }

        .card-header {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 22px;
        }

        .card-header h3 {
            font-size: 18px;

            font-weight: 600;

            letter-spacing: -.4px;
        }

        .card-header p {
            color: #86868b;

            font-size: 12px;

            margin-top: 5px;
        }

        /* =========================
           MONTHLY TABLE
        ========================= */

        .table-wrapper {
            width: 100%;

            overflow-x: auto;
        }

        table {
            width: 100%;

            border-collapse: collapse;

            min-width: 650px;
        }

        thead {
            border-bottom:
                1px solid #e5e5e7;
        }

        th {
            text-align: left;

            padding:
                11px 12px;

            color: #86868b;

            font-size: 10px;

            font-weight: 600;

            text-transform: uppercase;

            letter-spacing: .5px;
        }

        td {
            padding:
                15px 12px;

            border-bottom:
                1px solid #f0f0f2;

            font-size: 13px;
        }

        tbody tr {
            transition: .2s ease;
        }

        tbody tr:hover {
            background: #fafafa;
        }

        .month-name {
            font-weight: 600;
        }

        .income-text {
            color: #12966c;

            font-weight: 600;
        }

        .expense-text {
            color: #d94a55;

            font-weight: 600;
        }

        .balance-text {
            font-weight: 600;
        }

        .positive {
            color: #12966c;
        }

        .negative {
            color: #d94a55;
        }

        .current-month {
            background: #f7f7f8;
        }

        .current-badge {
            display: inline-block;

            margin-left: 7px;

            padding: 4px 8px;

            border-radius: 20px;

            background: #111;

            color: white;

            font-size: 9px;

            font-weight: 600;
        }

        /* =========================
           YEAR TABLE
        ========================= */

        .year-table td:first-child {
            font-weight: 600;
        }

        /* =========================
           TRANSACTION TABLE
        ========================= */

        .transaction-table {
            margin-top: 5px;
        }

        .type-badge {
            display: inline-flex;

            align-items: center;

            padding: 6px 9px;

            border-radius: 8px;

            font-size: 10px;

            font-weight: 600;
        }

        .type-income {
            background: #eaf8f0;
            color: #12966c;
        }

        .type-expense {
            background: #fff0f1;
            color: #d94a55;
        }

        .transaction-amount {
            font-weight: 600;

            white-space: nowrap;
        }

        .transaction-description {
            color: #86868b;

            font-size: 11px;

            max-width: 230px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }

        /* =========================
           EXPORT
        ========================= */

        .export-area {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            background: #111;

            color: white;

            border-radius: 20px;

            padding: 21px 24px;

            margin-bottom: 22px;
        }

        .export-info h3 {
            font-size: 15px;

            font-weight: 600;
        }

        .export-info p {
            color: #a1a1a6;

            font-size: 11px;

            margin-top: 5px;
        }

        .export-buttons {
            display: flex;

            gap: 9px;
        }

        .export-button {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            text-decoration: none;

            padding: 10px 15px;

            border-radius: 11px;

            font-family: inherit;

            font-size: 11px;

            font-weight: 600;

            transition: .25s ease;

            white-space: nowrap;
        }

        .excel-button {
            background: white;

            color: #111;
        }

        .pdf-button {
            background: #292929;

            color: white;

            border: 1px solid #444;
        }

        .export-button:hover {
            transform: translateY(-2px);
        }

        .excel-button:hover {
            background: #e8e8e8;
        }

        .pdf-button:hover {
            background: #3a3a3a;
        }

        /* =========================
           EMPTY
        ========================= */

        .empty {
            text-align: center;

            padding: 45px 20px;

            color: #a1a1a6;
        }

        .empty-icon {
            width: 50px;
            height: 50px;

            border-radius: 15px;

            background: #f5f5f7;

            display: flex;

            align-items: center;
            justify-content: center;

            margin:
                0 auto 12px;

            font-size: 18px;
        }

        .empty strong {
            display: block;

            color: #6e6e73;

            font-size: 13px;

            margin-bottom: 5px;
        }

        .empty span {
            font-size: 11px;
        }

        /* =========================
           FOOTER
        ========================= */

        .footer {
            text-align: center;

            color: #a1a1a6;

            font-size: 11px;

            margin-top: 35px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 800px) {

            .summary {
                grid-template-columns: 1fr;
            }

            .filter-form {
                grid-template-columns: 1fr;
            }

            .filter-button {
                width: 100%;
            }

            .export-area {
                flex-direction: column;

                align-items: flex-start;
            }

            .export-buttons {
                width: 100%;
            }

            .export-button {
                flex: 1;
            }

        }

        @media (max-width: 600px) {

            .container {
                padding:
                    25px 17px 40px;
            }

            .header {
                align-items: flex-start;

                gap: 15px;
            }

            .header-actions {
                gap: 6px;
            }

            .back-button,
            .logout-button {
                padding:
                    9px 11px;

                font-size: 11px;
            }

            .page-title h2 {
                font-size: 31px;
            }

            .card,
            .filter-card {
                padding: 20px;
            }

        }

    </style>

</head>


<body>


<div class="container">


    <!-- =====================================
         HEADER
    ====================================== -->

    <header class="header">

        <div class="brand">

            <div class="brand-icon">
                F
            </div>

            <div class="brand-text">

                <h1>
                    Finora
                </h1>

                <p>
                    Smart Expense Tracker
                </p>

            </div>

        </div>


        <div class="header-actions">

            <a
                href="{{ route('dashboard') }}"
                class="back-button"
            >
                ← Dashboard
            </a>


            <form
                method="POST"
                action="{{ route('logout') }}"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-button"
                >
                    Keluar
                </button>

            </form>

        </div>

    </header>



    <!-- =====================================
         TITLE
    ====================================== -->

    <section class="page-title">

        <small>
            FINANCIAL REPORT
        </small>

        <h2>
            Laporan Keuangan.
        </h2>

        <p>
            Pantau pemasukan, pengeluaran, dan saldo
            berdasarkan bulan maupun tahun.
        </p>

    </section>



    <!-- =====================================
         FILTER
    ====================================== -->

    <div class="filter-card">

        <div class="filter-title">
            Pilih Periode Laporan
        </div>


        <form
            method="GET"
            action="{{ route('laporan.index') }}"
            class="filter-form"
        >


            <!-- BULAN -->

            <div class="form-group">

                <label>
                    BULAN
                </label>

                <select
                    name="bulan"
                    class="select"
                >

                    @foreach($namaBulan as $nomor => $nama)

                        <option
                            value="{{ $nomor }}"
                            {{ $bulan == $nomor ? 'selected' : '' }}
                        >

                            {{ $nama }}

                        </option>

                    @endforeach

                </select>

            </div>


            <!-- TAHUN -->

            <div class="form-group">

                <label>
                    TAHUN
                </label>

                <select
                    name="tahun"
                    class="select"
                >

                    @foreach($daftarTahun as $itemTahun)

                        <option
                            value="{{ $itemTahun }}"
                            {{ $tahun == $itemTahun ? 'selected' : '' }}
                        >

                            {{ $itemTahun }}

                        </option>

                    @endforeach

                </select>

            </div>


            <button
                type="submit"
                class="filter-button"
            >
                Tampilkan Laporan
            </button>


        </form>

    </div>



    <!-- =====================================
         SUMMARY
    ====================================== -->

    <section class="summary">


        <!-- PEMASUKAN -->

        <div class="summary-card income">

            <div class="summary-icon">
                ↑
            </div>

            <div class="summary-label">
                Pemasukan Bulan Ini
            </div>

            <div class="summary-value">

                Rp {{ number_format($totalPemasukanBulan, 0, ',', '.') }}

            </div>

            <div class="summary-period">

                {{ $namaBulan[$bulan] }} {{ $tahun }}

            </div>

        </div>


        <!-- PENGELUARAN -->

        <div class="summary-card expense">

            <div class="summary-icon">
                ↓
            </div>

            <div class="summary-label">
                Pengeluaran Bulan Ini
            </div>

            <div class="summary-value">

                Rp {{ number_format($totalPengeluaranBulan, 0, ',', '.') }}

            </div>

            <div class="summary-period">

                {{ $namaBulan[$bulan] }} {{ $tahun }}

            </div>

        </div>


        <!-- SALDO -->

        <div class="summary-card balance">

            <div class="summary-icon">
                Rp
            </div>

            <div class="summary-label">
                Saldo Bulan Ini
            </div>

            <div class="summary-value">

                Rp {{ number_format($saldoBulan, 0, ',', '.') }}

            </div>

            <div class="summary-period">

                {{ $namaBulan[$bulan] }} {{ $tahun }}

            </div>

        </div>


    </section>



    <!-- =====================================
         EXPORT
    ====================================== -->

    <div class="export-area">

        <div class="export-info">

            <h3>
                Export Laporan
            </h3>

            <p>
                Download data transaksi periode
                {{ $namaBulan[$bulan] }} {{ $tahun }}.
            </p>

        </div>


        <div class="export-buttons">

            <!-- EXCEL / CSV -->

            <a
                href="{{ route('laporan.excel', [
                    'bulan' => $bulan,
                    'tahun' => $tahun
                ]) }}"
                class="export-button excel-button"
            >

                ↓

                Excel / CSV

            </a>


            <!-- PDF / PRINT -->

            <a
                href="{{ route('laporan.pdf', [
                    'bulan' => $bulan,
                    'tahun' => $tahun
                ]) }}"
                class="export-button pdf-button"
                target="_blank"
            >

                PDF / Cetak

            </a>

        </div>

    </div>



    <!-- =====================================
         LAPORAN BULANAN
    ====================================== -->

    <div class="card">

        <div class="card-header">

            <div>

                <h3>
                    Ringkasan Bulanan
                </h3>

                <p>
                    Rekap pemasukan dan pengeluaran
                    selama tahun {{ $tahun }}.
                </p>

            </div>

        </div>


        <div class="table-wrapper">

            <table>

                <thead>

                    <tr>

                        <th>
                            Bulan
                        </th>

                        <th>
                            Pemasukan
                        </th>

                        <th>
                            Pengeluaran
                        </th>

                        <th>
                            Saldo
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @foreach($laporanBulanan as $item)

                        <tr
                            class="{{ $item['bulan'] == $bulan ? 'current-month' : '' }}"
                        >

                            <td>

                                <span class="month-name">

                                    {{ $item['nama_bulan'] }}

                                </span>


                                @if($item['bulan'] == $bulan)

                                    <span class="current-badge">
                                        TERPILIH
                                    </span>

                                @endif

                            </td>


                            <td class="income-text">

                                Rp
                                {{ number_format($item['pemasukan'], 0, ',', '.') }}

                            </td>


                            <td class="expense-text">

                                Rp
                                {{ number_format($item['pengeluaran'], 0, ',', '.') }}

                            </td>


                            <td
                                class="
                                    balance-text
                                    {{ $item['saldo'] >= 0 ? 'positive' : 'negative' }}
                                "
                            >

                                Rp
                                {{ number_format($item['saldo'], 0, ',', '.') }}

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>



    <!-- =====================================
         LAPORAN TAHUNAN
    ====================================== -->

    <div class="card">

        <div class="card-header">

            <div>

                <h3>
                    Ringkasan Tahunan
                </h3>

                <p>
                    Perbandingan kondisi keuangan
                    berdasarkan tahun.
                </p>

            </div>

        </div>


        <div class="table-wrapper">

            <table class="year-table">

                <thead>

                    <tr>

                        <th>
                            Tahun
                        </th>

                        <th>
                            Pemasukan
                        </th>

                        <th>
                            Pengeluaran
                        </th>

                        <th>
                            Saldo
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @foreach($laporanTahunan as $item)

                        <tr>

                            <td>

                                {{ $item['tahun'] }}

                            </td>


                            <td class="income-text">

                                Rp
                                {{ number_format($item['pemasukan'], 0, ',', '.') }}

                            </td>


                            <td class="expense-text">

                                Rp
                                {{ number_format($item['pengeluaran'], 0, ',', '.') }}

                            </td>


                            <td
                                class="
                                    balance-text
                                    {{ $item['saldo'] >= 0 ? 'positive' : 'negative' }}
                                "
                            >

                                Rp
                                {{ number_format($item['saldo'], 0, ',', '.') }}

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>



    <!-- =====================================
         TRANSAKSI PERIODE TERPILIH
    ====================================== -->

    <div class="card">

        <div class="card-header">

            <div>

                <h3>
                    Detail Transaksi
                </h3>

                <p>
                    Daftar transaksi pada
                    {{ $namaBulan[$bulan] }} {{ $tahun }}.
                </p>

            </div>

        </div>


        @if($transaksis->count() > 0)


            <div class="table-wrapper">

                <table class="transaction-table">

                    <thead>

                        <tr>

                            <th>
                                Tanggal
                            </th>

                            <th>
                                Jenis
                            </th>

                            <th>
                                Kategori
                            </th>

                            <th>
                                Keterangan
                            </th>

                            <th>
                                Jumlah
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @foreach($transaksis as $transaksi)

                            <tr>

                                <td>

                                    {{ date(
                                        'd/m/Y',
                                        strtotime($transaksi->tanggal)
                                    ) }}

                                </td>


                                <td>

                                    @if($transaksi->jenis === 'masuk')

                                        <span
                                            class="
                                                type-badge
                                                type-income
                                            "
                                        >
                                            Pemasukan
                                        </span>

                                    @else

                                        <span
                                            class="
                                                type-badge
                                                type-expense
                                            "
                                        >
                                            Pengeluaran
                                        </span>

                                    @endif

                                </td>


                                <td>

                                    <strong>
                                        {{ $transaksi->kategori }}
                                    </strong>

                                </td>


                                <td>

                                    <div
                                        class="transaction-description"
                                    >

                                        {{ $transaksi->keterangan ?? '-' }}

                                    </div>

                                </td>


                                <td
                                    class="
                                        transaction-amount
                                        {{ $transaksi->jenis === 'masuk'
                                            ? 'income-text'
                                            : 'expense-text'
                                        }}
                                    "
                                >

                                    {{ $transaksi->jenis === 'masuk'
                                        ? '+'
                                        : '-'
                                    }}

                                    Rp
                                    {{ number_format(
                                        $transaksi->jumlah,
                                        0,
                                        ',',
                                        '.'
                                    ) }}

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>


        @else


            <div class="empty">

                <div class="empty-icon">
                    —
                </div>

                <strong>
                    Belum ada transaksi
                </strong>

                <span>
                    Tidak ada transaksi pada
                    {{ $namaBulan[$bulan] }} {{ $tahun }}.
                </span>

            </div>


        @endif

    </div>



    <!-- =====================================
         FOOTER
    ====================================== -->

    <footer class="footer">

        Finora · Kelola uangmu dengan lebih teratur.

        <br>

        © {{ date('Y') }} Finora

    </footer>


</div>


</body>

</html>
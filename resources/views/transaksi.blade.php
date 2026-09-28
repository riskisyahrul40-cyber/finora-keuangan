<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard — Finora</title>

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


        /* ==========================================
           MAIN CONTAINER
        ========================================== */

        .container {
            width: 100%;

            max-width: 1180px;

            margin: auto;

            padding: 35px 30px 60px;
        }


        /* ==========================================
           HEADER
        ========================================== */

        .header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding-bottom: 28px;

            border-bottom:
                1px solid #dedee2;

            margin-bottom: 32px;

            animation:
                fadeDown .6s ease;
        }


        @keyframes fadeDown {

            from {
                opacity: 0;

                transform:
                    translateY(-15px);
            }

            to {
                opacity: 1;

                transform:
                    translateY(0);
            }

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


        .user-name {

            color: #1d1d1f;

            font-weight: 600;
        }


        /* ==========================================
           HEADER ACTIONS
        ========================================== */

        .header-actions {

            display: flex;

            align-items: center;

            gap: 10px;
        }


        /* ==========================================
           REPORT BUTTON
        ========================================== */

        .report-button {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            text-decoration: none;

            border: 1px solid #d2d2d7;

            background: #111;

            color: white;

            padding: 11px 18px;

            border-radius: 13px;

            font-family: inherit;

            font-size: 13px;

            font-weight: 500;

            cursor: pointer;

            transition: .25s ease;
        }


        .report-button:hover {

            background: #292929;

            border-color: #292929;

            transform:
                translateY(-1px);
        }


        /* ==========================================
           LOGOUT
        ========================================== */

        .logout-button {

            border: 1px solid #d2d2d7;

            background: white;

            color: #1d1d1f;

            padding: 11px 18px;

            border-radius: 13px;

            font-family: inherit;

            font-size: 13px;

            font-weight: 500;

            cursor: pointer;

            transition: .25s ease;
        }


        .logout-button:hover {

            background: #111;

            color: white;

            border-color: #111;

            transform:
                translateY(-1px);
        }


        /* ==========================================
           WELCOME
        ========================================== */

        .welcome {

            margin-bottom: 30px;

            animation:
                fadeUp .7s ease;
        }


        @keyframes fadeUp {

            from {

                opacity: 0;

                transform:
                    translateY(20px);
            }

            to {

                opacity: 1;

                transform:
                    translateY(0);
            }

        }


        .welcome small {

            color: #86868b;

            font-size: 12px;

            letter-spacing: .7px;

            text-transform: uppercase;
        }


        .welcome h2 {

            font-size: 38px;

            letter-spacing: -1.8px;

            margin-top: 8px;

            font-weight: 600;
        }


        .welcome p {

            color: #6e6e73;

            margin-top: 8px;

            font-size: 15px;
        }


        /* ==========================================
           SUCCESS
        ========================================== */

        .success {

            display: flex;

            align-items: center;

            gap: 10px;

            background: #edf9f1;

            border:
                1px solid #ccebd7;

            color: #177245;

            padding: 14px 17px;

            border-radius: 14px;

            margin-bottom: 25px;

            font-size: 13px;

            animation:
                fadeUp .5s ease;
        }


        .success-icon {

            width: 24px;

            height: 24px;

            border-radius: 50%;

            background: #8bd3a8;

            color: #123522;

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: 700;

            font-size: 12px;
        }


        /* ==========================================
           SUMMARY CARDS
        ========================================== */

        .summary {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 18px;

            margin-bottom: 25px;
        }


        .summary-card {

            position: relative;

            overflow: hidden;

            background: white;

            border:
                1px solid #e5e5e7;

            border-radius: 22px;

            padding: 26px;

            min-height: 150px;

            box-shadow:
                0 8px 30px rgba(0,0,0,.035);

            transition:
                transform .3s ease,
                box-shadow .3s ease;

            animation:
                fadeUp .7s ease;
        }


        .summary-card:hover {

            transform:
                translateY(-4px);

            box-shadow:
                0 18px 40px rgba(0,0,0,.08);
        }


        .summary-card::after {

            content: "";

            position: absolute;

            width: 90px;

            height: 90px;

            border-radius: 50%;

            right: -35px;

            bottom: -40px;

            background: #f3f3f3;
        }


        .summary-label {

            color: #86868b;

            font-size: 12px;

            font-weight: 500;

            letter-spacing: .2px;
        }


        .summary-value {

            position: relative;

            z-index: 2;

            font-size: 27px;

            font-weight: 600;

            letter-spacing: -.8px;

            margin-top: 12px;
        }


        .summary-card.balance .summary-value {

            color: #1d1d1f;
        }


        .summary-card.income .summary-value {

            color: #12966c;
        }


        .summary-card.expense .summary-value {

            color: #d94a55;
        }


        .summary-icon {

            position: absolute;

            right: 24px;

            top: 24px;

            width: 38px;

            height: 38px;

            border-radius: 12px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 15px;

            font-weight: 600;
        }


        .balance .summary-icon {

            background: #f0f0f2;

            color: #1d1d1f;
        }


        .income .summary-icon {

            background: #eaf8f0;

            color: #12966c;
        }


        .expense .summary-icon {

            background: #fff0f1;

            color: #d94a55;
        }


        /* ==========================================
           REPORT BANNER
        ========================================== */

        .report-banner {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            background: #111;

            color: white;

            border-radius: 22px;

            padding: 22px 25px;

            margin-bottom: 25px;

            box-shadow:
                0 10px 30px rgba(0,0,0,.08);

            animation:
                fadeUp .8s ease;
        }


        .report-banner-content {

            display: flex;

            align-items: center;

            gap: 15px;
        }


        .report-banner-icon {

            width: 45px;

            height: 45px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: rgba(255,255,255,.1);

            border-radius: 13px;

            font-size: 20px;
        }


        .report-banner h3 {

            font-size: 16px;

            font-weight: 600;

            letter-spacing: -.3px;
        }


        .report-banner p {

            color: #a1a1a6;

            font-size: 12px;

            margin-top: 5px;
        }


        .report-banner-button {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            text-decoration: none;

            background: white;

            color: #111;

            padding: 11px 17px;

            border-radius: 12px;

            font-size: 12px;

            font-weight: 600;

            transition: .25s ease;

            white-space: nowrap;
        }


        .report-banner-button:hover {

            background: #e5e5e7;

            transform:
                translateY(-2px);
        }


        /* ==========================================
           MAIN GRID
        ========================================== */

        .main-grid {

            display: grid;

            grid-template-columns:
                360px 1fr;

            gap: 20px;

            align-items: stretch;
        }


        .card {

            background: white;

            border:
                1px solid #e5e5e7;

            border-radius: 24px;

            box-shadow:
                0 8px 30px rgba(0,0,0,.035);

            animation:
                fadeUp .8s ease;
        }


        /* ==========================================
           FORM CARD
        ========================================== */

        .form-card {

            padding: 27px;
        }


        .card-header {

            margin-bottom: 24px;
        }


        .card-header h3 {

            font-size: 19px;

            letter-spacing: -.5px;

            font-weight: 600;
        }


        .card-header p {

            color: #86868b;

            font-size: 12px;

            margin-top: 6px;

            line-height: 1.5;
        }


        .form-group {

            margin-bottom: 17px;
        }


        .form-group label {

            display: block;

            font-size: 12px;

            font-weight: 500;

            color: #444;

            margin-bottom: 7px;
        }


        .input,
        .select,
        .textarea {

            width: 100%;

            border:
                1px solid #d2d2d7;

            border-radius: 13px;

            background: #fbfbfd;

            color: #1d1d1f;

            font-family: inherit;

            font-size: 13px;

            outline: none;

            transition: .25s ease;
        }


        .input,
        .select {

            height: 47px;

            padding:
                0 14px;
        }


        .textarea {

            min-height: 80px;

            resize: vertical;

            padding: 12px 14px;
        }


        .input::placeholder,
        .textarea::placeholder {

            color: #a1a1a6;
        }


        .input:focus,
        .select:focus,
        .textarea:focus {

            background: white;

            border-color: #111;

            box-shadow:
                0 0 0 4px rgba(0,0,0,.045);
        }


        .save-button {

            width: 100%;

            height: 49px;

            border: none;

            border-radius: 14px;

            background: #111;

            color: white;

            font-family: inherit;

            font-size: 13px;

            font-weight: 600;

            cursor: pointer;

            margin-top: 5px;

            transition: .3s ease;

            box-shadow:
                0 10px 20px rgba(0,0,0,.12);
        }


        .save-button:hover {

            background: #292929;

            transform:
                translateY(-2px);

            box-shadow:
                0 14px 28px rgba(0,0,0,.18);
        }


        .save-button:active {

            transform:
                translateY(0);
        }


        /* ==========================================
           TRANSACTION CARD
        ========================================== */

        .transaction-card {

            padding: 27px;

            min-width: 0;
        }


        .transaction-header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 20px;
        }


        .transaction-header h3 {

            font-size: 19px;

            letter-spacing: -.5px;

            font-weight: 600;
        }


        .transaction-count {

            font-size: 11px;

            color: #86868b;

            background: #f5f5f7;

            padding: 6px 10px;

            border-radius: 20px;
        }


        /* ==========================================
           TABLE
        ========================================== */

        .table-wrapper {

            width: 100%;

            overflow-x: auto;
        }


        table {

            width: 100%;

            border-collapse: collapse;

            min-width: 540px;
        }


        thead {

            border-bottom:
                1px solid #e5e5e7;
        }


        th {

            text-align: left;

            padding:
                11px 10px;

            color: #86868b;

            font-size: 10px;

            font-weight: 600;

            text-transform: uppercase;

            letter-spacing: .6px;
        }


        td {

            padding:
                15px 10px;

            border-bottom:
                1px solid #f0f0f2;

            font-size: 13px;

            vertical-align: middle;
        }


        tbody tr {

            transition: .2s ease;
        }


        tbody tr:hover {

            background: #fafafa;
        }


        .date {

            color: #6e6e73;

            white-space: nowrap;
        }


        .category {

            font-weight: 500;

            color: #1d1d1f;
        }


        .description {

            color: #a1a1a6;

            font-size: 11px;

            margin-top: 3px;

            max-width: 170px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }


        .amount {

            font-weight: 600;

            white-space: nowrap;
        }


        .amount.income {

            color: #12966c;
        }


        .amount.expense {

            color: #d94a55;
        }


        /* ==========================================
           DELETE BUTTON
        ========================================== */

        .delete-button {

            border: none;

            background: #fff0f1;

            color: #d94a55;

            padding: 7px 11px;

            border-radius: 9px;

            font-family: inherit;

            font-size: 11px;

            font-weight: 500;

            cursor: pointer;

            transition: .2s ease;
        }


        .delete-button:hover {

            background: #d94a55;

            color: white;
        }


        /* ==========================================
           EMPTY STATE
        ========================================== */

        .empty {

            text-align: center;

            padding: 70px 20px;

            color: #a1a1a6;
        }


        .empty-icon {

            width: 55px;

            height: 55px;

            border-radius: 17px;

            background: #f5f5f7;

            display: flex;

            align-items: center;

            justify-content: center;

            margin:
                0 auto 15px;

            font-size: 20px;

            color: #86868b;
        }


        .empty strong {

            display: block;

            color: #6e6e73;

            font-size: 13px;

            margin-bottom: 5px;
        }


        .empty span {

            font-size: 12px;
        }


        /* ==========================================
           FOOTER
        ========================================== */

        .footer {

            text-align: center;

            color: #a1a1a6;

            font-size: 11px;

            margin-top: 35px;
        }


        /* ==========================================
           RESPONSIVE
        ========================================== */

        @media (max-width: 900px) {

            .main-grid {

                grid-template-columns: 1fr;
            }


            .summary {

                grid-template-columns:
                    repeat(3, 1fr);
            }

        }


        @media (max-width: 650px) {

            .container {

                padding:
                    25px 18px 40px;
            }


            .header {

                align-items: flex-start;

                gap: 15px;
            }


            .header-actions {

                gap: 6px;
            }


            .brand-text p {

                max-width: 180px;
            }


            .welcome h2 {

                font-size: 31px;
            }


            .summary {

                grid-template-columns: 1fr;

                gap: 12px;
            }


            .summary-card {

                min-height: 125px;

                padding: 22px;
            }


            .main-grid {

                gap: 15px;
            }


            .form-card,
            .transaction-card {

                padding: 21px;
            }


            .transaction-header {

                align-items: flex-start;

                gap: 10px;
            }


            .logout-button,
            .report-button {

                padding:
                    9px 12px;

                font-size: 11px;
            }


            .brand-icon {

                width: 38px;

                height: 38px;

                border-radius: 11px;
            }


            .brand-text h1 {

                font-size: 19px;
            }


            .report-banner {

                flex-direction: column;

                align-items: flex-start;
            }


            .report-banner-button {

                width: 100%;

                justify-content: center;
            }

        }

    </style>

</head>


<body>


<div class="container">


    <!-- ==========================================
         HEADER
    =========================================== -->

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

            <!-- LAPORAN -->

            <a
                href="{{ route('laporan.index') }}"
                class="report-button"
            >
                Laporan
            </a>


            <!-- LOGOUT -->

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



    <!-- ==========================================
         WELCOME
    =========================================== -->

    <section class="welcome">

        <small>
            DASHBOARD
        </small>

        <h2>
            Halo, {{ Auth::user()->name }}.
        </h2>

        <p>
            Kelola pemasukan dan pengeluaranmu
            dengan lebih teratur.
        </p>

    </section>



    <!-- ==========================================
         SUCCESS MESSAGE
    =========================================== -->

    @if(session('success'))

        <div class="success">

            <div class="success-icon">
                ✓
            </div>

            <span>
                {{ session('success') }}
            </span>

        </div>

    @endif



    <!-- ==========================================
         SUMMARY
    ========================================== -->

    <section class="summary">


        <!-- SALDO -->

        <div class="summary-card balance">

            <div class="summary-icon">
                Rp
            </div>

            <div class="summary-label">
                TOTAL SALDO
            </div>

            <div class="summary-value">

                Rp {{ number_format($saldo, 0, ',', '.') }}

            </div>

        </div>


        <!-- PEMASUKAN -->

        <div class="summary-card income">

            <div class="summary-icon">
                ↑
            </div>

            <div class="summary-label">
                TOTAL PEMASUKAN
            </div>

            <div class="summary-value">

                Rp {{ number_format($totalPemasukan, 0, ',', '.') }}

            </div>

        </div>


        <!-- PENGELUARAN -->

        <div class="summary-card expense">

            <div class="summary-icon">
                ↓
            </div>

            <div class="summary-label">
                TOTAL PENGELUARAN
            </div>

            <div class="summary-value">

                Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}

            </div>

        </div>


    </section>



    <!-- ==========================================
         REPORT BANNER
    ========================================== -->

    <div class="report-banner">

        <div class="report-banner-content">

            <div class="report-banner-icon">
                ↗
            </div>

            <div>

                <h3>
                    Lihat Laporan Keuangan
                </h3>

                <p>
                    Lihat ringkasan pemasukan dan pengeluaran
                    berdasarkan bulan dan tahun.
                </p>

            </div>

        </div>


        <a
            href="{{ route('laporan.index') }}"
            class="report-banner-button"
        >

            Buka Laporan

            <span>
                →
            </span>

        </a>

    </div>



    <!-- ==========================================
         MAIN CONTENT
    =========================================== -->

    <section class="main-grid">


        <!-- ======================================
             ADD TRANSACTION
        ======================================= -->

        <div class="card form-card">

            <div class="card-header">

                <h3>
                    Tambah Transaksi
                </h3>

                <p>
                    Catat pemasukan atau pengeluaran
                    baru kamu.
                </p>

            </div>


            <form
                action="{{ route('transaksi.store') }}"
                method="POST"
            >

                @csrf


                <!-- JENIS -->

                <div class="form-group">

                    <label>
                        Jenis Transaksi
                    </label>

                    <select
                        name="jenis"
                        class="select"
                        required
                    >

                        <option value="masuk">
                            Pemasukan
                        </option>

                        <option value="keluar">
                            Pengeluaran
                        </option>

                    </select>

                </div>


                <!-- KATEGORI -->

                <div class="form-group">

                    <label>
                        Kategori
                    </label>

                    <input
                        type="text"
                        name="kategori"
                        class="input"
                        placeholder="Contoh: Gaji, Makanan"
                        required
                    >

                </div>


                <!-- JUMLAH -->

                <div class="form-group">

                    <label>
                        Jumlah (Rp)
                    </label>

                    <input
                        type="number"
                        name="jumlah"
                        class="input"
                        placeholder="Contoh: 50000"
                        min="0"
                        required
                    >

                </div>


                <!-- TANGGAL -->

                <div class="form-group">

                    <label>
                        Tanggal
                    </label>

                    <input
                        type="date"
                        name="tanggal"
                        value="{{ date('Y-m-d') }}"
                        class="input"
                        required
                    >

                </div>


                <!-- KETERANGAN -->

                <div class="form-group">

                    <label>

                        Keterangan

                        <span style="color:#a1a1a6;">
                            (Opsional)
                        </span>

                    </label>

                    <textarea
                        name="keterangan"
                        class="textarea"
                        placeholder="Tambahkan catatan..."
                    ></textarea>

                </div>


                <!-- BUTTON -->

                <button
                    type="submit"
                    class="save-button"
                >

                    + &nbsp; Simpan Transaksi

                </button>


            </form>

        </div>



        <!-- ======================================
             TRANSACTION HISTORY
        ======================================= -->

        <div class="card transaction-card">


            <div class="transaction-header">

                <h3>
                    Riwayat Transaksi
                </h3>

                <span class="transaction-count">

                    {{ count($transaksis) }} transaksi

                </span>

            </div>


            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>

                            <th>
                                Tanggal
                            </th>

                            <th>
                                Kategori
                            </th>

                            <th>
                                Jumlah
                            </th>

                            <th>
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        @forelse($transaksis as $item)


                            <tr>


                                <!-- TANGGAL -->

                                <td class="date">

                                    {{ date('d/m/Y', strtotime($item->tanggal)) }}

                                </td>


                                <!-- KATEGORI -->

                                <td>

                                    <div class="category">

                                        {{ $item->kategori }}

                                    </div>


                                    @if($item->keterangan)

                                        <div class="description">

                                            {{ $item->keterangan }}

                                        </div>

                                    @endif

                                </td>


                                <!-- JUMLAH -->

                                <td>

                                    <div
                                        class="amount {{ $item->jenis == 'masuk' ? 'income' : 'expense' }}"
                                    >

                                        {{ $item->jenis == 'masuk' ? '+' : '-' }}

                                        Rp {{ number_format($item->jumlah, 0, ',', '.') }}

                                    </div>

                                </td>


                                <!-- AKSI -->

                                <td>

                                    <form
                                        action="{{ route('transaksi.destroy', $item->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus transaksi ini?')"
                                    >

                                        @csrf

                                        @method('DELETE')


                                        <button
                                            type="submit"
                                            class="delete-button"
                                        >

                                            Hapus

                                        </button>

                                    </form>

                                </td>


                            </tr>


                        @empty


                            <tr>

                                <td
                                    colspan="4"
                                >

                                    <div class="empty">

                                        <div class="empty-icon">
                                            —
                                        </div>

                                        <strong>
                                            Belum ada transaksi
                                        </strong>

                                        <span>
                                            Transaksi yang kamu tambahkan
                                            akan muncul di sini.
                                        </span>

                                    </div>

                                </td>

                            </tr>


                        @endforelse


                    </tbody>

                </table>

            </div>


        </div>


    </section>



    <!-- ==========================================
         FOOTER
    =========================================== -->

    <footer class="footer">

        Finora · Kelola uangmu dengan lebih teratur.

        <br>

        © {{ date('Y') }} Finora

    </footer>


</div>


</body>

</html>
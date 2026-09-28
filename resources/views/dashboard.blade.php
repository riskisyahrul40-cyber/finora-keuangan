<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Finora - Dashboard</title>

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
                "Segoe UI",
                Arial,
                sans-serif;

            background: #f5f5f7;

            color: #1d1d1f;

            min-height: 100vh;
        }

        .container {
            max-width: 1200px;

            margin: auto;

            padding: 30px 25px 50px;
        }

        /* =========================
           HEADER
        ========================= */

        .header {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 35px;
        }

        .brand {
            display: flex;

            align-items: center;

            gap: 12px;
        }

        .logo {
            width: 45px;

            height: 45px;

            border-radius: 13px;

            background: #111;

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 20px;

            font-weight: 700;
        }

        .brand h1 {
            font-size: 22px;

            letter-spacing: -0.5px;
        }

        .brand p {
            font-size: 12px;

            color: #777;

            margin-top: 3px;
        }

        .header-actions {
            display: flex;

            align-items: center;

            gap: 10px;
        }

        .report-button {
            text-decoration: none;

            color: #111;

            background: white;

            border: 1px solid #d2d2d7;

            padding: 10px 15px;

            border-radius: 10px;

            font-size: 13px;

            transition: .2s;
        }

        .report-button:hover {
            background: #f0f0f2;
        }

        .logout-button {
            border: none;

            background: #111;

            color: white;

            padding: 10px 15px;

            border-radius: 10px;

            font-size: 13px;

            cursor: pointer;

            transition: .2s;
        }

        .logout-button:hover {
            background: #333;
        }


        /* =========================
           WELCOME
        ========================= */

        .welcome {
            margin-bottom: 25px;
        }

        .welcome h2 {
            font-size: 30px;

            letter-spacing: -1px;

            margin-bottom: 7px;
        }

        .welcome p {
            color: #777;

            font-size: 14px;
        }


        /* =========================
           SUCCESS MESSAGE
        ========================= */

        .success {
            background: #e9f8f1;

            color: #147a56;

            border: 1px solid #bfe8d5;

            padding: 13px 16px;

            border-radius: 12px;

            margin-bottom: 20px;

            font-size: 13px;
        }


        /* =========================
           SUMMARY
        ========================= */

        .summary {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 15px;

            margin-bottom: 30px;
        }

        .card {
            background: white;

            border: 1px solid #e5e5e7;

            border-radius: 18px;

            padding: 22px;

            box-shadow:
                0 4px 15px rgba(0, 0, 0, .03);
        }

        .card-label {
            color: #777;

            font-size: 12px;

            margin-bottom: 10px;
        }

        .card-value {
            font-size: 23px;

            font-weight: 700;
        }

        .income {
            color: #12966c;
        }

        .expense {
            color: #d94a55;
        }

        .balance {
            color: #111;
        }


        /* =========================
           MAIN GRID
        ========================= */

        .content-grid {
            display: grid;

            grid-template-columns:
                1fr 1.7fr;

            gap: 20px;
        }

        .box {
            background: white;

            border: 1px solid #e5e5e7;

            border-radius: 18px;

            padding: 23px;

            box-shadow:
                0 4px 15px rgba(0, 0, 0, .03);
        }

        .box-title {
            font-size: 18px;

            font-weight: 700;

            margin-bottom: 20px;
        }


        /* =========================
           FORM
        ========================= */

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;

            font-size: 12px;

            color: #666;

            margin-bottom: 7px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;

            padding: 11px 12px;

            border: 1px solid #d2d2d7;

            border-radius: 10px;

            outline: none;

            font-family: inherit;

            font-size: 13px;

            background: white;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #111;

            box-shadow:
                0 0 0 2px rgba(0,0,0,.05);
        }

        .form-group textarea {
            min-height: 80px;

            resize: vertical;
        }

        .submit-button {
            width: 100%;

            border: none;

            background: #111;

            color: white;

            padding: 12px;

            border-radius: 10px;

            font-size: 13px;

            font-weight: 600;

            cursor: pointer;

            transition: .2s;
        }

        .submit-button:hover {
            background: #333;
        }


        /* =========================
           TABLE
        ========================= */

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;

            border-collapse: collapse;
        }

        th {
            text-align: left;

            padding: 11px;

            background: #f5f5f7;

            color: #666;

            font-size: 11px;

            text-transform: uppercase;
        }

        td {
            padding: 13px 11px;

            border-bottom:
                1px solid #eee;

            font-size: 12px;
        }

        .type-income {
            color: #12966c;

            font-weight: 600;
        }

        .type-expense {
            color: #d94a55;

            font-weight: 600;
        }

        .delete-button {
            border: none;

            background: #fff0f1;

            color: #d94a55;

            padding: 7px 10px;

            border-radius: 8px;

            cursor: pointer;

            font-size: 11px;
        }

        .delete-button:hover {
            background: #ffe0e3;
        }


        /* =========================
           EMPTY
        ========================= */

        .empty {
            text-align: center;

            padding: 35px 15px;

            color: #999;

            font-size: 13px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 850px) {

            .summary {
                grid-template-columns: 1fr;
            }

            .content-grid {
                grid-template-columns: 1fr;
            }

            .header {
                align-items: flex-start;

                gap: 15px;
            }

            .header-actions {
                flex-direction: column;

                align-items: stretch;
            }

        }

        @media (max-width: 600px) {

            .container {
                padding: 20px 15px;
            }

            .header {
                flex-direction: column;
            }

            .header-actions {
                width: 100%;

                flex-direction: row;
            }

            .report-button,
            .logout-button {
                flex: 1;

                text-align: center;
            }

            .welcome h2 {
                font-size: 25px;
            }

        }

    </style>

</head>


<body>


<div class="container">


    <!-- =========================
         HEADER
    ========================= -->

    <div class="header">


        <div class="brand">

            <div class="logo">
                F
            </div>

            <div>

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
                href="{{ route('laporan.index') }}"
                class="report-button"
            >
                Laporan
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


    </div>



    <!-- =========================
         WELCOME
    ========================= -->

    <div class="welcome">

        <h2>
            Dashboard
        </h2>

        <p>
            Kelola pemasukan dan pengeluaran
            kamu dengan lebih mudah.
        </p>

    </div>



    <!-- =========================
         SUCCESS
    ========================= -->

    @if(session('success'))

        <div class="success">

            {{ session('success') }}

        </div>

    @endif



    <!-- =========================
         SUMMARY
    ========================= -->

    <div class="summary">


        <div class="card">

            <div class="card-label">
                Total Pemasukan
            </div>

            <div class="card-value income">

                Rp
                {{ number_format(
                    $totalPemasukan,
                    0,
                    ',',
                    '.'
                ) }}

            </div>

        </div>



        <div class="card">

            <div class="card-label">
                Total Pengeluaran
            </div>

            <div class="card-value expense">

                Rp
                {{ number_format(
                    $totalPengeluaran,
                    0,
                    ',',
                    '.'
                ) }}

            </div>

        </div>



        <div class="card">

            <div class="card-label">
                Saldo
            </div>

            <div class="card-value balance">

                Rp
                {{ number_format(
                    $saldo,
                    0,
                    ',',
                    '.'
                ) }}

            </div>

        </div>


    </div>



    <!-- =========================
         CONTENT
    ========================= -->

    <div class="content-grid">


        <!-- =====================
             FORM TRANSAKSI
        ====================== -->

        <div class="box">


            <div class="box-title">

                Tambah Transaksi

            </div>


            <form
                method="POST"
                action="{{ route('transaksi.store') }}"
            >

                @csrf


                <div class="form-group">

                    <label>
                        Jenis Transaksi
                    </label>

                    <select
                        name="jenis"
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



                <div class="form-group">

                    <label>
                        Kategori
                    </label>

                    <input
                        type="text"
                        name="kategori"
                        placeholder="Contoh: Gaji, Makan, Transportasi"
                        required
                    >

                </div>



                <div class="form-group">

                    <label>
                        Jumlah
                    </label>

                    <input
                        type="number"
                        name="jumlah"
                        placeholder="Contoh: 500000"
                        min="0"
                        required
                    >

                </div>



                <div class="form-group">

                    <label>
                        Tanggal
                    </label>

                    <input
                        type="date"
                        name="tanggal"
                        value="{{ date('Y-m-d') }}"
                        required
                    >

                </div>



                <div class="form-group">

                    <label>
                        Keterangan
                    </label>

                    <textarea
                        name="keterangan"
                        placeholder="Tambahkan keterangan..."
                    ></textarea>

                </div>



                <button
                    type="submit"
                    class="submit-button"
                >

                    + Tambah Transaksi

                </button>


            </form>


        </div>



        <!-- =====================
             TRANSAKSI TERBARU
        ====================== -->

        <div class="box">


            <div class="box-title">

                Transaksi Terbaru

            </div>


            @if($transaksis->count() > 0)


                <div class="table-wrapper">


                    <table>


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
                                    Jumlah
                                </th>

                                <th>
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            @foreach($transaksis as $transaksi)


                                <tr>


                                    <td>

                                        {{ date(
                                            'd/m/Y',
                                            strtotime(
                                                $transaksi->tanggal
                                            )
                                        ) }}

                                    </td>


                                    <td>

                                        @if($transaksi->jenis === 'masuk')

                                            <span class="type-income">
                                                Pemasukan
                                            </span>

                                        @else

                                            <span class="type-expense">
                                                Pengeluaran
                                            </span>

                                        @endif

                                    </td>


                                    <td>

                                        {{ $transaksi->kategori }}

                                    </td>


                                    <td>

                                        <strong>

                                            Rp
                                            {{ number_format(
                                                $transaksi->jumlah,
                                                0,
                                                ',',
                                                '.'
                                            ) }}

                                        </strong>

                                    </td>


                                    <td>


                                        <form
                                            method="POST"
                                            action="{{ route(
                                                'transaksi.destroy',
                                                $transaksi->id
                                            ) }}"
                                        >

                                            @csrf

                                            @method('DELETE')


                                            <button
                                                type="submit"
                                                class="delete-button"
                                                onclick="
                                                    return confirm(
                                                        'Hapus transaksi ini?'
                                                    )
                                                "
                                            >

                                                Hapus

                                            </button>


                                        </form>


                                    </td>


                                </tr>


                            @endforeach


                        </tbody>


                    </table>


                </div>


            @else


                <div class="empty">

                    Belum ada transaksi.

                </div>


            @endif


        </div>


    </div>


</div>


</body>

</html>
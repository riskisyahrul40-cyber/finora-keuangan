<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Laporan Keuangan - {{ $namaBulan[$bulan] }} {{ $tahun }}
    </title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background: #f5f5f7;

            color: #1d1d1f;

            padding: 35px;
        }


        .page {

            max-width: 900px;

            margin: auto;

            background: white;

            padding: 45px;

            border-radius: 20px;

            box-shadow:
                0 8px 30px rgba(0, 0, 0, .06);
        }



        /* =================================
           ACTION BUTTONS
        ================================= */

        .action-buttons {

            position: fixed;

            top: 20px;

            right: 20px;

            display: flex;

            align-items: center;

            gap: 8px;

            z-index: 9999;
        }


        .back-button,
        .print-button {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 11px 17px;

            border-radius: 10px;

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            font-size: 12px;

            font-weight: bold;

            cursor: pointer;

            text-decoration: none;

            transition:
                all .2s ease;
        }


        /* =================================
           TOMBOL KEMBALI
        ================================= */

        .back-button {

            background: white;

            color: #111;

            border:
                1px solid #d2d2d7;
        }


        .back-button:hover {

            background: #f5f5f7;

            transform:
                translateY(-1px);
        }



        /* =================================
           TOMBOL PRINT
        ================================= */

        .print-button {

            border:
                1px solid #111;

            background: #111;

            color: white;
        }


        .print-button:hover {

            background: #333;

            border-color: #333;

            transform:
                translateY(-1px);
        }



        /* =================================
           HEADER
        ================================= */

        .header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding-bottom: 25px;

            border-bottom:
                2px solid #111;

            margin-bottom: 30px;
        }


        .brand {

            display: flex;

            align-items: center;

            gap: 12px;
        }


        .brand-icon {

            width: 43px;

            height: 43px;

            border-radius: 12px;

            background: #111;

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 19px;

            font-weight: bold;
        }


        .brand h1 {

            font-size: 22px;

            margin-bottom: 4px;
        }


        .brand p {

            font-size: 11px;

            color: #777;
        }


        .report-date {

            text-align: right;

            font-size: 12px;

            color: #666;
        }


        .report-date strong {

            display: block;

            color: #111;

            font-size: 14px;

            margin-bottom: 4px;
        }



        /* =================================
           TITLE
        ================================= */

        .title {

            margin-bottom: 25px;
        }


        .title h2 {

            font-size: 25px;

            margin-bottom: 7px;
        }


        .title p {

            color: #777;

            font-size: 12px;
        }



        /* =================================
           SUMMARY
        ================================= */

        .summary {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 12px;

            margin-bottom: 30px;
        }


        .summary-card {

            border:
                1px solid #e5e5e7;

            border-radius: 13px;

            padding: 17px;
        }


        .summary-label {

            font-size: 10px;

            color: #777;

            text-transform: uppercase;

            letter-spacing: .5px;

            margin-bottom: 9px;
        }


        .summary-value {

            font-size: 16px;

            font-weight: bold;
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



        /* =================================
           SECTION
        ================================= */

        .section {

            margin-top: 25px;
        }


        .section-title {

            font-size: 16px;

            font-weight: bold;

            margin-bottom: 13px;

            padding-bottom: 9px;

            border-bottom:
                1px solid #e5e5e7;
        }



        /* =================================
           TABLE
        ================================= */

        table {

            width: 100%;

            border-collapse: collapse;
        }


        th {

            text-align: left;

            background: #f5f5f7;

            color: #555;

            font-size: 10px;

            text-transform: uppercase;

            padding: 10px;

            border-bottom:
                1px solid #ddd;
        }


        td {

            padding: 11px 10px;

            font-size: 11px;

            border-bottom:
                1px solid #eee;
        }


        .amount {

            text-align: right;

            font-weight: bold;

            white-space: nowrap;
        }


        .type-income {

            color: #12966c;

            font-weight: bold;
        }


        .type-expense {

            color: #d94a55;

            font-weight: bold;
        }


        .description {

            color: #777;
        }



        /* =================================
           TOTAL
        ================================= */

        .total-box {

            margin-top: 20px;

            padding: 16px;

            background: #f5f5f7;

            border-radius: 12px;

            display: flex;

            justify-content: space-between;

            align-items: center;
        }


        .total-box span {

            font-size: 12px;

            color: #666;
        }


        .total-box strong {

            font-size: 17px;
        }



        /* =================================
           EMPTY
        ================================= */

        .empty {

            text-align: center;

            padding: 35px;

            color: #888;

            font-size: 12px;
        }



        /* =================================
           FOOTER
        ================================= */

        .footer {

            margin-top: 40px;

            padding-top: 20px;

            border-top:
                1px solid #e5e5e7;

            text-align: center;

            color: #999;

            font-size: 10px;

            line-height: 1.6;
        }



        /* =================================
           RESPONSIVE
        ================================= */

        @media screen and (max-width: 700px) {

            body {

                padding: 20px;
            }


            .page {

                padding: 25px;

                border-radius: 15px;
            }


            .action-buttons {

                position: static;

                justify-content: flex-end;

                margin-bottom: 20px;
            }


            .header {

                flex-direction: column;

                align-items: flex-start;

                gap: 20px;
            }


            .report-date {

                text-align: left;
            }


            .summary {

                grid-template-columns: 1fr;
            }


            table {

                display: block;

                overflow-x: auto;

                white-space: nowrap;
            }

        }



        /* =================================
           PRINT
        ================================= */

        @media print {

            body {

                background: white;

                padding: 0;
            }


            .page {

                max-width: none;

                margin: 0;

                box-shadow: none;

                border-radius: 0;

                padding: 20px;
            }


            /*
             * Tombol hanya disembunyikan
             * pada hasil cetak/PDF.
             *
             * Tombol tetap ada dan terlihat
             * pada halaman print sebelum
             * proses cetak dilakukan.
             */

            .action-buttons {

                display: none;
            }


            @page {

                size: A4;

                margin: 15mm;
            }


            .summary-card {

                break-inside: avoid;
            }


            tr {

                break-inside: avoid;

                page-break-inside: avoid;
            }


            .total-box {

                break-inside: avoid;

                page-break-inside: avoid;
            }


            .footer {

                break-inside: avoid;

                page-break-inside: avoid;
            }

        }

    </style>

</head>


<body>



<!-- =================================
     ACTION BUTTONS
================================== -->

<div class="action-buttons">


    <!-- KEMBALI -->

    <a
        href="{{ route('laporan.index', [
            'bulan' => $bulan,
            'tahun' => $tahun
        ]) }}"
        class="back-button"
    >

        ← Kembali ke Laporan

    </a>


    <!-- PRINT -->

    <button
        type="button"
        class="print-button"
        onclick="window.print()"
    >

        Cetak / Simpan PDF

    </button>


</div>




<div class="page">



    <!-- =================================
         HEADER
    ================================== -->

    <div class="header">


        <div class="brand">


            <div class="brand-icon">

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



        <div class="report-date">


            <strong>

                LAPORAN KEUANGAN

            </strong>


            Periode:

            {{ $namaBulan[$bulan] }}

            {{ $tahun }}


        </div>


    </div>




    <!-- =================================
         TITLE
    ================================== -->

    <div class="title">


        <h2>

            Ringkasan Keuangan

        </h2>


        <p>

            Laporan pemasukan dan pengeluaran
            untuk periode
            {{ $namaBulan[$bulan] }}
            {{ $tahun }}.

        </p>


    </div>




    <!-- =================================
         SUMMARY
    ================================== -->

    <div class="summary">



        <!-- PEMASUKAN -->

        <div class="summary-card">


            <div class="summary-label">

                Total Pemasukan

            </div>


            <div class="summary-value income">


                Rp

                {{ number_format(
                    $totalPemasukan,
                    0,
                    ',',
                    '.'
                ) }}


            </div>


        </div>




        <!-- PENGELUARAN -->

        <div class="summary-card">


            <div class="summary-label">

                Total Pengeluaran

            </div>


            <div class="summary-value expense">


                Rp

                {{ number_format(
                    $totalPengeluaran,
                    0,
                    ',',
                    '.'
                ) }}


            </div>


        </div>




        <!-- SALDO -->

        <div class="summary-card">


            <div class="summary-label">

                Saldo

            </div>


            <div
                class="
                    summary-value
                    {{ ($totalPemasukan - $totalPengeluaran) >= 0
                        ? 'balance'
                        : 'expense'
                    }}
                "
            >


                Rp

                {{ number_format(
                    $totalPemasukan - $totalPengeluaran,
                    0,
                    ',',
                    '.'
                ) }}


            </div>


        </div>


    </div>




    <!-- =================================
         DETAIL TRANSAKSI
    ================================== -->

    <div class="section">


        <div class="section-title">

            Detail Transaksi

        </div>



        @if($transaksis->count() > 0)


            <table>


                <thead>

                    <tr>


                        <th style="width: 15%;">

                            Tanggal

                        </th>


                        <th style="width: 17%;">

                            Jenis

                        </th>


                        <th style="width: 18%;">

                            Kategori

                        </th>


                        <th>

                            Keterangan

                        </th>


                        <th
                            style="
                                width: 20%;
                                text-align: right;
                            "
                        >

                            Jumlah

                        </th>


                    </tr>

                </thead>



                <tbody>


                    @foreach($transaksis as $transaksi)


                        <tr>


                            <!-- TANGGAL -->

                            <td>

                                {{ date(
                                    'd/m/Y',
                                    strtotime(
                                        $transaksi->tanggal
                                    )
                                ) }}

                            </td>




                            <!-- JENIS -->

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




                            <!-- KATEGORI -->

                            <td>

                                {{ $transaksi->kategori }}

                            </td>




                            <!-- KETERANGAN -->

                            <td class="description">

                                {{ $transaksi->keterangan ?? '-' }}

                            </td>




                            <!-- JUMLAH -->

                            <td
                                class="
                                    amount
                                    {{ $transaksi->jenis === 'masuk'
                                        ? 'income'
                                        : 'expense'
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




            <!-- =================================
                 TOTAL
            ================================== -->

            <div class="total-box">


                <span>

                    Saldo Akhir Periode

                </span>


                <strong
                    class="
                        {{
                            ($totalPemasukan - $totalPengeluaran) >= 0
                                ? 'income'
                                : 'expense'
                        }}
                    "
                >

                    Rp

                    {{ number_format(
                        $totalPemasukan - $totalPengeluaran,
                        0,
                        ',',
                        '.'
                    ) }}


                </strong>


            </div>



        @else


            <div class="empty">


                Tidak ada transaksi pada

                {{ $namaBulan[$bulan] }}

                {{ $tahun }}.


            </div>


        @endif


    </div>




    <!-- =================================
         FOOTER
    ================================== -->

    <div class="footer">


        Laporan ini dibuat melalui aplikasi

        <strong>

            Finora

        </strong>.


        <br>


        Finora · Smart Expense Tracker


        <br>


        Dicetak pada

        {{ date('d/m/Y H:i') }}


    </div>



</div>



</body>

</html>
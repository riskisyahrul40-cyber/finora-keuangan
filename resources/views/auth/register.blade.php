<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar — Finora</title>

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


        /* =================================
           PAGE
        ================================= */

        .page {

            min-height: 100vh;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 30px;
        }


        .register-wrapper {

            width: 100%;

            max-width: 1180px;

            min-height: 700px;

            display: grid;

            grid-template-columns: .85fr 1.15fr;

            background: #ffffff;

            border-radius: 32px;

            overflow: hidden;

            box-shadow:
                0 30px 80px rgba(0,0,0,.10);

            border:
                1px solid rgba(0,0,0,.05);

            animation: appear .8s ease;
        }


        @keyframes appear {

            from {

                opacity: 0;

                transform:
                    translateY(25px)
                    scale(.98);
            }

            to {

                opacity: 1;

                transform:
                    translateY(0)
                    scale(1);
            }

        }


        /* =================================
           LEFT REGISTER FORM
        ================================= */

        .register-area {

            padding: 65px;

            display: flex;

            flex-direction: column;

            justify-content: center;

            background: #fff;
        }


        .brand {

            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 55px;
        }


        .brand-icon {

            width: 42px;

            height: 42px;

            border-radius: 13px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #111;

            color: white;

            font-size: 19px;

            font-weight: 700;
        }


        .brand-name {

            font-size: 21px;

            font-weight: 600;

            letter-spacing: -.5px;
        }


        .register-header {

            margin-bottom: 32px;
        }


        .register-header small {

            display: block;

            color: #6e6e73;

            font-size: 14px;

            margin-bottom: 12px;
        }


        .register-header h1 {

            font-size: 42px;

            letter-spacing: -2px;

            line-height: 1;

            margin-bottom: 14px;
        }


        .register-header p {

            color: #6e6e73;

            font-size: 15px;

            line-height: 1.6;

            max-width: 390px;
        }


        /* =================================
           FORM
        ================================= */

        .form-group {

            margin-bottom: 17px;
        }


        .form-group label {

            display: block;

            font-size: 13px;

            font-weight: 500;

            margin-bottom: 8px;

            color: #333;
        }


        .input-wrapper {

            position: relative;
        }


        .input-icon {

            position: absolute;

            left: 17px;

            top: 50%;

            transform: translateY(-50%);

            color: #8e8e93;

            font-size: 15px;

            pointer-events: none;
        }


        .form-input {

            width: 100%;

            height: 52px;

            border-radius: 14px;

            border: 1px solid #d2d2d7;

            outline: none;

            padding:
                0 16px 0 46px;

            font-family: inherit;

            font-size: 14px;

            color: #1d1d1f;

            background: #fbfbfd;

            transition: .25s ease;
        }


        .form-input:focus {

            border-color: #111;

            background: white;

            box-shadow:
                0 0 0 4px rgba(0,0,0,.05);
        }


        .form-input::placeholder {

            color: #a1a1a6;
        }


        /* =================================
           ERROR
        ================================= */

        .error {

            margin-top: 6px;

            color: #d93025;

            font-size: 12px;
        }


        /* =================================
           BUTTON
        ================================= */

        .register-button {

            width: 100%;

            height: 54px;

            margin-top: 8px;

            border: none;

            border-radius: 16px;

            background: #111;

            color: white;

            font-family: inherit;

            font-size: 15px;

            font-weight: 600;

            cursor: pointer;

            transition: .3s ease;

            box-shadow:
                0 12px 25px rgba(0,0,0,.12);
        }


        .register-button:hover {

            transform: translateY(-2px);

            background: #272727;

            box-shadow:
                0 16px 30px rgba(0,0,0,.18);
        }


        .register-button:active {

            transform: translateY(0);
        }


        /* =================================
           LOGIN LINK
        ================================= */

        .login-link {

            margin-top: 25px;

            text-align: center;

            color: #6e6e73;

            font-size: 14px;
        }


        .login-link a {

            color: #1d1d1f;

            font-weight: 600;

            text-decoration: none;
        }


        .login-link a:hover {

            text-decoration: underline;
        }


        /* =================================
           FOOTER
        ================================= */

        .form-footer {

            margin-top: 35px;

            text-align: center;

            color: #a1a1a6;

            font-size: 11px;

            line-height: 1.6;
        }


        /* =================================
           RIGHT VISUAL
        ================================= */

        .visual {

            position: relative;

            overflow: hidden;

            padding: 65px;

            display: flex;

            flex-direction: column;

            justify-content: space-between;

            background:

                radial-gradient(
                    circle at 20% 20%,
                    rgba(139,211,168,.25),
                    transparent 30%
                ),

                radial-gradient(
                    circle at 80% 80%,
                    rgba(255,255,255,.08),
                    transparent 30%
                ),

                #0b0d0c;

            color: white;
        }


        .visual::before {

            content: "";

            position: absolute;

            width: 550px;

            height: 550px;

            border-radius: 50%;

            background:
                rgba(139,211,168,.07);

            filter: blur(60px);

            left: -200px;

            bottom: -200px;

            animation: glow 7s ease-in-out infinite;
        }


        @keyframes glow {

            0%,
            100% {

                transform:
                    scale(1);
            }

            50% {

                transform:
                    scale(1.2);
            }
        }


        /* =================================
           VISUAL TOP
        ================================= */

        .visual-top {

            position: relative;

            z-index: 2;
        }


        .visual-label {

            color: #8f9691;

            font-size: 13px;

            letter-spacing: .8px;

            margin-bottom: 20px;
        }


        .visual h2 {

            font-size: clamp(45px,5vw,70px);

            line-height: .98;

            letter-spacing: -4px;

            font-weight: 600;

            max-width: 550px;
        }


        .visual h2 span {

            color: #8bd3a8;
        }


        .visual-description {

            margin-top: 25px;

            color: #999e9a;

            font-size: 17px;

            line-height: 1.7;

            max-width: 470px;
        }


        /* =================================
           SVG
        ================================= */

        .illustration {

            position: absolute;

            right: 20px;

            bottom: 10px;

            width: 430px;

            height: 430px;

            animation:
                floating 6s ease-in-out infinite;

            z-index: 1;
        }


        @keyframes floating {

            0%,
            100% {

                transform:
                    translateY(0);
            }

            50% {

                transform:
                    translateY(-15px);
            }

        }


        /* =================================
           BOTTOM CARD
        ================================= */

        .visual-bottom {

            position: relative;

            z-index: 3;

            display: flex;

            gap: 14px;
        }


        .info-card {

            padding: 15px 18px;

            min-width: 145px;

            border-radius: 17px;

            background:
                rgba(255,255,255,.07);

            border:
                1px solid rgba(255,255,255,.09);

            backdrop-filter: blur(15px);
        }


        .info-card small {

            display: block;

            color: #858a87;

            font-size: 11px;

            margin-bottom: 5px;
        }


        .info-card strong {

            color: white;

            font-size: 15px;
        }


        /* =================================
           RESPONSIVE
        ================================= */

        @media (max-width: 950px) {

            .register-wrapper {

                grid-template-columns: 1fr;

                max-width: 560px;
            }


            .visual {

                min-height: 400px;

                padding: 45px;
            }


            .visual h2 {

                font-size: 48px;
            }


            .illustration {

                width: 280px;

                height: 280px;

                right: -30px;

                bottom: -30px;

                opacity: .55;
            }


            .register-area {

                padding: 50px 45px;
            }

        }


        @media (max-width: 600px) {

            .page {

                padding: 0;
            }


            .register-wrapper {

                min-height: 100vh;

                border-radius: 0;

                box-shadow: none;

                border: none;
            }


            .register-area {

                padding: 40px 28px;
            }


            .brand {

                margin-bottom: 40px;
            }


            .register-header h1 {

                font-size: 36px;
            }


            .visual {

                min-height: 390px;

                padding: 30px;
            }


            .visual h2 {

                font-size: 42px;

                letter-spacing: -2px;
            }


            .visual-description {

                font-size: 15px;

                max-width: 310px;
            }


            .illustration {

                width: 250px;

                height: 250px;

                right: -35px;

                bottom: -20px;
            }


            .visual-bottom {

                display: none;
            }

        }

    </style>

</head>


<body>


<div class="page">


    <div class="register-wrapper">


        <!-- =====================================
             FORM REGISTER
        ====================================== -->

        <section class="register-area">


            <!-- BRAND -->

            <div class="brand">

                <div class="brand-icon">
                    F
                </div>

                <div class="brand-name">
                    Finora
                </div>

            </div>


            <!-- HEADER -->

            <div class="register-header">

                <small>
                    MULAI PERJALANAN KEUANGANMU
                </small>

                <h1>
                    Buat akun.
                </h1>

                <p>

                    Daftarkan akun Finora dan mulai
                    mencatat pengeluaranmu dengan
                    lebih teratur.

                </p>

            </div>


            <!-- FORM -->

            <form
                method="POST"
                action="{{ route('register') }}"
            >

                @csrf


                <!-- NAME -->

                <div class="form-group">

                    <label for="name">
                        Nama
                    </label>

                    <div class="input-wrapper">

                        <span class="input-icon">
                            ◉
                        </span>

                        <input
                            id="name"
                            class="form-input"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Nama lengkap"
                            required
                            autofocus
                            autocomplete="name"
                        >

                    </div>


                    @error('name')

                        <div class="error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <!-- EMAIL -->

                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <div class="input-wrapper">

                        <span class="input-icon">
                            ✉
                        </span>

                        <input
                            id="email"
                            class="form-input"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="nama@email.com"
                            required
                            autocomplete="username"
                        >

                    </div>


                    @error('email')

                        <div class="error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <!-- PASSWORD -->

                <div class="form-group">

                    <label for="password">
                        Kata Sandi
                    </label>

                    <div class="input-wrapper">

                        <span class="input-icon">
                            ●
                        </span>

                        <input
                            id="password"
                            class="form-input"
                            type="password"
                            name="password"
                            placeholder="Minimal 8 karakter"
                            required
                            autocomplete="new-password"
                        >

                    </div>


                    @error('password')

                        <div class="error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <!-- CONFIRM PASSWORD -->

                <div class="form-group">

                    <label for="password_confirmation">
                        Konfirmasi Kata Sandi
                    </label>

                    <div class="input-wrapper">

                        <span class="input-icon">
                            ✓
                        </span>

                        <input
                            id="password_confirmation"
                            class="form-input"
                            type="password"
                            name="password_confirmation"
                            placeholder="Ulangi kata sandi"
                            required
                            autocomplete="new-password"
                        >

                    </div>


                    @error('password_confirmation')

                        <div class="error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <!-- BUTTON -->

                <button
                    type="submit"
                    class="register-button"
                >

                    Buat Akun Finora

                </button>


            </form>


            <!-- LOGIN -->

            <div class="login-link">

                Sudah memiliki akun?

                <a href="{{ route('login') }}">
                    Masuk di sini
                </a>

            </div>


            <div class="form-footer">

                Dengan membuat akun, kamu dapat
                mulai mencatat dan mengelola
                pengeluaran secara lebih teratur.

                <br><br>

                © {{ date('Y') }} Finora

            </div>


        </section>


        <!-- =====================================
             VISUAL
        ====================================== -->

        <section class="visual">


            <div class="visual-top">

                <div class="visual-label">
                    FINORA • SMART EXPENSE TRACKER
                </div>

                <h2>

                    Kenali
                    <br>

                    <span>
                        kebiasaan uangmu.
                    </span>

                </h2>

                <p class="visual-description">

                    Satu tempat untuk mencatat pengeluaran,
                    melihat pola keuangan, dan menjaga
                    pengeluaran tetap terkendali.

                </p>

            </div>


            <!-- =================================
                 FINANCIAL SVG ILLUSTRATION
            ================================== -->

            <svg
                class="illustration"
                viewBox="0 0 500 500"
                xmlns="http://www.w3.org/2000/svg"
            >

                <!-- Background -->

                <circle
                    cx="250"
                    cy="250"
                    r="215"
                    fill="rgba(255,255,255,.025)"
                />

                <circle
                    cx="250"
                    cy="250"
                    r="175"
                    fill="rgba(255,255,255,.025)"
                />


                <!-- Chart -->

                <line
                    x1="90"
                    y1="365"
                    x2="420"
                    y2="365"
                    stroke="rgba(255,255,255,.15)"
                    stroke-width="2"
                />

                <line
                    x1="90"
                    y1="300"
                    x2="420"
                    y2="300"
                    stroke="rgba(255,255,255,.08)"
                    stroke-width="2"
                />

                <line
                    x1="90"
                    y1="235"
                    x2="420"
                    y2="235"
                    stroke="rgba(255,255,255,.08)"
                    stroke-width="2"
                />

                <line
                    x1="90"
                    y1="170"
                    x2="420"
                    y2="170"
                    stroke="rgba(255,255,255,.08)"
                    stroke-width="2"
                />


                <!-- Graph -->

                <path
                    d="
                    M90 335
                    C125 310,
                    145 320,
                    180 285
                    S225 270,
                    255 245
                    S310 215,
                    340 185
                    S385 175,
                    420 125
                    "

                    fill="none"

                    stroke="#8bd3a8"

                    stroke-width="7"

                    stroke-linecap="round"
                />


                <!-- Points -->

                <circle
                    cx="90"
                    cy="335"
                    r="7"
                    fill="#fff"
                />

                <circle
                    cx="180"
                    cy="285"
                    r="7"
                    fill="#fff"
                />

                <circle
                    cx="255"
                    cy="245"
                    r="7"
                    fill="#fff"
                />

                <circle
                    cx="340"
                    cy="185"
                    r="7"
                    fill="#fff"
                />

                <circle
                    cx="420"
                    cy="125"
                    r="9"
                    fill="#8bd3a8"
                />


                <!-- Coin -->

                <circle
                    cx="110"
                    cy="145"
                    r="42"
                    fill="#8bd3a8"
                />

                <text
                    x="110"
                    y="158"
                    text-anchor="middle"
                    font-size="31"
                    font-family="Arial"
                    font-weight="bold"
                    fill="#101211"
                >
                    Rp
                </text>


                <!-- Wallet -->

                <rect
                    x="145"
                    y="330"
                    width="220"
                    height="100"
                    rx="22"
                    fill="#f5f5f7"
                />

                <rect
                    x="165"
                    y="350"
                    width="180"
                    height="65"
                    rx="15"
                    fill="#171918"
                />

                <rect
                    x="275"
                    y="365"
                    width="85"
                    height="38"
                    rx="10"
                    fill="#8bd3a8"
                />

                <circle
                    cx="310"
                    cy="384"
                    r="6"
                    fill="#111"
                />


                <!-- Floating Cards -->

                <rect
                    x="300"
                    y="90"
                    width="105"
                    height="55"
                    rx="15"
                    fill="rgba(255,255,255,.08)"
                    stroke="rgba(255,255,255,.12)"
                />

                <text
                    x="320"
                    y="113"
                    font-size="10"
                    fill="#8b908d"
                    font-family="Arial"
                >
                    PENGELUARAN
                </text>

                <text
                    x="320"
                    y="133"
                    font-size="17"
                    font-weight="bold"
                    fill="#ffffff"
                    font-family="Arial"
                >
                    Terkontrol
                </text>


                <!-- Decorative -->

                <circle
                    cx="420"
                    cy="310"
                    r="12"
                    fill="rgba(139,211,168,.35)"
                />

                <circle
                    cx="75"
                    cy="270"
                    r="8"
                    fill="rgba(255,255,255,.2)"
                />

            </svg>


            <!-- INFO -->

            <div class="visual-bottom">

                <div class="info-card">

                    <small>
                        Catatan
                    </small>

                    <strong>
                        Lebih teratur
                    </strong>

                </div>


                <div class="info-card">

                    <small>
                        Pengeluaran
                    </small>

                    <strong>
                        Lebih terkendali
                    </strong>

                </div>

            </div>


        </section>


    </div>


</div>


</body>

</html>
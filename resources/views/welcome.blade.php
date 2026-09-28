<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Masuk — Finora</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
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

        /* ================================
           MAIN
        ================================= */

        .page {
            min-height: 100vh;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 30px;
        }

        .login-wrapper {

            width: 100%;

            max-width: 1180px;

            min-height: 700px;

            display: grid;

            grid-template-columns: 1.15fr .85fr;

            background: #ffffff;

            border-radius: 32px;

            overflow: hidden;

            box-shadow:
                0 30px 80px rgba(0, 0, 0, .10);

            border: 1px solid rgba(0, 0, 0, .05);

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

        /* ================================
           LEFT SIDE
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
                    circle at 75% 25%,
                    rgba(76, 175, 125, .25),
                    transparent 30%
                ),

                radial-gradient(
                    circle at 20% 80%,
                    rgba(255, 255, 255, .08),
                    transparent 35%
                ),

                #0b0d0c;

            color: white;
        }

        .visual::before {

            content: "";

            position: absolute;

            width: 500px;

            height: 500px;

            border-radius: 50%;

            background:
                rgba(91, 191, 133, .08);

            filter: blur(50px);

            right: -150px;

            top: -150px;

            animation: glow 7s ease-in-out infinite;
        }

        @keyframes glow {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

        }

        /* ================================
           BRAND
        ================================= */

        .brand {

            position: relative;

            z-index: 2;

            display: flex;

            align-items: center;

            gap: 12px;
        }

        .brand-icon {

            width: 42px;

            height: 42px;

            border-radius: 13px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #ffffff;

            color: #111;

            font-size: 19px;

            font-weight: 700;

            box-shadow:
                0 10px 30px rgba(0, 0, 0, .25);
        }

        .brand-name {

            font-size: 21px;

            font-weight: 600;

            letter-spacing: -.5px;
        }

        /* ================================
           VISUAL CONTENT
        ================================= */

        .visual-content {

            position: relative;

            z-index: 2;

            max-width: 510px;
        }

        .visual-label {

            color: #a7aaa8;

            font-size: 14px;

            margin-bottom: 20px;

            letter-spacing: .5px;
        }

        .visual h1 {

            font-size: clamp(45px, 5vw, 72px);

            line-height: .98;

            letter-spacing: -4px;

            font-weight: 600;

            margin-bottom: 25px;
        }

        .visual h1 span {

            color: #8bd3a8;
        }

        .visual-description {

            color: #9b9e9c;

            font-size: 17px;

            line-height: 1.7;

            max-width: 450px;
        }

        /* ================================
           ILLUSTRATION
        ================================= */

        .illustration {

            position: absolute;

            right: 35px;

            bottom: 25px;

            width: 380px;

            height: 380px;

            opacity: .95;

            animation: floating 6s ease-in-out infinite;
        }

        @keyframes floating {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }

        }

        /* ================================
           STAT
        ================================= */

        .visual-bottom {

            position: relative;

            z-index: 3;

            display: flex;

            gap: 15px;
        }

        .mini-card {

            padding: 15px 18px;

            border-radius: 17px;

            background:
                rgba(255,255,255,.07);

            border:
                1px solid rgba(255,255,255,.09);

            backdrop-filter: blur(15px);

            min-width: 135px;
        }

        .mini-card small {

            display: block;

            color: #858986;

            font-size: 11px;

            margin-bottom: 5px;
        }

        .mini-card strong {

            font-size: 16px;

            color: #fff;
        }

        /* ================================
           RIGHT SIDE
        ================================= */

        .login-area {

            padding: 70px 65px;

            display: flex;

            flex-direction: column;

            justify-content: center;

            background: #fff;
        }

        .login-header {

            margin-bottom: 35px;
        }

        .login-header small {

            display: block;

            color: #6e6e73;

            font-size: 14px;

            margin-bottom: 12px;
        }

        .login-header h2 {

            font-size: 42px;

            letter-spacing: -2px;

            line-height: 1;

            margin-bottom: 13px;
        }

        .login-header p {

            color: #6e6e73;

            font-size: 15px;

            line-height: 1.6;
        }

        /* ================================
           FORM
        ================================= */

        .form-group {

            margin-bottom: 20px;
        }

        .form-group label {

            display: block;

            font-size: 13px;

            font-weight: 500;

            margin-bottom: 9px;

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

            font-size: 16px;

            pointer-events: none;
        }

        .form-input {

            width: 100%;

            height: 53px;

            border-radius: 15px;

            border: 1px solid #d2d2d7;

            outline: none;

            padding:
                0 16px 0 47px;

            font-family: inherit;

            font-size: 14px;

            color: #1d1d1f;

            background: #fbfbfd;

            transition: .25s ease;
        }

        .form-input:focus {

            border-color: #111;

            background: #fff;

            box-shadow:
                0 0 0 4px rgba(0,0,0,.05);
        }

        .form-input::placeholder {

            color: #a1a1a6;
        }

        /* ================================
           ERROR
        ================================= */

        .error {

            margin-top: 7px;

            color: #d93025;

            font-size: 12px;
        }

        /* ================================
           OPTIONS
        ================================= */

        .options {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin: 5px 0 25px;
        }

        .remember {

            display: flex;

            align-items: center;

            gap: 8px;

            font-size: 13px;

            color: #6e6e73;

            cursor: pointer;
        }

        .remember input {

            width: 15px;

            height: 15px;

            accent-color: #111;
        }

        .forgot {

            font-size: 13px;

            color: #1d1d1f;

            text-decoration: none;

            font-weight: 500;
        }

        .forgot:hover {

            text-decoration: underline;
        }

        /* ================================
           BUTTON
        ================================= */

        .login-button {

            width: 100%;

            height: 54px;

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

        .login-button:hover {

            transform: translateY(-2px);

            background: #272727;

            box-shadow:
                0 16px 30px rgba(0,0,0,.18);
        }

        .login-button:active {

            transform: translateY(0);

        }

        /* ================================
           DIVIDER
        ================================= */

        .divider {

            display: flex;

            align-items: center;

            gap: 15px;

            margin: 27px 0;

            color: #a1a1a6;

            font-size: 12px;
        }

        .divider::before,
        .divider::after {

            content: "";

            height: 1px;

            flex: 1;

            background: #e5e5e7;
        }

        /* ================================
           REGISTER
        ================================= */

        .register-text {

            text-align: center;

            color: #6e6e73;

            font-size: 14px;
        }

        .register-text a {

            color: #1d1d1f;

            font-weight: 600;

            text-decoration: none;
        }

        .register-text a:hover {

            text-decoration: underline;
        }

        /* ================================
           FOOTER
        ================================= */

        .login-footer {

            margin-top: 35px;

            text-align: center;

            color: #a1a1a6;

            font-size: 11px;

            line-height: 1.6;
        }

        /* ================================
           RESPONSIVE
        ================================= */

        @media (max-width: 950px) {

            .login-wrapper {

                grid-template-columns: 1fr;

                max-width: 560px;
            }

            .visual {

                min-height: 400px;

                padding: 40px;
            }

            .visual h1 {

                font-size: 48px;
            }

            .illustration {

                width: 260px;

                height: 260px;

                right: -20px;

                bottom: -20px;

                opacity: .55;
            }

            .login-area {

                padding: 50px 45px;
            }

        }

        @media (max-width: 600px) {

            .page {

                padding: 0;
            }

            .login-wrapper {

                min-height: 100vh;

                border-radius: 0;

                border: none;

                box-shadow: none;
            }

            .visual {

                min-height: 380px;

                padding: 30px;
            }

            .visual h1 {

                font-size: 42px;

                letter-spacing: -2px;
            }

            .visual-description {

                font-size: 15px;
            }

            .visual-bottom {

                display: none;
            }

            .illustration {

                width: 230px;

                height: 230px;

                right: -25px;

                bottom: -20px;
            }

            .login-area {

                padding: 45px 28px;
            }

            .login-header h2 {

                font-size: 36px;
            }

            .options {

                align-items: flex-start;

                gap: 15px;
            }

        }

    </style>

</head>


<body>


<div class="page">


    <div class="login-wrapper">


        <!-- =====================================
             LEFT / VISUAL
        ====================================== -->

        <section class="visual">


            <div class="brand">

                <div class="brand-icon">
                    F
                </div>

                <div class="brand-name">
                    Finora
                </div>

            </div>


            <div class="visual-content">

                <div class="visual-label">
                    PENCATATAN KEUANGAN PRIBADI
                </div>

                <h1>
                    Kelola uang.
                    <br>
                    <span>Lebih tenang.</span>
                </h1>

                <p class="visual-description">

                    Catat setiap pengeluaran,
                    pahami kebiasaan keuangan,
                    dan buat keputusan finansial
                    dengan lebih teratur.

                </p>

            </div>


            <!-- =================================
                 ILLUSTRATION / GAMBAR
            ================================== -->

            <svg
                class="illustration"
                viewBox="0 0 500 500"
                xmlns="http://www.w3.org/2000/svg"
            >

                <!-- background circle -->

                <circle
                    cx="250"
                    cy="250"
                    r="205"
                    fill="rgba(255,255,255,.035)"
                />

                <circle
                    cx="250"
                    cy="250"
                    r="165"
                    fill="rgba(255,255,255,.035)"
                />


                <!-- chart -->

                <path
                    d="M100 340
                       C150 300,
                       175 315,
                       215 270
                       S280 240,
                       315 195
                       S370 175,
                       410 120"

                    fill="none"

                    stroke="#8bd3a8"

                    stroke-width="8"

                    stroke-linecap="round"
                />


                <!-- chart points -->

                <circle
                    cx="100"
                    cy="340"
                    r="8"
                    fill="#ffffff"
                />

                <circle
                    cx="215"
                    cy="270"
                    r="8"
                    fill="#ffffff"
                />

                <circle
                    cx="315"
                    cy="195"
                    r="8"
                    fill="#ffffff"
                />

                <circle
                    cx="410"
                    cy="120"
                    r="8"
                    fill="#8bd3a8"
                />


                <!-- wallet -->

                <rect
                    x="135"
                    y="305"
                    width="230"
                    height="125"
                    rx="25"
                    fill="#f5f5f7"
                />

                <rect
                    x="160"
                    y="325"
                    width="180"
                    height="85"
                    rx="17"
                    fill="#171918"
                />

                <rect
                    x="280"
                    y="350"
                    width="85"
                    height="45"
                    rx="12"
                    fill="#8bd3a8"
                />

                <circle
                    cx="315"
                    cy="372"
                    r="7"
                    fill="#111"
                />


                <!-- coin -->

                <circle
                    cx="120"
                    cy="185"
                    r="40"
                    fill="#8bd3a8"
                />

                <text
                    x="120"
                    y="198"
                    text-anchor="middle"
                    font-size="35"
                    font-family="Arial"
                    font-weight="bold"
                    fill="#101211"
                >
                    Rp
                </text>


                <!-- small decorative circles -->

                <circle
                    cx="390"
                    cy="320"
                    r="12"
                    fill="rgba(139,211,168,.35)"
                />

                <circle
                    cx="95"
                    cy="260"
                    r="8"
                    fill="rgba(255,255,255,.25)"
                />

            </svg>


            <div class="visual-bottom">

                <div class="mini-card">

                    <small>
                        Pengeluaran
                    </small>

                    <strong>
                        Teratur
                    </strong>

                </div>


                <div class="mini-card">

                    <small>
                        Keuangan
                    </small>

                    <strong>
                        Terkontrol
                    </strong>

                </div>

            </div>


        </section>


        <!-- =====================================
             RIGHT / LOGIN
        ====================================== -->

        <section class="login-area">


            <div class="login-header">

                <small>
                    Selamat datang kembali
                </small>

                <h2>
                    Masuk
                </h2>

                <p>
                    Masuk ke akun Finora untuk melanjutkan
                    pencatatan pengeluaranmu.
                </p>

            </div>


            <!-- SESSION STATUS -->

            @if (session('status'))

                <div
                    style="
                        padding: 12px 15px;
                        margin-bottom: 20px;
                        border-radius: 12px;
                        background: #f0faf4;
                        color: #247044;
                        font-size: 13px;
                    "
                >

                    {{ session('status') }}

                </div>

            @endif


            <!-- LOGIN FORM -->

            <form method="POST" action="{{ route('login') }}">

                @csrf


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
                            autofocus
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
                            placeholder="Masukkan kata sandi"
                            required
                            autocomplete="current-password"
                        >

                    </div>

                    @error('password')

                        <div class="error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <!-- OPTIONS -->

                <div class="options">


                    <label class="remember">

                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                        >

                        <span>
                            Ingat saya
                        </span>

                    </label>


                    @if (Route::has('password.request'))

                        <a
                            href="{{ route('password.request') }}"
                            class="forgot"
                        >
                            Lupa kata sandi?
                        </a>

                    @endif


                </div>


                <!-- BUTTON -->

                <button
                    type="submit"
                    class="login-button"
                >

                    Masuk ke Finora

                </button>


            </form>


            <div class="divider">
                atau
            </div>


            <div class="register-text">

                Belum memiliki akun?

                <a href="{{ route('register') }}">
                    Daftar sekarang
                </a>

            </div>


            <div class="login-footer">

                Dengan masuk ke Finora, kamu dapat
                mencatat dan mengelola pengeluaran
                secara lebih teratur.

                <br><br>

                © {{ date('Y') }} Finora

            </div>


        </section>


    </div>


</div>


</body>

</html>
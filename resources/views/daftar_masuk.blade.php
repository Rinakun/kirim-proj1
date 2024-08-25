<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>SIREM</title>
    <link rel="icon" href="assets/images/SIREM.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/template-login_signup.css" />

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header><img src="assets/images/SIREMBlue.png" alt=""></header>
                <header class="header-login">Masuk</header>
                <form action="#">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    {{-- <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div> --}}

                    <div class="field button-field">
                        <button><a href="/dashboard">Masuk</a></button>
                    </div>
                </form>
                <div class="line"></div>

                <div class="media-options">
                    <a href="google.com" class="field google">
                        <img src="assets/images/Google.png" alt="" class="google-img">
                        <span>Masuk dengan Google</span>
                    </a>
                </div>
                <div class="form-link">
                    <span>Belum punya akun? <a href="#" class="link signup-link">Daftar</a></span>
                </div>
            </div>
        </div>

        <!-- Signup Form -->

        <div class="form signup">
            <div class="form-content">
                <header><img src="assets/images/SIREMBlue.png" alt=""></header>
                <header class="header-signup">Buat Akun</header>
                <form action="#">

                    <div class="field input-field">
                        <input type="text" placeholder="Nama" class="input">
                    </div>
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button>Daftar</button>
                    </div>
                </form>


                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="assets/images/Google.png" alt="" class="google-img">
                        <span>Daftar dengan google</span>
                    </a>
                </div>
                <div class="form-link">
                    <span>Sudah punya akun? <a href="#" class="link login-link">Masuk</a></span>
                </div>
            </div>


        </div>
    </section>

    <!-- JavaScript -->
    <script src="assets/js/login_signup.js"></script>
</body>

</html>

<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>SIREM</title>
    <link rel="icon" href="assets/images/SIREM.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style-login_signup.css" />

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    {{-- sementara --}}
    <style>
        /* Style untuk alert error */
/* Style untuk alert sukses */
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 5px;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}



.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

/* Style untuk daftar pesan error */
.alert ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.alert ul li {
    margin-bottom: 10px;
    font-size: 14px;
}

/* Style untuk pesan error spesifik di bawah input */
.text-danger {
    color: #dc3545;
    font-size: 12px;
    margin-top: 5px;
}

    </style>

</head>

<body>
    <section class="container forms">
        <div class="form login">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
            <div class="form-content">
                <header><img src="assets/images/SIREMBlue.png" alt=""></header>
                <header class="header-login">Masuk</header>
                <form action="{{ route('login-masuk') }}" method="POST">
                    @csrf
                    <div class="field input-field">
                        <input type="email" placeholder="Email" name="email" class="input">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password"name="password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    {{-- <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div> --}}

                    <div class="field button-field">
                        <button type="submit">masuksdsd</button>
                    </div>
                </form>
                <div class="line"></div>

                <div class="media-options">
                    <a href="google.com" class="field google">
                        <img src="assets/images/Google.png" alt="" class="google-img">
                        <span>Masuk dengan Googledsd</span>
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
                             
                            
              
                    

                    <form action="{{ route('signup') }}" method="POST">  
                        @csrf  
                        <div class="field input-field">  
                            <input type="text" placeholder="Nama" class="input" name="name" required>  
                        </div>  
                        <div class="field input-field">  
                            <input type="email" placeholder="Email" class="input" name="email" required>  
                        </div>  
                        <div class="field input-field">  
                            <input type="password" placeholder="Password" class="password" name="password" required>  
                            <i class='bx bx-hide eye-icon'></i>  
                        </div>  
                        <div class="field button-field">  
                            <button type="submit">Daftar</button>  
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
                        <span>Sudah punya akun11? <a href="#" class="link login-link">Masuk</a></span>
                    </div>
                </div>


            </div>
    </section>

    <!-- JavaScript -->
    <script src="assets/js/login_signup.js"></script>
</body>

</html>

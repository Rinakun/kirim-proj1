<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="{{ asset('assets/css/style-tes.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style-dashboard.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>@yield('title', 'SIREM')</title>
    <link rel="icon" href="{{ asset('assets/images/SIREM.ico') }}">
</head>

<body>
    {{-- navbar start --}}
    <div class="header">
        <div class="brand">
            <img src="{{ asset('assets/images/SIREMBlue.png') }}" alt="" style="height: 30px; width: 100px">
        </div>
        <div class="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="main-nav">
            <a href="/tes-siswa" class="button-container {{ request()->is('tes-siswa') ? 'aktif' : '' }}">
                <h2>Tes Siswa</h2>
            </a>
            <a href="/dashboard"
                class="button-container {{ request()->is('dashboard') || request()->is('detail') ? 'aktif' : '' }}">
                <h2>Dashboard</h2>
            </a>
            <a href="/tentang-kami" class="button-container {{ request()->is('tentang-kami') ? 'aktif' : '' }}">
                <h2>Tentang kami</h2>
            </a>
        </div>
        <div class="right-nav">
            <div class="button-container login">
                <h2><a href="/login">Daftar sekarang</a></h2>
            </div>
        </div>
    </div>
    {{-- navbar end --}}

    {{-- Content --}}
    <div class="content">
        @yield('content')
    </div>
    {{-- End Content --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/js/tes_siswa.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/detail.js') }}"></script>


</body>

</html>

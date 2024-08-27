@extends('layout')

@section('content')
    <div class="article-container">
        <div class="article-header">
            <span class="category-label">Kampus Universitas Pendidikan Indonesia di Cibiru</span>
            <span class="article-date">28 Agustus 2024</span>
        </div>
        <h1 class="article-title">SIREM (Sistem Informasi Rencana Pembelajaran)</h1>
        {{-- <div class="author-info">
            <img src="https://via.placeholder.com/50" alt="Foto Penulis" class="author-photo">
            <div class="author-details">
                <p class="author-name">Nama penulis</p>
                <p class="author-position">Posisi @ perusahaan</p>
            </div>
        </div> --}}
        <div class="article-image">
            <img src="assets/images/foto.png" alt="Gambar Artikel" class="main-image">
        </div>
        <p>foto dosen dan mahasiswa penyusun</p>
        {{-- <h2 class="article-subtitle">Tentang Kami</h2> --}}
        <p class="article-content">
            Pendidikan yang efektif dimulai dengan perencanaan yang matang dan komprehensif. Di era modern ini, kebutuhan
            akan pendekatan yang lebih cerdas dalam memahami dan menangani gangguan belajar semakin mendesak. SIREM (Sistem
            Informasi Rencana Pembelajaran) hadir sebagai solusi inovatif untuk mendukung para pendidik dalam
            mengidentifikasi dini gangguan belajar pada siswa, sehingga rencana pembelajaran dapat disesuaikan dengan
            kebutuhan spesifik masing-masing individu.
        </p>
        <p class="article-content">
            SIREM dirancang untuk membantu para guru dan tenaga pendidik lainnya dalam mengumpulkan, menganalisis, dan
            menerapkan informasi penting terkait gangguan belajar. Dengan menggunakan teknologi terkini, SIREM menyediakan
            alat yang mudah digunakan untuk melakukan identifikasi dini, memberikan rekomendasi langkah-langkah yang tepat,
            dan menyusun rencana pembelajaran yang lebih baik dan lebih efektif. Sistem ini tidak hanya bertujuan untuk
            mendeteksi permasalahan, tetapi juga untuk menawarkan solusi yang disesuaikan dengan kondisi unik setiap siswa.
            Dengan SIREM, kami percaya bahwa setiap siswa memiliki potensi untuk berkembang dengan baik, asalkan mereka
            mendapatkan dukungan yang tepat dari lingkungan belajar mereka. SIREM memastikan bahwa tidak ada anak yang
            tertinggal dan setiap siswa mendapatkan perhatian yang layak dalam proses pendidikan mereka.
        </p>
        <p class="article-content">
            Dengan SIREM, kami berkomitmen untuk menciptakan lingkungan belajar yang lebih baik dan inklusif, di mana setiap
            siswa dapat berkembang sesuai dengan potensi terbaik mereka. Kami percaya bahwa melalui identifikasi dini dan
            rencana pembelajaran yang tepat, kita dapat bersama-sama membentuk masa depan yang lebih cerah bagi generasi
            mendatang. Terima kasih telah menjadi bagian dari perjalanan kami menuju pendidikan yang lebih baik. Mari kita
            bersama-sama ciptakan perubahan positif di dunia pendidikan melalui SIREM.
        </p>
    </div>

    {{-- footer start --}}
    <footer class="footer-distributed">
        <div class="footer-left">
            <h3><img src="assets/images/SIREM.png" alt="logo" style="width: 90px; height: 30px"></h3>
            <p class="footer-links">
                {{-- <a href="#home" class="link-1">Home</a>
                <a href="#tentang">Tentang</a>
                <a href="#kontributor">kontributor</a> --}}
                <a>Selamat datang di SIREM, Sistem Informasi Rencana Pembelajaran yang dirancang untuk mendukung guru dan
                    tenaga pendidikan dalam menyusun rencana pembelajaran yang lebih baik.</a>
            </p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa-solid fa-location-dot"></i>
                <p><span>Jln. Pendidikan No.15, Cibiru Wetan, </span> <span>Kec. Cileunyi, Kabupaten Bandung,</span>
                    <span>Jawa Barat 40625</span>
                </p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>(022) 7801840</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:kampus_upicibiru@upi.edu">kampus_upicibiru@upi.edu</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Tentang Kampus</span>
                Kampus Daerah Cibiru, Universitas Pendidikan Indonesia adalah salah satu kampus daerah di lingkungan UPI
                yang kedudukan nya setara dengan fakultas di UPI. Secara organisasi kamda di UPI adalah unit
                penyelenggara pendidikan di bawah universitas setingkat Fakultas yang dipimpin oleh seorang direktur
                kampus daerah.
            </p>
            <div class="footer-icons">
                <a href=""> <i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
        <hr>
        <p class="footer-company-name">Universitas Pendidikan Indonesia di Cibiru © 2024</p>
    </footer>
    {{-- footer end --}}
@endsection

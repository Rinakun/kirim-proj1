<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="assets/css/style-homepage.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Tambahkan CSS Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <title>SIREM</title>
    <link rel="icon" href="assets/images/SIREM.ico">
</head>

<body onload="AddCarouselButtons(); CheckSizeAttributes(); AddCards(); MakeJumbotron(); CheckCards(); ResizeHeader();"
    onscroll="ScrollFunction();" onresize="CheckSizeAttributes(); CheckCards(); MakeJumbotron(); ResizeHeader();"
    id="home">
    <div class="content">
        <div class="header">
            <div class="brand">
                {{-- <h1 class="logo">SIREM</h1> --}}
                <img src="assets/images/SIREM.png" alt="" style="height: 30px; width: 100px">

            </div>
            <div class="main-nav">
                {{-- <a href="/" class="button-container">
                    <h2>HOME</h2>
                </a> --}}
                <a href="/tes-siswa" class="button-container">
                    <h2>Tes Siswa</h2>
                </a>
                <a href="/dashboard" class="button-container">
                    <h2>Dashboard</h2>
                </a>
                <a href="/tentang-kami" class="button-container">
                    <h2>Tentang kami</h2>
                </a>
            </div>
            <div class="right-nav">
                <div class="button-container login" h>
                    <h2><a href="/login">Daftar sekarang</a></h2>
                </div>
            </div>
        </div>
        <div class="top" id="">
            <div class="image-container">
                <div class="left-side">
                    <h1>Sistem Informasi Rencana Pembelajaran</h1>
                    <p>Identifikasi Dini Gangguan Belajar untuk Rencana Pembelajaran yang Lebih Baik</p>
                    <div class="button-section">
                        <div class="watch">
                            <h3><a href="/login">Identifikasi sekarang</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mid" id="tentang">
            <div class="row align-items-center content-area">
                <div class="left-column">
                    <h2 class="content-title">Apa itu SIREM?</h2>
                    <p class="description-title">SIREM (Sistem Informasi Rencana Pembelajaran) adalah platform inovatif
                        yang dirancang untuk
                        membantu orang tua, guru, dan tenaga pendidik mengidentifikasi potensi gangguan belajar seperti
                        disleksia, disgrafia, diskalkulia dan ADHD pada anak-anak. Dengan alat diagnostik yang canggih
                        dan mudah digunakan, SIREM memberikan hasil yang akurat dan rekomendasi langkah-langkah
                        selanjutnya untuk mendukung perkembangan belajar anak.</p>
                </div>
                <div class="right-column">
                    <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/what.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        {{-- content macam-macam --}}
        <div class="container2">
            <h2 class="title">Macam-macam Gangguan Belajar</h2>
            <div class="card2-container">
                <div class="card2">
                    <div class="icon">
                        <img src="assets/images/Disleksia.png" alt="Icon">
                    </div>
                    <h3>Disleksia</h3>
                    <p>Disleksia adalah gangguan belajar yang mempengaruhi kemampuan seseorang dalam membaca dan
                        memahami teks.</p>
                </div>
                <div class="card2">
                    <div class="icon">
                        <img src="assets/images/Diskalkulia.png" alt="Icon">
                    </div>
                    <h3>Diskalkulia</h3>
                    <p>Diskalkulia adalah gangguan belajar yang mempengaruhi kemampuan seseorang dalam memahami dan
                        bekerja dengan angka.</p>
                </div>
                <div class="card2">
                    <div class="icon">
                        <img src="assets/images/Disgrafia.png" alt="Icon">
                    </div>
                    <h3>Disgrafia</h3>
                    <p>Disgrafia adalah gangguan belajar yang mempengaruhi kemampuan menulis tangan dan ejaan.</p>
                </div>
                <div class="card2">
                    <div class="icon">
                        <img src="assets/images/ADHD.png" alt="Icon">
                    </div>
                    <h3>ADHD</h3>
                    <p>ADHD adalah gangguan yang mempengaruhi perhatian, kontrol impuls, dan tingkat aktivitas
                        seseorang.</p>
                </div>
                <div class="card2">
                    <div class="icon">
                        <img src="assets/images/Tunagrahita.png" alt="Icon">
                    </div>
                    <h3>Tunagrahita</h3>
                    <p>Siswa mengalami hambatan atau keterlambatan berpikir dibanding siswa normal.</p>
                </div>
                <div class="card2">
                    <div class="icon">
                        <img src="assets/images/Bahasa.png" alt="Icon">
                    </div>
                    <h3>Bahasa</h3>
                    <p>Kesulitan dalam memahami dan menggunakan kata-kata dengan benar.</p>
                </div>
                <div class="card2">
                    <div class="icon">
                        <img src="assets/images/Pendengaran.png" alt="Icon">
                    </div>
                    <h3>Pendengaran</h3>
                    <p>Keterlambatan kemampuan bicara dan kemampuan bahasa.</p>
                </div>
                <div class="card2">
                    <div class="icon">
                        <img src="assets/images/Autisme.png" alt="Icon">
                    </div>
                    <h3>Autisme</h3>
                    <p>Secara umum ASDs ditandai dengan kurangnya interaksi sosial dan komunikasi, serta perilaku
                        terbatas dan berulang.</p>
                </div>
                <div class="card2">
                    <div class="icon">
                        <img src="assets/images/Sosial.png" alt="Icon">
                    </div>
                    <h3>Sosial emosi</h3>
                    <p>Seseorang akan sering merasa cemas tanpa alasan yang jelas, yang dapat mengganggu aktivitas
                        sehari-hari.</p>
                </div>
                <div class="card2">
                    <div class="icon">
                        <img src="assets/images/Bicara.png" alt="Icon">
                    </div>
                    <h3>Bicara</h3>
                    <p>Kesulitan mengucapkan suara atau kata dengan benar</p>
                </div>
            </div>
        </div>
        {{-- content macam macam end --}}

        {{-- content why sirem start --}}
        <div class="row2 align-items-center content-area">
            <div class="left-column2">
                <h2 class="content-title">Mengapa menggunakan SIREM?</h2>
                <p class="description-title">SIREM menawarkan berbagai keunggulan yang membuatnya pilihan terbaik untuk
                    mendukung pendidikan anak:</p>
            </div>
            <div class="card3">
                <div class="icon2">
                    <img src="assets/images/rekomendasi.png" alt="Icon">
                </div>
                <h3>Rekomendasi Terpersonalisasi</h3>
                <p>SIREM memberikan rencana pembelajaran yang disesuaikan dengan kebutuhan unik setiap anak</p>
            </div>
            <div class="right-column2">
                <div class="card3-container">
                    <div class="bottom-column2">
                        <div class="card3 card4">
                            <div class="icon2">
                                <img src="assets/images/hasil_cepat.png" alt="Icon">
                            </div>
                            <h3>Hasil Cepat</h3>
                            <p>Dapatkan hasil pengujian dalam waktu singkat.</p>
                        </div>

                        <div class="card3">
                            <div class="icon2">
                                <img src="assets/images/mudah_digunakan.png" alt="Icon">
                            </div>
                            <h3>Mudah Digunakan</h3>
                            <p>Antarmuka yang user-friendly memungkinkan penggunaan tanpa kesulitan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card3">
                <div class="icon2">
                    <img src="assets/images/terpercaya.png" alt="Icon">
                </div>
                <h3>Terpercaya</h3>
                <p>Algoritma kami dikembangkan oleh para ahli dalam bidang pendidikan dan psikologi anak.</p>
            </div>
        </div>
        {{-- content why sirem end --}}

        {{-- conributor start --}}
        <section class="kontributor" id="kontributor">
            <h2>Kontributor</h2>
            <div class="owl-carousel kontributor-container">
                <div class="kontributor-card">
                    <img src="https://via.placeholder.com/150" alt="Foto Kontributor">
                    <p class="kontributor-quote">“We are all like fireworks: We climb, we shine and always go our
                        separate ways and become further apart. But even when that time comes, let’s not disappear like
                        a firework and continue to shine... forever.”</p>
                    <h3>Rizzone Nadhif K</h3>
                    <p class="kontributor-position">Posisi</p>
                </div>
                <div class="kontributor-card">
                    <img src="https://via.placeholder.com/150" alt="Foto Kontributor">
                    <p class="kontributor-quote">“We are all like fireworks: We climb, we shine and always go our
                        separate ways and become further apart. But even when that time comes, let’s not disappear like
                        a firework and continue to shine... forever.”</p>
                    <h3>Nama</h3>
                    <p class="kontributor-position">Posisi</p>
                </div>
                <div class="kontributor-card">
                    <img src="https://via.placeholder.com/150" alt="Foto Kontributor">
                    <p class="kontributor-quote">“We are all like fireworks: We climb, we shine and always go our
                        separate ways and become further apart. But even when that time comes, let’s not disappear like
                        a firework and continue to shine... forever.”</p>
                    <h3>Nama</h3>
                    <p class="kontributor-position">Posisi</p>
                </div>
                <div class="kontributor-card">
                    <img src="https://via.placeholder.com/150" alt="Foto Kontributor">
                    <p class="kontributor-quote">“We are all like fireworks: We climb, we shine and always go our
                        separate ways and become further apart. But even when that time comes, let’s not disappear like
                        a firework and continue to shine... forever.”</p>
                    <h3>Nama</h3>
                    <p class="kontributor-position">Posisi</p>
                </div>
                <div class="kontributor-card">
                    <img src="https://via.placeholder.com/150" alt="Foto Kontributor">
                    <p class="kontributor-quote">“We are all like fireworks: We climb, we shine and always go our
                        separate ways and become further apart. But even when that time comes, let’s not disappear like
                        a firework and continue to shine... forever.”</p>
                    <h3>Nama</h3>
                    <p class="kontributor-position">Posisi</p>
                </div>
            </div>
        </section>

    </div>
    {{-- contributor end --}}

    {{-- footer start --}}

    <footer class="footer-distributed">

        <div class="footer-left">

            <h3><img src="assets/images/SIREM.png" alt="logo" style="width: 90px; height: 30px"></h3>

            <p class="footer-links">
                <a href="#home" class="link-1">Home</a>

                <a href="#tentang">Tentang</a>

                <a href="#kontributor">kontributor</a>

            </p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa-solid fa-location-dot"></i>
                <p><span>Jln. Pendidikan No.15, Cibiru Wetan, </span> <span>Kec. Cileunyi, Kabupaten Bandung,</span>
                    <span>Jawa Barat
                        40625</span>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="assets/js/homepage.js"></script>
</body>

</html>

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/login', function () {
    return view('daftar_masuk');
});

Route::get('/tes-siswa', function () {
    return view('tes_siswa');
});

Route::get('/dashboard', function () {
    $spiderChartData = [
        "labels" => ["Disleksia", "Disgrafia", "Diskalkulia", "ADHD", "Tunagrahita", "Pendengaran", "Sosial emosi", "Autis", "Bicara", "Bahasa"],
        "data" => [10, 10, 20, 30, 50, 20, 70, 100, 80, 50]
    ];

    $testCount = 210;

    $genderChartData = [
        "labels" => ["Laki-laki", "Perempuan"],
        "data" => [110, 100]
    ];

    $students = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'gender' => 'Laki-laki',
            'age' => '7 tahun',
            'class' => 'Kelas 1',
            'disorder' => 'ADHD',
        ],
        [
            'id' => 2,
            'name' => 'John Doe',
            'gender' => 'Laki-laki',
            'age' => '5 Tahun',
            'class' => 'Kelas 1',
            'disorder' => 'ADHD',
        ],
        [
            'id' => 3,
            'name' => 'Sarah Smith',
            'gender' => 'Perempuan',
            'age' => '16 tahun',
            'class' => 'SMA 2',
            'disorder' => 'Autisme',
        ],
        [
            'id' => 4,
            'name' => 'Alice Johnson',
            'gender' => 'Perempuan',
            'age' => '9 tahun',
            'class' => 'Kelas 3',
            'disorder' => 'Disleksia',
        ],
        [
            'id' => 5,
            'name' => 'Alice Johnson',
            'gender' => 'Perempuan',
            'age' => '9 tahun',
            'class' => 'Kelas 3',
            'disorder' => 'Disleksia',
        ],
    ];

    return view('dashboard', compact('spiderChartData', 'testCount', 'genderChartData'), ['students' => $students]);
});

Route::get('/detail/{id}', function ($id) {
    $students = [
        1 => [
            'id' => 1,
            'name' => 'John Doe',
            'gender' => 'Laki-laki',
            'age' => '7 tahun',
            'class' => 'Kelas 1',
            'disorder' => 'ADHD',
            'description' => 'ADHD adalah gangguan yang mempengaruhi perhatian, kontrol impuls, dan tingkat aktivitas seseorang. Attention deficit hyperactivity disorder atau biasa dikenal dengan ADHD adalah kondisi ketika terjadinya gangguan perkembangan saraf yang berpengaruh pada motorik (gerakan) seseorang. ADHD adalah gangguan mental yang kerap kali dialami oleh anak-anak.',
            'percentage' => 96,
            'otherDisorders' => [
                ['name' => 'Sosial emosi', 'description' => 'Seseorang akan sering merasa cemas tanpa alasan yang jelas, yang dapat mengganggu aktivitas sehari-hari',  'persen' => '10'],
                ['name' => 'Disleksia', 'description' => 'Sulit mengingat urutan sesuatu, nisalnya urutan abjad atau nama hari', 'persen' => '20'],
                ['name' => 'Diskalkulia', 'description' => 'Siswa merasa kesulitan untuk memecahkan soal matematika dasar, dan segala hal lain yang berkaitan dengan hitung-hitungan atau angka', 'persen' => '30'],
                ['name' => 'Tunagrahita', 'description' => 'Siswa mengalami hambatan atau keterlambatan berpikir dibanding siswa normal', 'persen' => '40'],
                ['name' => 'Pendengaran', 'description' => 'Keterlambatan kemampuan bicara dan kemampuan bahasa ', 'persen' => '50'],
                ['name' => 'Autis', 'description' => 'Secara umum ASDs ditandai dengan kurangnya interaksi sosial dan komunikasi, serta perilaku terbatas dan berulang ', 'persen' => '60'],
                ['name' => 'Bahasa', 'description' => 'Kesulitan dalam memahami dan menggunakan kata-kata dengan benar', 'persen' => '70'],
                ['name' => 'Bicara', 'description' => 'Kesulitan mengucapkan suara atau kata dengan benar', 'persen' => '80'],
                ['name' => 'Disgrafia', 'description' => 'Siswa kesulitan dalam mengungkapkan pemikiran, ide, perasaan atau pesan melalui tulisan', 'persen' => '90'],
                // ... add all other disorders ...
            ]
        ],
        // ... other students data ...
    ];

    $student = $students[$id];

    return view('detail', ['student' => $student, 'otherDisorders' => $student['otherDisorders']]);
});

Route::get('/hasil/{id}', function ($id) {
    $students = [
        1 => [
            'name' => 'John Doe',
            'gender' => 'Laki-laki',
            'age' => '7 tahun',
            'class' => 'Kelas 1',
            'disorder' => 'ADHD',
            'description' => 'ADHD, atau Attention Deficit Hyperactivity Disorder, adalah kondisi yang mempengaruhi kemampuan seseorang dalam fokus, mengendalikan impuls, dan mengatur tingkat aktivitas. ADHD sering kali terdeteksi pada masa kanak-kanak, namun dapat berlanjut hingga dewasa. Orang dengan ADHD mungkin mengalami kesulitan dalam berkonsentrasi, merasa gelisah, atau bertindak tanpa berpikir terlebih dahulu.',
            'percentage' => 96,
            'secondary_disorder' => 'Sedang',
            'secondary_percentage' => 54,
            'secondary_description' => 'ADHD tingkat sedang adalah kondisi di mana seseorang mengalami kesulitan dalam memperhatikan, mengendalikan impuls, dan mengatur tingkat aktivitas. Meskipun gejalanya tidak terlalu parah, mereka tetap dapat mempengaruhi kehidupan sehari-hari, terutama dalam situasi yang memerlukan konsentrasi atau perencanaan jangka panjang.',
            'judul_gejala' => 'ADHD (Attention Deficit Hyperactivity Disorder)',
            'gejala_umum' => 'Hiperaktif, Impulsif, Kurangnya perhatian',
            'gejala_spesifik' => [
                'Sulit untuk disiplin',
                'Sangat sensitif terhadap kritikan',
                'Hanya memiliki sedikit teman',
                'Sulit untuk disiplin',
                'Sangat sensitif terhadap kritikan',
                'Hanya memiliki sedikit teman',
                'Menghindari atau tidak menyukaikegiatan yang membutuhkan usaha berkesinambungan, contohnya duduk diam',
                'Mengalami kecemasan pada situasibaru atau yang tidak familiar',
                'Memiliki kecenderungan untuk melamun Sering merasa rendah diri dan tidak percaya diri',
                'Banyak merasa khawatir dan takut',
                'Menjawab tanpa berpikir,sementara pertanyaan belum selesai',
                'Apabila bermain, lebih sering mondar-mandir dan sulit bermaindengan tenang',
                'Bicara berlebihan Sering menghentak-hentakkan kaki ketika duduk diamSering mengganggu anak-anak lain',
                'Mengalami kesulitan menunggugilirannya(tidak sabaran) sering mengambil mainan temandengan paksa',
                'Reaktif, sering merespon kembali apa yang dilakukan kepadanya'
                // Add other specific symptoms here...
            ],
            'diagnosis' => [
                'Anak tidak memperhatikan detail-detail tertentu serta melakukan tindakan ceroboh saat menjalankan tugas dari sekolah atau pekerjaan dari orangtua.',
                'Anak kesulitan untuk fokus pada tugas atau kegiatannya.',
                'Anak tidak mendengar atau memperhatikan saat diajak bicara.',
                'Anak tidak menjalankan instruksi serta tidak menyelesaikan tugas sekolah.',
                'Anak kesulitan mengatur tugas dan pekerjaan.',
                'Anak menghindar dan cenderung tidak suka dengan tugas yang membutuhkan upaya mental berkelanjutan, seperti menyiapkan laporan dan mengisi formulir.',
                'Anak sering kehilangan barang.Anak tidak fokus dan perhatiannya mudah terganggu.',
                'Anak sering melupakan tugas sehari-hari.'
                // Add other diagnosis points here...
            ],
            'tujuan_pembelajaran' => [
                'jangka_pendek' => 'Anak dapat fokus pada setiap hal',
                'jangka_panjang' => 'Anak tidak kehilangan kefokusannya pada tugas-tugas kecilnya',
            ],
            'rekomendasi_aktivitas' => [
                'Guru memberikan  terapi memusatkan perhatian anak dengan cara anak diajak bermain menebak gambar yang di tunjukan oleh guru.',
                'Membuat anak mengulangi instruksi',
                // Add other recommendations here...
            ],
            'waktu' => '1 minggu 3 kali',
            'rekomendasi_evaluasi' => [
                'harian' => 'Catat perkembangan harian siswa dalam jurnal pembelajaran.',
                'mingguan' => 'Memberikan penilaian setiap minggu dengan daftar ceklis apakah ada perubahan prilaku pada siswa ADHD',
                'bulanan' => 'Memberikan refleksi kepada anak dan siswa untuk mendiskusikan kemajuan dan kesulitan.',
            ],
        ],
        // ... other students' data ...
    ];

    $student = $students[$id];

    return view('hasil', ['student' => $student]);
});

Route::get('/tentang-kami', function () {
    return view('tentang');
});

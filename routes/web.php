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

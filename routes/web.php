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
    return view('dashboard');
});

Route::get('/detail/{id}', function ($id) {
    $students = [
        1 => [
            'name' => 'John Doe',
            'gender' => 'Laki-laki',
            'age' => '7 tahun',
            'class' => 'Kelas 1',
            'disorder' => 'ADHD',
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

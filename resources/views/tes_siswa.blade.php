@extends('layout')

@section('content')
{{-- top image start --}}
<div class="top" id="">
    <div class="image-container">
        <div class="left-side">
            <h1>Test Gangguan Belajar</h1>
            <p>Tes ini dirancang untuk membantu mengidentifikasi potensi gangguan belajar yang mungkin siswa dan
                siswi alami. Dengan memahami kondisi ini, Guru dapat mengambil langkah yang tepat
                untuk mendapatkan bantuan dan dukungan yang diperlukan.</p>
        </div>
    </div>
</div>
{{-- top image end --}}

{{-- identity start --}}
<div class="identity">
    <h2>Identitas siswa</h2>
    <p>Mohon isikan identitas siswa yang akan dinilai</p>
    <div class="identity-option">
        <form>
            <p>Nama lengkap</p>
            <input type="text" placeholder="Masukkan nama lengkap">
            <div class="form-group nomor">
                <p>Umur</p>
                <input type="number" placeholder="Masukkan umur">
                SCore:
                <div id="adhd-score-display" style="margin-top: 20px; font-weight: bold;"></div>
            </div>
            <div class="form-group">
                <p>Jenis kelamin</p>
                <select>
                    <option>Pilih jenis kelamin</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <p>Tingkat pendidikan</p>
                <select>
                    <option>Pilih kelas</option>
                    <option>Kelas 1</option>
                    <option>Kelas 2</option>
                    <option>Kelas 3</option>
                </select>
            </div>
        </form>
    </div>
</div>

{{-- middle start --}}
<div class="middle" id="">
    <div class="text-container">
        <div class="center-side">
            <h1>Catatan Penting</h1>
            <p>Tes ini hanya merupakan langkah awal untuk mengidentifikasi potensi gangguan belajar. Hasil tes ini
                bukanlah diagnosis medis. Untuk penilaian lebih lanjut dan diagnosis yang akurat, kami sarankan
                untuk berkonsultasi dengan profesional di bidang psikologi atau pendidikan. Jika Anda siap, silakan
                lanjutkan ke tes di bawah ini.</p>
        </div>
    </div>
</div>
{{-- middle end --}}

{{-- Question start --}}
<div class="survey-container">
    <form id="survey-form">
        @csrf

        <!-- Progress Bar -->
        <div class="progress-container">
            <div class="progress-text">
                <span id="progress-percentage" class="blue-text">0%</span>
                <span id="remaining-questions" class="blue-text">20 Pertanyaan tersisa</span>
            </div>
            <div class="progress">
                <div class="progress-bar" id="progress-bar" style="width: 0%;"></div>
            </div>
        </div>

        <!-- Question Container -->
        <div id="question-container">
            <!-- Questions will be injected here by JavaScript -->
        </div>

        <div id="result-container" style="display: none;">
            <!-- Results will be injected here by JavaScript -->
        </div>

        <!-- Navigation Buttons -->
        <div class="nav-buttons">
            <button type="button" id="prev-btn" onclick="prevQuestion()">Sebelumnya</button>
            <button type="button" id="next-btn" onclick="nextQuestion()">Lanjut</button>
            <button id="submit-btn" type="button" style="display: none;" onclick="submitForm(event)">
                Lihat hasil analisis
            </button>
        </div>
    </form>
</div>
@endsection
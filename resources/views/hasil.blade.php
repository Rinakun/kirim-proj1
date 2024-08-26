@extends('layout')

@section('content')
    <div class="analysis-container-hasil">
        <h1 class="analysis-title">Hasil analisis jenis gangguan pada anak</h1>
        <div class="student-info">
            <h2 style="color: #fff; margin-top: 20px;">{{ $student['name'] }}</h2>
            <p>{{ $student['gender'] }} | {{ $student['age'] }} | {{ $student['class'] }}</p>
        </div>
        <div class="analysis-result-hasil">
            <div class="analysis-grid-hasil">
                <div class="analysis-grid-chart">
                    <h2>
                        Jenis Gangguan</h2>
                    <!-- Bagian Chart 1-->
                    <div class="chart-container-hasil">
                        <canvas id="pieChart1" class="piechart_secondary" data-percentage="{{ $student['percentage'] }}"
                            data-label="{{ $student['disorder'] }}"></canvas>
                    </div>
                    <!-- Bagian Detail 1 -->
                    <div class="detail-container-hasil">
                        <span class="disorder-label1-secondary">● {{ $student['disorder'] }}</span>
                        <h3 data-description="{{ $student['description'] }}">
                            {{ $student['description'] }}
                        </h3>
                    </div>
                </div>

                <div class="analysis-grid-chart">
                    <h2>
                        Tingkat Gangguan</h2>
                    <!-- Bagian Chart 2-->
                    <div class="chart-container-hasil">
                        <canvas id="pieChart2" class="piechart_secondary"
                            data-percentage="{{ $student['secondary_percentage'] }}"
                            data-label="{{ $student['secondary_disorder'] }}"></canvas>
                    </div>
                    <!-- Bagian Detail 2 -->
                    <div class="detail-container-hasil">
                        <span class="disorder-label2-secondary">● {{ $student['secondary_disorder'] }}</span>
                        <h3 data-description="{{ $student['secondary_description'] }}">
                            {{ $student['secondary_description'] }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="analysis-container-penjelasan">
        <h1 class="analysis-title-penjelasan">{{ $student['judul_gejala'] }}</h1>

        <div class="student-info-penjelasan">
            <h2>Gejala</h2>
            <p><strong>Gejala umum:</strong> {{ $student['gejala_umum'] }}</p>
            <ul>
                @foreach ($student['gejala_spesifik'] as $gejala)
                    <li>{{ $gejala }}</li>
                @endforeach
            </ul>
        </div>

        <div class="student-info-penjelasan">
            <h2 style="margin-top: 50px;">Diagnosis</h2>
            <ul>
                @foreach ($student['diagnosis'] as $diagnosa)
                    <li>{{ $diagnosa }}</li>
                @endforeach
            </ul>
        </div>

        <div class="student-info-penjelasan">
            <h2 style="margin-top: 50px;">Tujuan Pembelajaran</h2>
            <p><strong>Tujuan Pembelajaran jangka pendek:</strong> {{ $student['tujuan_pembelajaran']['jangka_pendek'] }}
            </p>
            <p><strong>Tujuan Pembelajaran jangka panjang:</strong> {{ $student['tujuan_pembelajaran']['jangka_panjang'] }}
            </p>
        </div>

        <div class="student-info-penjelasan">
            <h2 style="margin-top: 50px;">Rekomendasi Aktivitas Pembelajaran/Stimulasi</h2>
            <ul>
                @foreach ($student['rekomendasi_aktivitas'] as $aktivitas)
                    <li>{{ $aktivitas }}</li>
                @endforeach
            </ul>
        </div>

        <div class="student-info-penjelasan">
            <h2 style="margin-top: 50px; margin-bottom: 10px;">Waktu</h2>
            <p>{{ $student['waktu'] }}</p>
        </div>

        <div class="student-info-penjelasan">
            <h2 style="margin-top: 50px;">Rekomendasi Evaluasi</h2>
            <p><strong>Evaluasi harian:</strong> {{ $student['rekomendasi_evaluasi']['harian'] }}</p>
            <p><strong>Evaluasi mingguan:</strong> {{ $student['rekomendasi_evaluasi']['mingguan'] }}</p>
            <p><strong>Evaluasi bulanan:</strong> {{ $student['rekomendasi_evaluasi']['bulanan'] }}</p>
        </div>
    </div>
@endsection

@extends('layout')

@section('content')
    <div class="analysis-container">
        <h1 class="analysis-title">Hasil analisis jenis gangguan pada anak</h1>
        <div class="student-info">
            <h2 style="color: #fff; margin-top: 20px;">{{ $student['name'] }}</h2>
            <p>{{ $student['gender'] }} | {{ $student['age'] }} | {{ $student['class'] }}</p>
        </div>
        <div class="analysis-result">
            <div class="analysis-grid">
                <!-- Bagian Chart -->
                <div class="chart-container">
                    <canvas id="pieChart" class="piechart" data-percentage="{{ $student['percentage'] }}"
                        data-label="{{ $student['disorder'] }}"></canvas>
                </div>
                <!-- Bagian Detail -->
                <div class="detail-container">
                    <span class="disorder-label">● {{ $student['disorder'] }}</span>
                    <h3 data-description="{{ $student['description'] }}">
                        {{ $student['description'] }}
                    </h3>
                    <button onclick="window.location.href='{{ url('/') }}'" class="btn-primary">
                        Lanjutkan
                    </button>
                </div>
            </div>
        </div>


        <div class="other-disorders">
            @foreach ($otherDisorders as $disorder)
                <div class="disorder-card">
                    <h4>{{ $disorder['name'] }}</h4>
                    <p>{{ $disorder['description'] }}</p>
                    <div class="progress-bar-container" style="margin-top: 10px;">
                        <p class="persen">{{ $disorder['persen'] }}%</p>
                        <p>Kemungkinan</p>
                        <!-- Menggunakan kelas untuk canvas -->
                        <canvas class="barChartCanvas" data-label="{{ $disorder['name'] }}"
                            data-value="{{ $disorder['persen'] }}"></canvas>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@extends('layout')

@section('content')
    {{-- CHART START --}}
    <div class="dashboard-container">
        <h1>Dashboard</h1>
        <div class="cards-container">
            <!-- Spider Chart Card -->
            <div class="card">
                <canvas id="spiderChart" class="spider-chart" data-labels="{{ json_encode($spiderChartData['labels']) }}"
                    data-values="{{ json_encode($spiderChartData['data']) }}">
                </canvas>
            </div>

            <!-- Test Count Card -->
            <div class="card">
                <h2>Tes dilakukan</h2>
                <p class="count">{{ $testCount }} kali</p>
                <img src="assets/images/tes_dilakukan.svg" alt="Test Image">
            </div>

            <!-- Gender Comparison Card -->
            <div class="card">
                <h3>Perbandingan laki-laki dan perempuan</h3>
                <canvas id="genderChart" class="gender-chart" data-labels="{{ json_encode($genderChartData['labels']) }}"
                    data-values="{{ json_encode($genderChartData['data']) }}">
                </canvas>
            </div>
        </div>
    </div>
    {{-- CHART END --}}

    {{-- TABLE DATA START --}}
    <div class="table-container">
        <h2>Daftar Siswa</h2>
        <div class="table-header">
            <div class="search-bar">
                <input type="text" placeholder="Cari" id="search-input"
                    style="background-color: transparent; border-radius: 10px">
                <button id="search-button" style="background-color: transparent; margin-top: 10px">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="table-actions">
                <button id="filter-button"
                    style="border-radius: 32px; background-color: transparent; border: 1px solid #ddd;"><i
                        class="fa-solid fa-filter" style="margin-right: 10px;"></i>Filter
                </button>
                <button id="delete-button"
                    style="border-radius: 32px; background-color: transparent; border: 1px solid #ddd;">
                    <i class="fa-regular fa-trash-can" style="color: #ff2020; margin-right: 10px;"></i>Hapus
                </button>

            </div>
        </div>
        <table class="students-table">
            <thead>
                <tr>
                    <th><input type="checkbox" id="select-all-checkbox"></th>
                    <th data-column="name">Nama <i class="fa-solid fa-sort"></i></th>
                    <th data-column="gender">Gender <i class="fa-solid fa-sort"></i></th>
                    <th data-column="age">Usia <i class="fa-solid fa-sort"></i></th>
                    <th data-column="class">Kelas <i class="fa-solid fa-sort"></i></th>
                    <th data-column="disorder">Gangguan <i class="fa-solid fa-sort"></i></th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="students-tbody">
                @foreach ($students as $student)
                    <tr>
                        <td><input type="checkbox" value="{{ $student['id'] }}"></td>
                        <td>{{ $student['name'] }}</td>
                        <td>{{ $student['gender'] }}</td>
                        <td>{{ $student['age'] }}</td>
                        <td>{{ $student['class'] }}</td>
                        <td>{{ $student['disorder'] }}</td>
                        <td><button class="detail-button" data-id="{{ $student['id'] }}">detail</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- TABLE DATA END --}}
@endsection

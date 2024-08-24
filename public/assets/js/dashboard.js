// Bar Charts untuk setiap elemen dengan kelas .barChartCanvas
var barCharts = document.querySelectorAll(".barChartCanvas");

if (barCharts.length > 0) {
    barCharts.forEach(function (canvas) {
        var ctxBar = canvas.getContext("2d");
        var label = canvas.getAttribute("data-label");
        var value = canvas.getAttribute("data-value");

        var barChart = new Chart(ctxBar, {
            type: "bar",
            data: {
                labels: [label], // Tetap diperlukan untuk referensi
                datasets: [
                    {
                        data: [value],
                        backgroundColor: "#0078EB",
                        borderColor: "#D9D9D9",
                        borderWidth: 2,
                        borderRadius: 32, // Membuat batang lonjong di ujungnya
                        barThickness: 20, // Sesuaikan ketebalan batang
                    },
                ],
            },
            options: {
                scales: {
                    x: {
                        beginAtZero: true,
                        max: 100, // Mengatur skala maksimum hingga 100%
                        display: false, // Menyembunyikan sumbu X
                    },
                    y: {
                        display: false, // Menyembunyikan label Y (yang mencantumkan nama gangguan)
                    },
                },
                indexAxis: "y", // Membuat bar chart menjadi horizontal (menggunakan sumbu Y)
                plugins: {
                    legend: {
                        display: false, // Menyembunyikan label legend
                    },
                    tooltip: {
                        enabled: false, // Menyembunyikan tooltip
                    },
                },
                responsive: true,
                maintainAspectRatio: false,
            },
        });
    });
} else {
    console.error("No elements with class 'barChartCanvas' found.");
}

// piechart
var ctxPie = document.getElementById("pieChart");

if (ctxPie) {
    ctxPie = ctxPie.getContext("2d");

    // Membuat gradient warna
    var gradient = ctxPie.createLinearGradient(0, 0, 0, ctxPie.canvas.height);
    gradient.addColorStop(0, "#4CAEFF");
    gradient.addColorStop(1, "#CD0000");

    var pieChart = new Chart(ctxPie, {
        type: "doughnut",
        data: {
            labels: ["ADHD", "Sisa"],
            datasets: [
                {
                    data: [96, 4],
                    backgroundColor: [gradient, "#e9e9e9"],
                    hoverOffset: 4,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: "70%", // Mengatur bagian tengah kosong
            plugins: {
                legend: {
                    display: false, // Menyembunyikan legenda jika tidak diperlukan
                },
                tooltip: {
                    enabled: true, // Menampilkan tooltip saat hover
                },
            },
        },
        plugins: [
            {
                id: "textInCenter",
                beforeDraw: function (chart) {
                    var width = chart.width,
                        height = chart.height,
                        ctx = chart.ctx;

                    ctx.restore();

                    // Mengatur font dan posisi untuk teks "70%"
                    var fontSize = (height / 80).toFixed(2); // Lebih besar dari "Kemungkinan"
                    ctx.font = "bold " + fontSize + "em sans-serif";
                    ctx.textBaseline = "middle";

                    var text = "96%",
                        textX = Math.round(
                            (width - ctx.measureText(text).width) / 2
                        ),
                        textY = height / 2 - 10;

                    ctx.fillText(text, textX, textY);

                    // Mengatur font dan posisi untuk teks "Kemungkinan"
                    var subFontSize = (height / 190).toFixed(2);
                    ctx.font = "normal " + subFontSize + "em sans-serif";

                    var subText = "Kemungkinan",
                        subTextX = Math.round(
                            (width - ctx.measureText(subText).width) / 2
                        ),
                        subTextY = height / 2 + 30;

                    ctx.fillText(subText, subTextX, subTextY);

                    ctx.save();
                },
            },
        ],
    });
} else {
    console.error("Element with id 'pieChart' not found.");
}

// Spider Chart
var ctxSpider = document.getElementById("spiderChart").getContext("2d");
var spiderChart = new Chart(ctxSpider, {
    type: "radar",
    data: {
        labels: [
            "Disleksia",
            "Disgrafia",
            "Diskalkulia",
            "ADHD",
            "Tunagrahita",
            "Pendengaran",
            "Sosial emosi",
            "Autis",
            "Bicara",
            "Bahasa",
        ],
        datasets: [
            {
                label: "Hasil Tes",
                data: [10, 10, 20, 30, 50, 20, 70, 100, 80, 50],
                backgroundColor: "rgba(33, 150, 243, 0.2)",
                borderColor: "#2196F3",
                borderWidth: 2,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            r: {
                angleLines: {
                    display: false, // Menghilangkan garis yang menuju ke label
                },
                suggestedMin: 0,
                suggestedMax: 100,
                ticks: {
                    display: false, // Menghilangkan angka pada sumbu
                },
            },
        },
        plugins: {
            tooltip: {
                enabled: true, // Mengaktifkan tooltip
                callbacks: {
                    label: function (tooltipItem) {
                        return tooltipItem.label + ": " + tooltipItem.raw;
                    },
                },
            },
            legend: {
                display: true, // Menampilkan legend
                position: "top",
            },
        },
    },
});

// Gender Comparison Chart
var ctxGender = document.getElementById("genderChart").getContext("2d");

var genderChart = new Chart(ctxGender, {
    type: "doughnut",
    data: {
        labels: ["Laki-laki", "Perempuan"],
        datasets: [
            {
                label: "Jumlah",
                data: [110, 100],
                backgroundColor: ["#8979FF", "#FF928A"],
                hoverOffset: 4,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: "70%",
        plugins: {
            tooltip: {
                enabled: true,
            },
            legend: {
                display: true,
                position: "bottom",
                labels: {
                    usePointStyle: true,
                    padding: 20,
                    font: {
                        size: 12,
                    },
                },
            },
        },
    },
});

// ISI TABLE DATA

document.addEventListener("DOMContentLoaded", function () {
    const students = [
        {
            id: 1,
            name: "John Doe",
            gender: "Laki-laki",
            age: "7 tahun",
            class: "Kelas 1",
            disorder: "ADHD",
        },
        {
            id: 2,
            name: "John Doe",
            gender: "Laki-laki",
            age: "5 Tahun",
            class: "Kelas 1",
            disorder: "ADHD",
        },
        {
            id: 3,
            name: "Sarah Smith",
            gender: "Perempuan",
            age: "16 tahun",
            class: "SMA 2",
            disorder: "Autisme",
        },
        {
            id: 4,
            name: "Alice Johnson",
            gender: "Perempuan",
            age: "9 tahun",
            class: "Kelas 3",
            disorder: "Disleksia",
        },
        {
            id: 5,
            name: "Alice Johnson",
            gender: "Perempuan",
            age: "9 tahun",
            class: "Kelas 3",
            disorder: "Disleksia",
        },
    ];

    const tbody = document.getElementById("students-tbody");

    function loadTableData(students) {
        tbody.innerHTML = "";
        students.forEach((student) => {
            const row = document.createElement("tr");

            row.innerHTML = `
                <td><input type="checkbox" value="${student.id}"></td>
                <td>${student.name}</td>
                <td>${student.gender}</td>
                <td>${student.age}</td>
                <td>${student.class}</td>
                <td>${student.disorder}</td>
                <td><button class="detail-button" data-id="${student.id}">detail</button></td>
            `;

            tbody.appendChild(row);
        });
    }

    loadTableData(students);

    const searchInput = document.getElementById("search-input");
    const searchButton = document.getElementById("search-button");
    const filterButton = document.getElementById("filter-button");
    const deleteButton = document.getElementById("delete-button");
    const detailButtons = document.querySelectorAll(".detail-button");

    // detail functionality
    detailButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const studentId = this.dataset.id;
            const student = students.find((s) => s.id == studentId);

            // Redirect to the detail page with the student's data
            window.location.href = `/detail/${student.id}`;
        });
    });

    // Search functionality
    searchButton.addEventListener("click", function () {
        const query = searchInput.value.toLowerCase();
        const filteredStudents = students.filter((student) => {
            return Object.values(student).some((value) =>
                String(value).toLowerCase().includes(query)
            );
        });
        loadTableData(filteredStudents);
    });

    // Sort functionality for all columns
    let sortDirection = {
        name: true,
        gender: true,
        age: true,
        class: true,
        disorder: true,
    };

    const headers = document.querySelectorAll("th[data-column]");

    headers.forEach((header) => {
        header.addEventListener("click", function () {
            const column = header.getAttribute("data-column");
            const icon = header.querySelector("i");
            const ascending = sortDirection[column];

            students.sort((a, b) => {
                let valA = a[column];
                let valB = b[column];

                // Convert "age" to numbers for proper sorting
                if (column === "age") {
                    valA = parseInt(valA);
                    valB = parseInt(valB);
                }

                if (ascending) {
                    return valA > valB ? 1 : -1;
                } else {
                    return valA < valB ? 1 : -1;
                }
            });

            // Update sort direction
            sortDirection[column] = !ascending;

            // Update icons
            headers.forEach(
                (th) => (th.querySelector("i").className = "fa-solid fa-sort")
            ); // Reset all icons
            icon.className = ascending
                ? "fa-solid fa-sort-up"
                : "fa-solid fa-sort-down";

            loadTableData(students);
        });
    });

    // Select all functionality
    const selectAllCheckbox = document.getElementById("select-all-checkbox");

    selectAllCheckbox.addEventListener("change", function () {
        const checkboxes = tbody.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach((checkbox) => {
            checkbox.checked = selectAllCheckbox.checked;
        });
    });

    // Delete functionality
    deleteButton.addEventListener("click", function () {
        const selectedCheckboxes = tbody.querySelectorAll(
            'input[type="checkbox"]:checked'
        );
        selectedCheckboxes.forEach((checkbox) => {
            const row = checkbox.closest("tr");
            row.remove();
        });
    });

    // Filter button event handler (can be further implemented)
    filterButton.addEventListener("click", function () {
        // Implement filter logic here
    });
});

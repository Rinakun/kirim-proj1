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
    var percentage = ctxPie.getAttribute("data-percentage");
    var disorderLabel = ctxPie.getAttribute("data-label");

    ctxPie = ctxPie.getContext("2d");

    // Membuat gradient warna
    var gradient = ctxPie.createLinearGradient(0, 0, 0, ctxPie.canvas.height);
    gradient.addColorStop(0, "#4CAEFF");
    gradient.addColorStop(1, "#CD0000");

    var pieChart = new Chart(ctxPie, {
        type: "doughnut",
        data: {
            labels: [disorderLabel],
            datasets: [
                {
                    data: [percentage, 100 - percentage],
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

                    var text = percentage + "%",
                        textX = Math.round(
                            (width - ctx.measureText(text).width) / 2
                        ),
                        textY = height / 2 - 10;

                    ctx.fillText(text, textX, textY);

                    ctx.save();
                },
            },
        ],
    });
} else {
    console.error("Element with id 'pieChart' not found.");
}

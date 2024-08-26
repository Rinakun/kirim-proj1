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

// piechart 1
var ctxPie1 = document.getElementById("pieChart1");

if (ctxPie1) {
    var percentage1 = ctxPie1.getAttribute("data-percentage");
    var disorderLabel1 = ctxPie1.getAttribute("data-label");

    ctxPie1 = ctxPie1.getContext("2d");

    var gradient1 = ctxPie1.createLinearGradient(
        0,
        0,
        0,
        ctxPie1.canvas.height
    );
    gradient1.addColorStop(0, "#4CAEFF");
    gradient1.addColorStop(1, "#CD0000");

    var pieChart1 = new Chart(ctxPie1, {
        type: "doughnut",
        data: {
            labels: [disorderLabel1],
            datasets: [
                {
                    data: [percentage1, 100 - percentage1],
                    backgroundColor: [gradient1, "#e9e9e9"],
                    hoverOffset: 4,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: "70%",
            plugins: {
                legend: { display: false },
                tooltip: { enabled: true },
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

                    var fontSize = (height / 80).toFixed(2);
                    ctx.font = "bold " + fontSize + "em sans-serif";
                    ctx.textBaseline = "middle";

                    var text = percentage1 + "%",
                        textX = Math.round(
                            (width - ctx.measureText(text).width) / 2
                        ),
                        textY = height / 2 - 10;
                    ctx.fillText(text, textX, textY);

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
    console.error("Element with id 'pieChart1' not found.");
}

// piechart 2
var ctxPie2 = document.getElementById("pieChart2");

if (ctxPie2) {
    var percentage2 = ctxPie2.getAttribute("data-percentage");
    var disorderLabel2 = ctxPie2.getAttribute("data-label");

    ctxPie2 = ctxPie2.getContext("2d");

    var gradient2 = ctxPie2.createLinearGradient(
        0,
        0,
        0,
        ctxPie2.canvas.height
    );
    gradient2.addColorStop(0, "#FF5900");
    gradient2.addColorStop(1, "#CD0000");

    var pieChart2 = new Chart(ctxPie2, {
        type: "doughnut",
        data: {
            labels: [disorderLabel2],
            datasets: [
                {
                    data: [percentage2, 100 - percentage2],
                    backgroundColor: [gradient2, "#e9e9e9"],
                    hoverOffset: 4,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: "70%",
            plugins: {
                legend: { display: false },
                tooltip: { enabled: true },
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

                    var fontSize = (height / 80).toFixed(2);
                    ctx.font = "bold " + fontSize + "em sans-serif";
                    ctx.textBaseline = "middle";

                    var text = percentage2 + "%",
                        textX = Math.round(
                            (width - ctx.measureText(text).width) / 2
                        ),
                        textY = height / 2;
                    ctx.fillText(text, textX, textY);

                    // var subFontSize = (height / 190).toFixed(2);
                    // ctx.font = "normal " + subFontSize + "em sans-serif";

                    // var subText = "Kemungkinan",
                    //     subTextX = Math.round(
                    //         (width - ctx.measureText(subText).width) / 2
                    //     ),
                    //     subTextY = height / 2 + 30;
                    // ctx.fillText(subText, subTextX, subTextY);
                    ctx.save();
                },
            },
        ],
    });
} else {
    console.error("Element with id 'pieChart2' not found.");
}

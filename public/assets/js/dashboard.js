// Spider Chart
// Mengambil data dari atribut data-* pada elemen canvas Spider Chart
var spiderChartElement = document.getElementById("spiderChart");
var spiderChartLabels = JSON.parse(
    spiderChartElement.getAttribute("data-labels")
);
var spiderChartValues = JSON.parse(
    spiderChartElement.getAttribute("data-values")
);

// Inisialisasi Spider Chart
var ctxSpider = spiderChartElement.getContext("2d");
var spiderChart = new Chart(ctxSpider, {
    type: "radar",
    data: {
        labels: spiderChartLabels,
        datasets: [
            {
                label: "Hasil Tes",
                data: spiderChartValues,
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
                    display: false,
                },
                suggestedMin: 0,
                suggestedMax: 100,
                ticks: {
                    display: false,
                },
            },
        },
        plugins: {
            tooltip: {
                enabled: true,
                callbacks: {
                    label: function (tooltipItem) {
                        return tooltipItem.label + ": " + tooltipItem.raw;
                    },
                },
            },
            legend: {
                display: true,
                position: "top",
            },
        },
    },
});

// Mengambil data dari atribut data-* pada elemen canvas Gender Chart
var genderChartElement = document.getElementById("genderChart");
var genderChartLabels = JSON.parse(
    genderChartElement.getAttribute("data-labels")
);
var genderChartValues = JSON.parse(
    genderChartElement.getAttribute("data-values")
);

// Inisialisasi Gender Chart
var ctxGender = genderChartElement.getContext("2d");
var genderChart = new Chart(ctxGender, {
    type: "doughnut",
    data: {
        labels: genderChartLabels,
        datasets: [
            {
                label: "Jumlah",
                data: genderChartValues,
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
    const tbody = document.getElementById("students-tbody");

    const searchInput = document.getElementById("search-input");
    const searchButton = document.getElementById("search-button");
    const filterButton = document.getElementById("filter-button");
    const deleteButton = document.getElementById("delete-button");

    // Search functionality
    searchButton.addEventListener("click", function () {
        const query = searchInput.value.toLowerCase();
        const rows = tbody.querySelectorAll("tr");
        rows.forEach((row) => {
            const studentData = Array.from(row.children).map((td) =>
                td.textContent.toLowerCase()
            );
            const match = studentData.some((value) => value.includes(query));
            row.style.display = match ? "" : "none";
        });
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
            const rows = Array.from(tbody.querySelectorAll("tr"));

            rows.sort((a, b) => {
                let valA = a.querySelector(
                    `td:nth-child(${header.cellIndex + 1})`
                ).textContent;
                let valB = b.querySelector(
                    `td:nth-child(${header.cellIndex + 1})`
                ).textContent;

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

            // Reorder rows in tbody
            rows.forEach((row) => tbody.appendChild(row));
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

        if (selectedCheckboxes.length > 0) {
            // Tampilkan SweetAlert konfirmasi
            Swal.fire({
                title: "Apakah kamu yakin?",
                text: "Data yang dihapus tidak bisa dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal",
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika dikonfirmasi, hapus baris yang dipilih
                    selectedCheckboxes.forEach((checkbox) => {
                        const row = checkbox.closest("tr");
                        row.remove();
                    });

                    Swal.fire("Terhapus!", "Data telah dihapus.", "success");
                }
            });
        } else {
            Swal.fire({
                title: "Tidak ada data yang dipilih",
                text: "Pilih data yang ingin dihapus!",
                icon: "warning",
                confirmButtonColor: "#3085d6",
                confirmButtonText: "OK",
            });
        }
    });

    // Detail button functionality
    tbody.addEventListener("click", function (e) {
        if (e.target.classList.contains("detail-button")) {
            const studentId = e.target.getAttribute("data-id");
            window.location.href = `/detail/${studentId}`;
        }
    });

    // Filter button event handler (can be further implemented)
    filterButton.addEventListener("click", function () {
        // Implement filter logic here
    });
});

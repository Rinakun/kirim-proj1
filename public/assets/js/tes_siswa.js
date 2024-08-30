let adhd = 0;  
let dislexia = 0;  
let pendengaran = 0;  

document.addEventListener("DOMContentLoaded", function () {  
    const questions = [  
        'ADHD Saya mudah teralihkan oleh suara-suara atau kejadian di sekitar saya',  
        'DISLEKSIA Saya kesulitan membaca dan menulis',  
        'PENDENGARAN Saya kesulitan mendengar',  
        'ADHD Saya mudah teralihkan oleh suara-suara atau kejadian di sekitar saya',  
        'DISLEKSIA Saya kesulitan membaca dan menulis',  
        'PENDENGARAN Saya kesulitan mendengar',  
    ];  

    const totalQuestions = 3;  
    const questionsPerPage = 3;  
    let currentQuestionIndex = 0;  
    let answeredQuestions = 0;  
    const answeredQuestionsTracker = new Set(); // To track answered questions  
    const answers = new Array(totalQuestions).fill(null); // To store answers  

    const poin_soal = {  
        "Sangat Tidak Setuju": 0,  
        "Tidak Setuju": 1,  
        "Ragu-Ragu": 2,  
        "Setuju": 3,  
        "Sangat Setuju": 4  
    };  


document.addEventListener("DOMContentLoaded", function () {
    const totalQuestions = 20;
    const questionsPerPage = 5;
    let currentQuestionIndex = 0;
    let answeredQuestions = 0;
    const answeredQuestionsTracker = new Set(); // To track answered questions
    const answers = new Array(totalQuestions).fill(null); // To store answers
 

    const jawaban = {  
        'Sangat Tidak Setuju': 0,  
        'Tidak Setuju': 1,  
        'Netral': 2,  
        'Setuju': 3,  
        'Sangat Setuju': 4  
    };  
    

    const questions = [
        "Mispronounce (or used to) only certain words (e.g., says amnuil for animal, poothpaste for toothpaste)?",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non dolor est.",
        // Add all other questions here.
        "Question 3...",
        "Question 4...",
        "Question 5...",
        "Question 6...",
        "Question 7...",
        "Question 8...",
        "Question 9...",
        "Question 10...",
        // ...
    ];

    window.updateProgressBar = function () {  
        const progress = (answeredQuestions / totalQuestions) * 100;  
        document.getElementById("progress-bar").style.width = progress + "%";  
        document.getElementById("progress-percentage").innerText = `${Math.round(progress)}%`;  
        document.getElementById("remaining-questions").innerText = `${  
            totalQuestions - answeredQuestions  
        } Pertanyaan tersisa`;  
    };  

    window.renderResult = function () {  
        const resultContainer = document.getElementById("result-container");  
        resultContainer.innerHTML = ""; // Clear previous results  
    
        const categories = [  
            { name: "ADHD", score: adhd },  
            { name: "Disleksia", score: dislexia },  
            { name: "Pendengaran", score: pendengaran }  
        ];  
    
        const maxPossibleScore = 8; // 2 questions per category, max score of 4 per question  
    
        categories.forEach(category => {  
            const percentage = (category.score / maxPossibleScore) * 100;  
            const resultDiv = document.createElement("div");  
            resultDiv.className = "result-item";  
            resultDiv.innerHTML = `  
                <h3>${category.name}</h3>  
                <div class="progress-bar-container">  
                    <div class="progress-bar" style="width: ${percentage}%"></div>  
                </div>  
                <p>Skor: ${category.score} / ${maxPossibleScore}</p>  
                <p>Persentase: ${percentage.toFixed(2)}%</p>  
            `;  
            resultContainer.appendChild(resultDiv);  
        });  
    
        // Show the result container  
        resultContainer.style.display = "block";  
    
        // Hide the question container and navigation buttons  
        document.getElementById("question-container").style.display = "none";  
        document.querySelector(".nav-buttons").style.display = "none";  
    };  
    

    window.renderQuestions = function () {
        const questionContainer = document.getElementById("question-container");
        questionContainer.innerHTML = "";

        for (let i = currentQuestionIndex; i < currentQuestionIndex + questionsPerPage; i++) {
            if (i >= totalQuestions) break;

            const questionDiv = document.createElement("div");
            questionDiv.className = "question";
            questionDiv.innerHTML = `
                <p class="question-text">${questions[i]}</p>
                <div class="options">
                    <label><input type="radio" name="q${
                        i + 1
                    }" value="Sangat Tidak Setuju" onclick="markAnswered(${i}, 'Sangat Tidak Setuju')" ${
                answers[i] === "Sangat Tidak Setuju" ? "checked" : ""
            }> Sangat Tidak Setuju</label>
                    <label><input type="radio" name="q${
                        i + 1
                    }" value="Tidak Setuju" onclick="markAnswered(${i}, 'Tidak Setuju')" ${
                answers[i] === "Tidak Setuju" ? "checked" : ""
            }> Tidak Setuju</label>
                    <label><input type="radio" name="q${
                        i + 1
                    }" value="Ragu-Ragu" onclick="markAnswered(${i}, 'Ragu-Ragu')" ${
                answers[i] === "Ragu-Ragu" ? "checked" : ""
            }> Ragu-Ragu</label>
                    <label><input type="radio" name="q${
                        i + 1
                    }" value="Setuju" onclick="markAnswered(${i}, 'Setuju')" ${
                answers[i] === "Setuju" ? "checked" : ""
            }> Setuju</label>
                    <label><input type="radio" name="q${
                        i + 1
                    }" value="Sangat Setuju" onclick="markAnswered(${i}, 'Sangat Setuju')" ${
                answers[i] === "Sangat Setuju" ? "checked" : ""
            }> Sangat Setuju</label>
                </div>
            `;
            questionContainer.appendChild(questionDiv);
        }

        updateProgressBar();
    };
    
    window.submitForm = function (event) {  
        event.preventDefault();
        
        const unansweredQuestions = answers.filter((answer) => answer === null);
        
        if (unansweredQuestions.length > 0) {  
            Swal.fire({  
                icon: "error",  
                title: "Belum Lengkap!",  
                text: "Pastikan semua pertanyaan telah dijawab sebelum submit.",  
                confirmButtonText: "OK",  
            });  
        } else {  
            adhd = 0;  
            dislexia = 0;  
            pendengaran = 0;  
    
            answers.forEach((answer, index) => {  
                let questionText = questions[index];  
                let category = "";  
                if (questionText.includes("ADHD")) {  
                    category = "ADHD";  
                } else if (questionText.includes("DISLEKSIA")) {  
                    category = "DISLEKSIA";  
                } else if (questionText.includes("PENDENGARAN")) {  
                    category = "PENDENGARAN";  
                }  
                const poin = poin_soal[answer];  
                if (category === "ADHD") {  
                    adhd += poin;  
                } else if (category === "DISLEKSIA") {  
                    dislexia += poin;  
                } else if (category === "PENDENGARAN") {  
                    pendengaran += poin;  
                }  
            });  
    
            // Send the result to the server
            fetch('/submit-results', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    adhd: adhd,
                    dislexia: dislexia,
                    pendengaran: pendengaran
                }),
            })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);
                renderResult();
                Swal.fire({
                    icon: "success",
                    title: "Terima kasih!",
                    text: "Jawaban Anda telah berhasil disubmit.",
                    confirmButtonText: "OK",
                });
            })
            .catch((error) => {
                console.error('Error:', error);
                Swal.fire({
                    icon: "error",
                    title: "Gagal!",
                    text: "Terjadi kesalahan saat menyimpan jawaban Anda.",
                    confirmButtonText: "OK",
                });
            });
        }
    };
    

    window.markAnswered = function (questionIndex, answer) {  
        if (!answeredQuestionsTracker.has(questionIndex)) {  
            answeredQuestions++;  
            answeredQuestionsTracker.add(questionIndex);  
        }  
        answers[questionIndex] = answer;  
        updateProgressBar();  
    };  

    window.nextQuestion = function () {  
        if (currentQuestionIndex + questionsPerPage < totalQuestions) {  
            currentQuestionIndex += questionsPerPage;  
            renderQuestions();  
        }  

        if (currentQuestionIndex + questionsPerPage >= totalQuestions) {  
            document.getElementById("next-btn").style.display = "none";  
            document.getElementById("submit-btn").style.display = "inline-block";  
        }  

        document.getElementById("prev-btn").style.display = "inline-block";  
    };  

    window.prevQuestion = function () {  
        if (currentQuestionIndex - questionsPerPage >= 0) {  
            currentQuestionIndex -= questionsPerPage;  
            renderQuestions();  
        }  

        if (currentQuestionIndex === 0) {  
            document.getElementById("prev-btn").style.display = "none";  
        }  

        document.getElementById("next-btn").style.display = "inline-block";  
        document.getElementById("submit-btn").style.display = "none";  
    };  

window.submitForm = function (event) {
        event.preventDefault();

        const unansweredQuestions = answers.filter((answer) => answer === null);

        if (unansweredQuestions.length > 0) {
            Swal.fire({
                icon: "error",
                title: "Belum Lengkap!",
                text: "Pastikan semua pertanyaan telah dijawab sebelum submit.",
                confirmButtonText: "OK",
            });
        } else {
            adhd = 0;
            dislexia = 0;
            pendengaran = 0;

            answers.forEach((answer, index) => {
                let questionText = questions[index];
                let category = "";

                if (questionText.includes("ADHD")) {
                    category = "ADHD";
                } else if (questionText.includes("DISLEKSIA")) {
                    category = "DISLEKSIA";
                } else if (questionText.includes("PENDENGARAN")) {
                    category = "PENDENGARAN";
                }

                const poin = poin_soal[answer];

                if (category === "ADHD") {
                    adhd += poin;
                } else if (category === "DISLEKSIA") {
                    dislexia += poin;
                } else if (category === "PENDENGARAN") {
                    pendengaran += poin;
                }
            });

            fetch('/submit-results', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    adhd: adhd,
                    dislexia: dislexia,
                    pendengaran: pendengaran
                }),
            })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);
                renderResult();
                Swal.fire({
                    icon: "success",
                    title: "Terima kasih!",
                    text: "Jawaban Anda telah berhasil disubmit.",
                    confirmButtonText: "OK",
                });
            })
            .catch((error) => {
                console.error('Error:', error);
                Swal.fire({
                    icon: "error",
                    title: "Gagal!",
                    text: "Terjadi kesalahan saat menyimpan jawaban Anda.",
                    confirmButtonText: "OK",
                });
            });
        }
    };

    // Other functions like renderQuestions, updateProgressBar, etc.
    renderQuestions();

    document.getElementById("prev-btn").style.display = "none";
});

const hamburger = document.querySelector(".hamburger");  
const mainNav = document.querySelector(".main-nav");  

hamburger.addEventListener("click", () => {  
    mainNav.classList.toggle("active");  
});  
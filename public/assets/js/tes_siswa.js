document.addEventListener("DOMContentLoaded", function () {
    const totalQuestions = 20;
    const questionsPerPage = 5;
    let currentQuestionIndex = 0;
    let answeredQuestions = 0;
    const answeredQuestionsTracker = new Set(); // To track answered questions
    const answers = new Array(totalQuestions).fill(null); // To store answers

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
        document.getElementById(
            "progress-percentage"
        ).innerText = `${Math.round(progress)}%`;
        document.getElementById("remaining-questions").innerText = `${
            totalQuestions - answeredQuestions
        } Pertanyaan tersisa`;
    };

    window.renderQuestions = function () {
        const questionContainer = document.getElementById("question-container");
        questionContainer.innerHTML = "";

        for (
            let i = currentQuestionIndex;
            i < currentQuestionIndex + questionsPerPage;
            i++
        ) {
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
            document.getElementById("submit-btn").style.display =
                "inline-block";
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
        // Prevent the form from submitting and reloading the page

        const unansweredQuestions = answers.filter((answer) => answer === null);

        if (unansweredQuestions.length > 0) {
            // If there are unanswered questions, show an alert
            Swal.fire({
                icon: "error",
                title: "Belum Lengkap!",
                text: "Pastikan semua pertanyaan telah dijawab sebelum submit.",
                confirmButtonText: "OK",
            });
        } else {
            // All questions are answered, show confirmation
            Swal.fire({
                icon: "question",
                title: "Konfirmasi",
                text: "Apakah Anda yakin ingin submit?",
                showCancelButton: true,
                confirmButtonText: "Ya, Submit",
                cancelButtonText: "Batal",
            }).then((result) => {
                if (result.isConfirmed) {
                    // Simulate form submission or any further action
                    Swal.fire({
                        icon: "success",
                        title: "Terima kasih!",
                        text: "Jawaban Anda telah berhasil disubmit.",
                        confirmButtonText: "OK",
                    });
                    // Uncomment the following line if you need to submit the form after confirmation
                    // document.getElementById('your-form-id').submit();
                }
            });
        }
    };

    renderQuestions();

    document.getElementById("prev-btn").style.display = "none";
});

const hamburger = document.querySelector(".hamburger");
const mainNav = document.querySelector(".main-nav");

hamburger.addEventListener("click", () => {
    mainNav.classList.toggle("active");
});

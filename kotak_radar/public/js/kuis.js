const quizData = [
    {
      question: "Siapa nama Presiden pertama?",
      a: "Naruto",
      b: "Gojo Satoru",
      c: "Yelan",
      d: "Ir. Soekarno",
      correct: "d"
    },
    {
      question: "Siapa nama presiden saat ini?",
      a: "Gibran Rakabuming Raka",
      b: "Joko Widodo",
      c: "Ganjar Pranono",
      d: "Anies Basedan",
      correct: "b"
    },
    {
      question: "Siapa Oshiku?",
      a: "Shani Indira Natio",
      b: "Azizi Shafa Asadel",
      c: "Marsha Lenathea",
      d: "Shania Gracia",
      correct: "a"
    },
    {
      question: "Mau uang berapa?",
      a: "1.000.000",
      b: "25.000.000",
      c: "20.000",
      d: "Ga pingin",
      correct: "b"
    },
    {
      question: "Is javaScript is programming language?",
      a: "Yes",
      b: "No",
      c: "Not sure",
      d: "none of the above",
      correct: "a"
    },
  ];

  const quiz = document.getElementById("quiz");
  const answerElements = document.querySelectorAll(".answer");
  const questionElement = document.getElementById("question");
  const a_text = document.getElementById("a_text");
  const b_text = document.getElementById("b_text");
  const c_text = document.getElementById("c_text");
  const d_text = document.getElementById("d_text");
  const submitButton = document.getElementById("submit");

  let currentQuiz = 0;
  let score = 0;

  const deselectAnswers = () => {
    answerElements.forEach((answer) => (answer.checked = false));
  };

  const getSelected = () => {
    let answer;
    answerElements.forEach((answerElement) => {
      if (answerElement.checked) answer = answerElement.id;
    });
    return answer;
  };

  const loadQuiz = () => {
    deselectAnswers();
    const currentQuizData = quizData[currentQuiz];
    questionElement.innerText = currentQuizData.question;
    a_text.innerText = currentQuizData.a;
    b_text.innerText = currentQuizData.b;
    c_text.innerText = currentQuizData.c;
    d_text.innerText = currentQuizData.d;
  };

  loadQuiz();

  submitButton.addEventListener("click", () => {
    const answer = getSelected();
    if (answer) {
      if (answer === quizData[currentQuiz].correct) score += 20;
      currentQuiz++;
      if (currentQuiz < quizData.length) loadQuiz();
      else {
        quiz.innerHTML = `
              <h2>Nilai anda ${score}%/100%</h2>
              <button onclick="window.location.href='/home'">Kembali</button>
          `;
      }
    }
  });

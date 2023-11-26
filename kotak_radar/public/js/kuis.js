const quizData = [
    {
      question: "Alasan kamu nggak nyoblos itu yang mana nih?",
      a: "Nggak tau banyak soal politik",
      b: "Nggak suka sama calonnya",
      c: "Nggak percaya sama sistem politiknya",
      d: "Semua jawaban di atas",
      correct: "d"
    },
    {
      question: "Kalo kamu gak nyoblos, dampaknya apa sih menurut kamu?",
      a: "Bisa bikin orang ikutan nyoblos lebih banyak",
      b: "Bisa bikin politik jadi kurang stabil",
      c: "Bisa nambah kepercayaan sama pemerintah",
      d: "Nggak punya dampak yang berarti ",
      correct: "d"
    },
    {
      question: "Kamu lebih ke arah cuek gitu sama pemilu, ya?",
      a: "Iya, soalnya kurang tertarik",
      b: "Enggak ada bedanya sama generasi lain",
      c: "Enggak, malah suka ikut campur",
      d: "Tergantung hal-hal tertentu",
      correct: "a"
    },
    {
      question: "Media sosial berpengaruh gak buat kamu ikutan pemilu 2024?",
      a: "Bikin aku lebih aktif nyoblos",
      b: "Malah bikin males ikutan pemilu",
      c: "Gak ada pengaruh yang kentara",
      d: "Bergantung pada isinya di media sosial",
      correct: "d"
    },
    {
      question: "Pernah nggak, sih, baca aturan main soal cara pemilihan umum?",
      a: "Udah banget, sampai hafal semuanya",
      b: "Iya sih, tapi masih agak bingung",
      c: "Nggak pernah, soalnya ribet",
      correct: "b"
    },
  ];

  const quiz = document.getElementById("quiz");
  const answerElements = document.querySelectorAll(".answer");
  const questionElement = document.getElementById("question");
  const a_text = document.getElementById("a_text");
  const b_text = document.getElementById("b_text");
  const c_text = document.getElementById("c_text");
  const d_text = document.getElementById("d_text");
  const status = document.getElementById("jawaban-benar");
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
    if(currentQuizData.d == null){
        d_text.remove();
        d.remove();
    }
    else {
        d_text.innerText = currentQuizData.d;
    }
  };

  loadQuiz();

  submitButton.addEventListener("click", () => {
    const answer = getSelected();
    if (answer) {
      if (answer === quizData[currentQuiz].correct) {
        score += 20;
      }

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

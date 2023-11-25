<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kuis</title>
  <script src="https://kit.fontawesome.com/b91379b65b.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="./js-brands.svg" type="image/x-icon">
  <link rel="stylesheet" href="{{ URL::asset('css/kuis.css'); }} ">
</head>

<body>
  <div class="quiz-container" id="quiz">
    <div class="quiz-header">
      <h2 id="question">Question is loading...</h2>
      <ul>
        <li>
          <input type="radio" name="answer" id="a" class="answer" />
          <label for="a" id="a_text">Answer...</label>
        </li>
        <li>
          <input type="radio" name="answer" id="b" class="answer" />
          <label for="b" id="b_text">Answer...</label>
        </li>
        <li>
          <input type="radio" name="answer" id="c" class="answer" />
          <label for="c" id="c_text">Answer...</label>
        </li>
        <li>
          <input type="radio" name="answer" id="d" class="answer" />
          <label for="d" id="d_text">Answer...</label>
        </li>
      </ul>
    </div>
    <button id="submit">Selanjutnya</button>
  </div>
  <script src="{{ URL::asset('js/kuis.js'); }} "></script>
</body>

</html>

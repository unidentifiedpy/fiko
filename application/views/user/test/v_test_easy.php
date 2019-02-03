<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head> 
<body style="background-image: url( '/images/peny.jpg'); opacity: 0.80"> 
    <div id="container">
        <div id="start">Start Quiz!</div>
        <div id="quiz" style="display: none">
            <div id="question"></div>
            <div id="qImg"></div>
            <div id="choices">
                <div class="choice" id="A" 
                onclick="checkAnswer('A')"></div>
                <div class="choice" id="B" 
                onclick="checkAnswer('B')"></div>
                <div class="choice" id="C" 
                onclick="checkAnswer('C')"></div>
                <div class="choice" id="D" 
                onclick="checkAnswer('D')"></div>
            </div>
            <div id="timer">
                <div id="counter"></div>
                <div id="btimeGauge"></div>
                <div id="timeGauge"></div>
            </div>
            <div id="progress"></div>
        </div>
        <div id="scoreContainer" style="display: none"></div>
        <script src="<?= base_url() ?>assets/js/quiz.js"></script>
    </div>
</body>
</html>
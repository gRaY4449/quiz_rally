<?php
$answer_5 = '';
$score = $_GET['score'];
$err_msg = '';
$score_5 = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answer_5 = $_POST['answer_5'];

    if (empty($answer_5)) {
        $err_msg = '※Please enter your answer※';
    } elseif ($answer_5 === 'よしつね') {
        $score_5 = 1;
        $score++;
        header('Location: question_6.php?score=' . $score);
        exit;
    } else {
        header('Location:question_6.php?score=' . $score);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_apP</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg">
    <div class="map_like_flame">
        <h1 class="center">Question_5</h1>
        <form action="" method="POST">
            <?php if ($err_msg) : ?>
                <ul class="">
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>

            <p class="center">下の図を見て答えを平仮名で入力せよ</p><br>
            <img src="images/que5.png" alt="" class="que_imgs"><br>

            <div class="center">
                <label for="">Answer:</label>
                <input type="text" name="answer_5" class="input_flame"><br><br>
                <input type="submit" value="send" class="send_button">
            </div>
        </form><br>

        <div class="D" id="hint_btn">Hint</div>
        <div class="E center" id="hint">1,Aを使った四つの熟語のAの読み方はすべて同じ<br>2,読+Bでは難しい為、他の漢字で考えよ<br>なお、読+B以外の熟語のBの読み方は同じ</div>

        <br><br><br><br><br><br>

        <footer>
            <h3>correct:<?= $score ?></h3>
            <a href="map.php">MAP</a>
        </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/down.js"></script>

</body>

</html>

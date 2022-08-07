<?php
$answer_6 = '';
$score = $_GET['score'];
$err_msg = '';
$score_6 = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answer_6 = $_POST['answer_6'];

    if (empty($answer_6)) {
        $err_msg = '※Please enter your answer※';
    } elseif ($answer_6 === 'おうしゅう') {
        $score_6 = 1;
        $score++;
        header('Location: question_7.php?score=' . $score);
        exit;
    } else {
        header('Location:question_7.php?score=' . $score);
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
        <h1 class="center">問題6</h1>
        <form action="" method="POST">
            <?php if ($err_msg) : ?>
                <ul class="">
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>

            <p class="center">下の文字を数字変換して答えを平仮名で入力せよ</p><br>
            <img src="images/que6.png" alt="" class="que_imgs"><br>

            <div class="center">
                <label for="">解答:</label>
                <input type="text" name="answer_6" class="input_flame"><br><br>
                <input type="submit" value="send" class="send_button">
            </div>
        </form><br>

        <div class="D" id="hint_btn">ヒント</div>
        <div class="E center" id="hint">無し!!</div>

        <br><br><br><br><br><br>

        <footer>
            <h3>正解数:<?= $score ?></h3>
            <a href="map.php">MAP</a>
        </footer>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/down.js"></script>

</body>

</html>

<?php

// 関数ファイルを読み込む
require_once __DIR__ . '/common/functions.php';

$answer_7 = '';
$score = $_GET['score'];
$err_msg = '';
$score_7 = 0;
$correct_per = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answer_7 = $_POST['answer_7'];

    if (empty($answer_7)) {
        $err_msg = '※Please enter your answer※';
    } elseif ($answer_7 === 'ちゅうそんじ') {
        $score_7 = 1;
        $score++;
        insert_score($score);
        $correct_per = $score * 100 / 7;
        if ($correct_per >= 70) {
            header('Location:goal_1.php?score=' . $score);
            exit;
        } else {
            header('Location:goal_2.php?score=' . $score);
            exit;
        }
    } else {
        insert_score($score);
        $correct_per = $score * 100 / 7;
        if ($correct_per >= 70) {
            header('Location:goal_1.php?score=' . $score);
            exit;
        } else {
            header('Location:goal_2.php?score=' . $score);
            exit;
        }
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

<body>
    <h1 class="center">問題7</h1>
    <form action="" method="POST">
        <?php if ($err_msg) : ?>
            <ul class="">
                <li><?= $err_msg ?></li>
            </ul>
        <?php endif; ?>

        <p class="center">下の文字を見て答えを平仮名で入力せよ</p><br>
        <img src="images/que7.png" alt="" class="que_imgs"><br>

        <div class="center">
            <label for="">解答:</label>
            <input type="text" name="answer_7" class="input_flame"><br><br>
            <input type="submit" value="send" class="send_button">
        </div>
    </form>

    <footer>
        <h3>正解数:<?= $score ?></h3>
        <a href="map.php">MAP</a>
    </footer>


</body>

</html>

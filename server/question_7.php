<?php
$answer_7 = '';
$score = $_GET['score'];
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answer_7 = $_POST['answer_7'];

    if (empty($answer_7)) {
        $err_msg = '※Please enter your answer※';
    } elseif ($answer_7 === 'ちゅうそんじ') {
        $score++;
        header('Location:goal.php?score=' . $score);
        exit;
    } else {
        header('Location:goal.php?score=' . $score);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<?php include_once __DIR__ . '/_head.php' ?>

<body>
    <h1 class="center">Question_7</h1>
    <form action="" method="POST">
        <?php if ($err_msg) : ?>
            <ul class="">
                <li><?= $err_msg ?></li>
            </ul>
        <?php endif; ?>

        <p class="center">下の文字を見て答えを平仮名で入力せよ</p><br>
        <img src="images/que7.png" alt="" class="que_imgs"><br>

        <div class="center">
            <label for="">Answer:</label>
            <input type="text" name="answer_7"><br><br>
            <input type="submit" value="send">
        </div>
    </form>

    <footer>
        <h3>correct:<?= $score ?></h3>
        <a href="map.php">MAP</a>
    </footer>


</body>

</html>

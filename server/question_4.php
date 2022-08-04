<?php
$answer_4 = '';
$score = $_GET['score'];
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answer_4 = $_POST['answer_4'];

    if (empty($answer_4)) {
        $err_msg = '※Please enter your answer※';
    } elseif ($answer_4 === 'だいもんじ') {
        $score++;
        header('Location: question_5.php?score=' . $score);
        exit;
    } else {
        header('Location:question_5.php?score=' . $score);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<?php include_once __DIR__ . '/_head.php' ?>

<body>
    <h1 class="center">Question_4</h1>
    <form action="" method="POST">
        <?php if ($err_msg) : ?>
            <ul class="">
                <li><?= $err_msg ?></li>
            </ul>
        <?php endif; ?>

        <p class="center">下の絵を見て答えを平仮名で入力せよ</p><br>
        <img src="images/que4.png" alt="" class="que_imgs"><br>

        <div class="center">
            <label for="">Answer:</label>
            <input type="text" name="answer_4"><br><br>
            <input type="submit" value="send">
        </div>
    </form>

    <footer>
        <h3>correct:<?= $score ?></h3>
        <a href="map.php">MAP</a>
    </footer>


</body>

</html>
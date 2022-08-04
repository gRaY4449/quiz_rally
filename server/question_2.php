<?php
$answer_2 = '';
$err_msg = '';
$score = $_GET['score'];

if (empty($score)) {
    $score = 0;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answer_2 = $_POST['answer_2'];

    if (empty($answer_2)) {
        $err_msg = '※Please enter your answer※';
    } elseif ($answer_2 === 'きたかみがわ') {
        $score++;
        header('Location: question_3.php?score=' . $score);
        exit;
    } else {
        header('Location:question_3.php?score=' . $score);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<?php include_once __DIR__ . '/_head.php' ?>

<body>
    <h1 class="center">Question_2</h1>
    <form action="" method="POST">
        <form action="" method="POST">
            <?php if ($err_msg) : ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>

            <p class="center">下の図を見て答えを平仮名で入力せよ</p><br>
            <img src="images/que2.png" alt="" class="que_imgs"><br>

            <div class="center">
                <label for="">Answer:</label>
                <input type="text" name="answer_2"><br><br>
                <input type="submit" value="send">
            </div>
        </form>

        <footer>
            <h3>correct:<?= $score ?></h3>
            <a href="map.php">MAP</a>
        </footer>


</body>

</html>

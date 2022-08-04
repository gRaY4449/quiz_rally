<?php
$answer_1 = '';
$score = 0;
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answer_1 = $_POST['answer_1'];

    if (empty($answer_1)) {
        $err_msg = '※Please enter your answer※';
    } elseif ($answer_1 === 'わんこそば') {
        $score++;
        header('Location: question_2.php?score=' . $score);
        exit;
    } else {
        header('Location:question_2.php?score=' . $score);
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
    <script src="js/down.js"></script>
</head>

<body class="bg">
    <div class="map_like_flame">
        <h1 class="center">Question_1</h1>
        <form action="" method="POST">
            <?php if ($err_msg) : ?>
                <ul class="">
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>

            <p class="center">下の絵を見て答えを平仮名で入力せよ</p><br><br>
            <div class="container"><img src="images/que1.png" alt="" class="que_imgs"><br></div>

            <div class="center">
                <label for="">Answer:</label>
                <input type="text" name="answer_1" class="input_flame" placeholder="答えは分かったかこの野郎"><br><br>
                <input type="submit" value="send" class="send_button">
            </div>
        </form><br>

        <div class="D">Hint</div>
        <div class="E">これが表示/非表示</div>
        
        <footer>
            <h3>correct:<?= $score ?></h3>
            <a href="map.php">MAP</a>
        </footer>

        <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, aut fuga officiis laborum praesentium aliquid ratione ullam atque! Nemo, reiciendis et maxime possimus ab optio. Qui pariatur tempora et aperiam!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, aut fuga officiis laborum praesentium aliquid ratione ullam atque! Nemo, reiciendis et maxime possimus ab optio. Qui pariatur tempora et aperiam!</p>

    </div>

</body>

</html>

<?php
$score = $_GET['score'];
$score_per = round($score * 100 / 7);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1 class="center">終了</h1>
    <h2 class="center">おめでとうございます!</h2>
    <h2 class="center">あなたの点数は<br><div class="score"><?= $score_per ?></div><br>点です。</h2>

    <div class="center">
        <p>お疲れさまでした。<br>そしてご参加いただきありがとうございました。<br>下記にてfollow及び感想をtweetしていただけますと平泉町から豪華景品が当たるかも?!</p>
        <div id="twitter_hashtag_button">
            <a href="https://twitter.com/intent/tweet?button_hashtag=平泉&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-show-count="false" data-size="large">Tweet #平泉</a>
        </div>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script><br>
    </div>

</body>

</html>

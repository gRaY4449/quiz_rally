<?php

// 関数ファイルを読み込む
// require_once __DIR__ . '/common/functions.php';

// データベースに接続
// $dbh = connect_db();

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
    <div class="map_wrapper">
        <div class="location_choices">
            <a href="map.php" class="location_choice">to 中尊寺</a><br>
            <?php for ($i = 1; $i <= 7; $i++) : ?>
                <a href="" class="location_choice">location<?= $i ?></a><br>
            <?php endfor ?>
        </div>

        <iframe src="https://www.google.com/maps/d/embed?mid=1URpzJ3aZalmnewDvW9WMjYg0BvobSxE&ehbc=2E312F" class="map_1"></iframe>
    </div>
    <?php include_once __DIR__ . '/_footer.php' ?>

</body>

</html>

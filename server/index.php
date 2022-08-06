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
    <header class="center page_header2">
        <p>Please choice a direction</p>
    </header>
    <div class="map_wrapper">
        <div class="location_choices">
            <a href="map.php" class="location_choice">to 中尊寺</a><br>
            <a href="" class="location_choice">to 毛越寺</a><br>
            <a href="" class="location_choice">to 金鶏山</a><br>
            <a href="" class="location_choice">to 観自在王院跡</a><br>
            <a href="" class="location_choice">to 無量光院跡</a><br>
            <a href="" class="location_choice">to 柳之御所遺跡</a><br>
            <a href="" class="location_choice">to 白鳥舘遺跡</a><br>
            <a href="" class="location_choice">to 長者ヶ原廃寺跡</a><br>
            <a href="" class="location_choice">to 達谷窟</a><br>
            <a href="" class="location_choice">to 骨寺村荘園遺跡</a><br>
        </div>

        <iframe src="https://www.google.com/maps/d/embed?mid=1URpzJ3aZalmnewDvW9WMjYg0BvobSxE&ehbc=2E312F" class="map_1"></iframe>
    </div>
    <?php include_once __DIR__ . '/_footer.php' ?>

</body>

</html>

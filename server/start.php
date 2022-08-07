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

<body class="title_page">
    <div class="center">
        <img src="images/title.png" alt="" class="app_title">

        <br><br>

        <img src="images/title_2.png" alt="" class="img_1">
    </div>


    <div class='center start_button'>
        <a href="index.php" class="start_button_2">START</a>
    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="js/jquery.bgswitcher.js"></script>
    <script>
        jQuery(function($) {
            $('.bg-slider').bgSwitcher({
                interval: 1000,
                images: ['images/bg.jpg', 'images/bg2.jpg', 'images/bg3.jpg'], // 切り替える背景画像を指定
            });
        });
    </script>
</body>

</html>

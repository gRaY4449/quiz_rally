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
    <header>
        <h1 class="page_header">中尊寺への道</h1>
        <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
    </header>
    <div class="map_wrapper">
        <div class="ques">
            <?php for($i=1;$i<=7;$i++): ?>
                <a href="/question_<?=$i?>.php" class="que">Q<?=$i?></a><br>
            <?php endfor ?>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m64!1m12!1m3!1d12403.665627406404!2d141.10330597491898!3d38.994404150037475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m49!3e2!4m5!1s0x5f88ce053535d145%3A0x5c34e4d4b252f13e!2z5q-b6LaK5a-6KOOCguOBhuOBpOOBhuOBmCk!3m2!1d38.9879026!2d141.1078613!4m5!1s0x5f88ce107478477f%3A0x2032a5d68442539f!2z6Kaz6Ieq5Zyo546L6Zmi6Leh!3m2!1d38.9885075!2d141.1104661!4m5!1s0x5f88cf60a08ef8f5%3A0xbaa24825f417e0f6!2z5pel5ZCJ55m95bGx56We56S-!3m2!1d38.9905529!2d141.1154396!4m5!1s0x5f88ce114c75458b%3A0x8c20c485dd27dfc1!2z5bmz5rOJ6aeF!3m2!1d38.988269599999995!2d141.11772299999998!4m5!1s0x5f88ce132eb55cb7%3A0x4e373ba3500d59b9!2z6YGT44Gu6aeFIOW5s-aziQ!3m2!1d38.991509799999996!2d141.1215255!4m5!1s0x5f88ce12cb557601%3A0x4b5bc44e2d7442c2!2z5p-z5LmL5b6h5omA6YG66Leh!3m2!1d38.9934496!2d141.11949909999998!4m5!1s0x5f88ce74cec4382d%3A0x7369ba429e596774!2z6auY6aSo576p57WM5aCC!3m2!1d38.9972844!2d141.1135266!4m5!1s0x5f88cde73dc30bb5%3A0xeaf1470e739e8281!2z5Lit5bCK5a-6!3m2!1d39.001735499999995!2d141.102596!5e0!3m2!1sja!2sus!4v1659344322029!5m2!1sja!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <?php include_once __DIR__ . '/_footer.php' ?>

</body>

</html>

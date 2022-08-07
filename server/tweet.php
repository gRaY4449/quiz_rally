<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_apP</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="javascript" href=container.jp>
</head>

<body class="tweet_bg">
    <br><br><br><br><br><br><br><br><br><br>

    <div class="center">
        <img src="images/logo.png" alt="" class="logo">
    </div>

    <br><br><br><br>

    <p class="center order">tweetしてからご参加下さい。</p>

    <div class="center">
        <div id="twitter_hashtag_button">
            <a href="https://twitter.com/intent/tweet?button_hashtag=平泉&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-show-count="false" data-size="large">Tweet #平泉</a>
        </div>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script><br>
    </div>

    <div class="container">
        <form action="start.php">
            <p class="center">
                <input type="checkbox" id="consent-chk" name="consent-chk">
                <label for="consent-chk" class="tweet_comment">tweet完了</label>
            </p>
            <p class="center"><input type="submit" value="参加" disabled class="send_button_2"></p>
        </form>
    </div>

    <br><br><br><br>

    <script>
        const consent_chk = document.querySelector(`#consent-chk`);
        const submit_btn = document.querySelector(`input[type=submit]`);
        consent_chk.addEventListener('change', () => {
            if (consent_chk.checked === true) {
                submit_btn.disabled = false;
            } else {
                submit_btn.disabled = true;
            }
        });
    </script>
</body>

</html>

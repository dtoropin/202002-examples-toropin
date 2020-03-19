<?php
require_once './vendor/autoload.php';

if ($_POST['email'] && $_POST['mess']) {
    $mailTo = htmlentities(trim($_POST['email']));
    $messages = htmlentities(trim($_POST['mess']));

    $send = new \src\Email_Send();
    $send->send($mailTo, $messages);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .wrapper{height:100vh;max-width:500px;width:90%;margin:0 auto;display:flex;flex-direction:column;justify-content:center;align-items:center;font-family:Arial,sans-serif}.images{display:flex;justify-content:space-between;align-items:center;padding-bottom:10px;margin-bottom:10px;border-bottom:1px solid #5e5e5e}.images__item{display:block;width:49%}.images__pic{width:100%;height:auto}.form{width:100%}.form__item{display:block}.form__input{width:100%;padding:7px 10px;margin:0 0 10px;font-family:inherit;font-size:inherit;font-weight:inherit;outline:none;box-sizing:border-box;resize:none;border:1px solid #ccc;box-shadow:1px 2px 3px #ccc;border-radius:5px}.form__input:focus{border:1px solid #df7497}.form__btn{padding:5px 27px;border-radius:5px;outline:none;text-transform:uppercase}
    </style>
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <div class="images">
        <div class="images__item">
            Origin image..
            <img src="img/GoOCWBNqwTI.jpg" alt="pic" class="images__pic">
        </div>
        <div class="images__item">
            <img src="src/changeImg.php" alt="resize pic" class="images__pic">
        </div>
    </div>
    <form class="form" method="post">
        <label for="" class="form__item">
            <input class="form__input" type="email" name="email" placeholder="Email to.." autofocus required>
        </label>
        <label for="" class="form__item">
            <textarea class="form__input" name="mess" rows="7" placeholder="Your message text.." required></textarea>
        </label>
        <button class="form__btn" type="submit">Send</button>
    </form>
</div>
</body>
</html>
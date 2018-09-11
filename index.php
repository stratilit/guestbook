<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-1</title>
</head>
<body>
<h1>Гостевая книга</h1>

<?php
include __DIR__ . '/functions.php';
$psth = __DIR__ . '/data.txt';

foreach (readOfDataGust($psth) as $item) {
    echo $item . '<br>';
}

var_dump(readOfDataGust($psth));
?>

<form action="upload.php" method="post" name="gost">
    Ими пользователя: <input name="user" type="text" title=""><br>
    <p>Ваш отзыв:</p>
    <textarea name="comment" cols="60" rows="5" title=""></textarea> <br>
    <button type="submit">Отправить</button>
</form>

</body>
</html>
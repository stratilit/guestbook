<?php
session_start();
require __DIR__ . '/classes/GuestBook.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
</head>
<body>
<h1>Гостевая книга</h1>

<?php

$path = __DIR__ . '/data.txt';

$guest = new GuestBook($path);

foreach ($guest->getData() as $item) {
    echo $item . '<br>';
}



?>

<br>
<br>
<br>

<form action="upload.php" method="post" name="gost">
    Ими пользователя: <input name="user" type="text" title=""> <br>
    <p>Ваш отзыв:</p>
    <textarea name="comment" cols="60" rows="5" title=""> </textarea> <br>
    <button type="submit">Отправить</button>
</form>


</body>
</html>
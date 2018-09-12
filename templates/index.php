<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
</head>
<body>
<h1><?php echo $title; ?></h1>

<?php foreach ($guestBook->getRecords() as $record) { ?>
        <article style="border: 1px dotted darkgrey; margin-bottom: 20px;" >
            <?php echo $record-> getMessage(); ?>
        </article>
   <?php } ?>


    <hr>

<form action="/append.php" method="post">
    Ими пользователя: <input name="user" type="text" title=""> <br>
    <p>Ваш отзыв:</p>
    <textarea name="message" cols="60" rows="5" title=""> </textarea> <br>
    <button type="submit">Отправить</button>
</form>

<hr>
<br>

<a href="news.php">Новости</a>

</body>
</html>
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

<?php
$i = '0';

foreach ($news->getRecords() as $record) { ?>
        <article style="border: 1px dotted darkgrey; margin-bottom: 20px;" >
            <?php echo '<a href="article.php?id='.$i.'">'.$record.'</a>'; ?>
        </article>
   <?php $i++; } ?>




</body>
</html>
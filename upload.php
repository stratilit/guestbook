<?php
include __DIR__ . '/functions.php';
$path = __DIR__.'/data.txt';

$name = $_POST['user'] ?? 'Anonim';
$comment1 = str_replace(array("\r", "\n"), " ", $_POST['comment']) ?? null;

$data = readOfDataGust($path);
$data[] =  $name.': '.$comment1;
$line = implode(PHP_EOL,$data);

file_put_contents($path, $line);

echo  '<br>';

header('Location: index.php');
exit();


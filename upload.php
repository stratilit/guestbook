<?php
session_start();
require __DIR__ . '/classes/GuestBook.php';


// Добавление записей гостевой книги
$path = __DIR__ . '/data.txt';
$guest = new GuestBook($path);
$name = $_POST['user'] ?? null;

if (null != $name) {
    $guest->append($name . ': ' . $_POST['comment']);
    $guest->save();

}

header('Location: /');
exit();





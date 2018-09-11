<?php
session_start();
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/GuestBookRecord.php';


$guest = new GuestBook();

$name = $_POST['user'] ?? null;

if (null != $name) {
    $record = new GuestBookRecord($name . ': ' . $_POST['message']);
    $guest->append($record)->save();
}

header('Location: /');
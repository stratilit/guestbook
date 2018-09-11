<?php
session_start();

require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/View.php';


$guestBook = new GuestBook();

$view = new View();


$view->assign('guestBook', $guestBook);
//$view->assign('user', $user);
//$view->assign('news', $news->getLast(10));


$view->display(__DIR__ . '/templates/index.php');

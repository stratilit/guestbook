<?php
session_start();
require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/classes/View.php';


$news = new News();

$view = new View();


$view->assign('news', $news);
$view->assign('title', 'Новости');

$view->display(__DIR__ . '/templates/news.php');
<?php
session_start();
require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/classes/View.php';



$news = new News();

$article = $news->getIndex('1');

$view = new View();


$view->assign('article', $article);
$view->assign('title', 'Новость');



$view->display(__DIR__ . '/templates/article.php');

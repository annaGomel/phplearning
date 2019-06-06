<?php
include 'function.php';
include 'db1.php';
$title = 'Главная';

$sqlCategories='SELECT * FROM cathegory';
$sqlLots='SELECT * FROM lots';
$categories=mysqli_query($connection_new, $sqlCategories);
$lots=mysqli_query($connection_new, $sqlLots);

$content = renderTemplate('index.php', ['title'=>$title, 'categories'=>$categories, 'lots'=>$lots]);
$layout = renderTemplate('layout.php',['title'=> $title,  'content'=>$content]);
print($layout);




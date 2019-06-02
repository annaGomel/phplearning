<?php
include 'function.php';
include 'db.php';
$title = 'Главная';

$sqlCategories='SELECT * FROM cathegory';
$sqlLots='SELECT * FROM lots';
$categories=mysqli_query($connection, $sqlCategories);
$lots=mysqli_query($connection, $sqlLots);

$content = renderTemplate('index.php', ['title'=>$title, 'categories'=>$categories, 'lots'=>$lots]);
$layout = renderTemplate('layout.php',['title'=> $title, 'names'=> $names, 'content'=>$content]);
print($layout);




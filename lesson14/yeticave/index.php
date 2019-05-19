<?php
include 'function.php';
include 'db.php';
$title = 'Главная';

$sql='SELECT * FROM categories';
$result=mysqli_query($connection, $sql);

$content = renderTemplate('index.php', ['title'=>$title, 'categories'=>$categories]);
$layout = renderTemplate('layout.php',['title'=> $title, 'names'=> $names, 'content'=>$content]);
print($layout);




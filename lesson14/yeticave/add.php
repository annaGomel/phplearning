<?php
include 'function.php';
include 'db1.php';
$title = 'Добавление Лота';

$sqlCategories='SELECT * FROM cathegory';
$categories=mysqli_query($connection_new, $sqlCategories);
// Вывод страницы добавления   экипировки
if(isset($_GET['create'])) {
    $content = renderTemplate('add.php', ['title'=>$title, 'categories'=>$categories,]);
    $layout = renderTemplate('layout.php',['title'=> $title,  'content'=>$content]);
    print($layout);

}

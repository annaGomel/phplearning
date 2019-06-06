<?php
include 'function.php';
include 'db1.php';
$title = 'Добавление Лота';

$sqlCategories='SELECT * FROM cathegory';
$categories=mysqli_query($connection_new, $sqlCategories);

if(isset($_GET['create'])) {
    $content = renderTemplate('add.php', ['title'=>$title, 'categories'=>$categories,]);
    $layout = renderTemplate('layout.php',['title'=> $title,  'content'=>$content]);
    print($layout);

}


if(isset($_POST['save'])) {

    $lot_name = htmlspecialchars($_POST['lot_name']);
    $category_id = htmlspecialchars($_POST['category_id']);
    $lot_description = htmlspecialchars($_POST['lot_description']);
    $lot_picture = htmlspecialchars($_POST['lot_picture']);
    $start_price  = htmlspecialchars($_POST['start_price']);
    $staf_step = htmlspecialchars($_POST['staf_step']);
    $lot_end_date = htmlspecialchars($_POST['lot_end_date']);

    $sql_create = "INSERT INTO lots(title, description, picture,start_price,staf_step,category_id,create_date,end_date) VALUES ('{$lot_name}', '{$lot_description}', '{$lot_picture}', '{$start_price}', '{$staf_step}', '{$category_id}', now(),'{$lot_end_date}')";
    $create_result = mysqli_query($connection_new, $sql_create);
    confirmQuery($create_result);

    $sqlLots='SELECT * FROM lots';
    $lots=mysqli_query($connection_new, $sqlLots);

    $content = renderTemplate('index.php', ['title'=>$title, 'categories'=>$categories, 'lots'=>$lots]);
    $layout = renderTemplate('layout.php',['title'=> $title,  'content'=>$content]);
    print($layout);
}



<?php
include 'function.php';
include 'db1.php';
$title = 'Лот';


$sqlCategories='SELECT * FROM cathegory';
$categories=mysqli_query($connection_new, $sqlCategories);
$sqlUsers='SELECT * FROM users';
$allUsers=mysqli_query($connection_new, $sqlUsers);

if(isset($_GET['lot_id'])) {
    $id = $_GET['lot_id'];
    $lotSql = "SELECT * FROM lots WHERE id = $id";
    $lotResult = mysqli_query($connection_new, $lotSql);
    if(!$lotResult) {
        echo "Запрос не удался";
    }
    $lot = $lotResult->fetch_array();

    $userStafSql = "SELECT * FROM user_staf WHERE lot_id = $id";
    $userStafResult = mysqli_query($connection_new, $userStafSql);
    $countStaf = count($userStafResult->fetch_all(),COUNT_NORMAL);
    if($lot) {
        $content = renderTemplate('lot.php', ['title'=>$title, 'categories'=>$categories, 'allUsers'=>$allUsers, 'lotInfo'=>$lot, 'userStaf'=>$userStafResult,'countStaf'=>$countStaf]);
        $layout = renderTemplate('layout.php',['title'=> $title, 'content'=>$content]);
    }else{
        $content = renderTemplate('404.php', ['title'=>$title, 'categories'=>$categories, 'lotInfo'=>$lot]);
        $layout = renderTemplate('layout.php',['title'=> $title, 'content'=>$content]);
    }

} else{
    $content = renderTemplate('404.php', ['title'=>$title, 'categories'=>$categories]);
    $layout = renderTemplate('layout.php',['title'=> $title, 'content'=>$content]);
}


   print($layout);


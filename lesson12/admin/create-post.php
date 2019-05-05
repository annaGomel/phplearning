<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 02.05.2019
 * Time: 20:37
 */
?>
1<?php

include "../includes/db.php";
include "includes/header.php";
include "includes/nav.php";
include "functions.php";

?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Старница управления постами
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>
                        <a href="">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Blank Page
                    </li>
                </ol>
            </div>
            <div class="col-md-12">
                <div>title</div>
                <form action="" method="post">
                    <input type="text" name="title">
                <div>content</div>
                    <input type="text" name="content">
                <div>image</div>
                    <input type="text" name="image">
                    <input type="submit" name="store" value="Создать">
                </form>

            </div>

        </div>

        <?php
        if(isset($_GET['create'])) {?>
        <form action="" method="post">

            <input type="text" name="title" class="form-control">
            <input type="text" name="content" class="form-control">
            <input type="text" name="image" class="form-control">

        </form>

       <?php } ?>


        <?php
        if(isset($_POST['store'])) {


         $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $image = htmlspecialchars($_POST['image']);

        $sql_create = "INSERT INTO posts(title, content, image, created_at) VALUES ('{$title}', '{$content}', '{$image}', now())";
        $create_result = mysqli_query($connection, $sql_create);
        confirmQuery($create_result);

        }

        if(isset($_GET['update'])) {
        $cat_id = $_GET['update'];
        $sql_one_cat = "SELECT * FROM categories WHERE id = $cat_id";
        $result_one_cat = mysqli_query($connection, $sql_one_cat);
        confirmQuery($result_one_cat);

        foreach ($result_one_cat as $posts): ?>
        <form action="" method="post">
            <input type="hidden"
                   name="id"
                   class="form-control"
                   value="<?=$posts['id']?>">
            <input type="text"
                   name="title"
                   class="form-control"
                   value="<?=$posts['title']?>">
            <input type="text"
                   name="content" class="form-control"
                   value="<?=$posts['content']?>">
            <input type="text"
                   name="image"
                   class="form-control"
                   value="<?=$posts['image']?>">
            <input type="submit" class="btn btn-success" name="update" value="Редактировать">
        </form>

        <?php
        endforeach;
        }
        ?>

        <?php
        if(isset($_POST['update'])) {
            $id = htmlspecialchars($_POST['id']);
            $title = htmlspecialchars($_POST['title']);
            $content = htmlspecialchars($_POST['content']);
            $image = htmlspecialchars($_POST['image']);

            $update_sql = "UPDATE posts SET title='{$title}', content='{$content}', image='{$image}' WHERE id = $id";
            $upd_result = mysqli_query($connection, $update_sql);
            confirmQuery($upd_result);
        }

        ?>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<!-- /#wrapper -->

<?php
include "includes/footer.php";
?>

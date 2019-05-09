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
                    Страница управления постами
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

            <?php

            if(isset($_GET['delete'])) {
                $post_id = $_GET['delete'];

                $delete_sql = "DELETE FROM posts WHERE id = $post_id LIMIT 1";
                $del_result = mysqli_query($connection, $delete_sql);
                if(!$del_result) {
                    echo "Запрос не удался";
                } else {
                    echo "Пост удален";
                }
            }


            ?>

            <div class="col-md-12"><a href="posts.php?create" class="btn btn-success">Создать пост</a>
                <?php

                if(isset($_GET['create'])) {?>
                    <form action="" method="post">

                        <input type="text" name="title" class="form-control">
                        <input type="text" name="content" class="form-control">
                        <input type="text" name="image" class="form-control">
                        <input type="submit" name="store" value="Создать">
                    </form>

                    <?
                }
                if(isset($_POST['store'])) {

                    $title = htmlspecialchars($_POST['title']);
                    $content = htmlspecialchars($_POST['content']);
                    $image = htmlspecialchars($_POST['image']);

                    $sql_create = "INSERT INTO posts(title, content, image, created_at) VALUES ('{$title}', '{$content}', '{$image}', now())";
                    $create_result = mysqli_query($connection, $sql_create);
                    confirmQuery($create_result);

                }

                if(isset($_GET['update'])) {

                    $post_id = $_GET['update'];
                    $sql_one_post = "SELECT * FROM posts WHERE id = $post_id";
                    $result_one_post = mysqli_query($connection, $sql_one_post);
                    confirmQuery($result_one_post);

                    foreach ($result_one_post as $posts): ?>

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
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>content</th>
                        <th>image</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $sql = "SELECT * FROM posts";
                    $result = mysqli_query($connection, $sql);
                    confirmQuery($result);
                    foreach ($result as $posts) :

                        ?>

                        <tr>
                            <td><?=$posts['id']?></td>
                            <td><?=$posts['title']?></td>
                            <td><?=$posts['content']?></td>
                            <td><?=$posts['image']?></td>
                            <td>
                                <a href="posts.php?update=<?=$posts['id']?>" class="btn btn-primary">Редактировать</a>
                                <a
                                        href="posts.php?delete=<?=$posts['id']?>"
                                        class="btn btn-danger"
                                        onclick="return confirm('Вы уверены?')"
                                >Удалить</a>
                            </td>
                        </tr>





                    <?php endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
                    <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php
include "includes/footer.php";
?>

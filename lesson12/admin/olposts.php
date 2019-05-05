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

            <div class="col-md-12"><a href="create-post.php" class="btn btn-success">Создать пост</a>

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
                                <a href="olposts.php?update=<?=$posts['id']?>" class="btn btn-primary">Редактировать</a>
                                <a
                                        href="olposts.php?delete=<?=$posts['id']?>"
                                        class="btn btn-danger"
                                        onclick="return confirm('Вы уверены?')"
                                >Удалить</a>
                            </td>
                        </tr>

                    <?php endforeach;?>
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

<?php

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
                    Старница управления категориями
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
            <div class="col-md-6">
                <?php


                    if(isset($_GET['delete'])) {
                        $cat_id = $_GET['delete'];

                        $delete_sql = "DELETE FROM categories WHERE id = $cat_id LIMIT 1";
                        $del_result = mysqli_query($connection, $delete_sql);
                        if(!$del_result) {
                            echo "Запрос не удался";
                        } else {
                            echo "Категория удалена";
                        }
                    }


                ?>
                <a href="categories.php?create" class="btn btn-success">Создать категорию</a>
                <?php

                if(isset($_GET['create'])) {?>
                    <form action="" method="post">
                        <input type="text" name="name" class="form-control">
                        <input type="text" name="code" class="form-control">
                        <input type="submit" name="store" value="Создать">
                    </form>

                <?
                }
                if(isset($_POST['store'])) {
                    $name = htmlspecialchars($_POST['name']);
                    $code = htmlspecialchars($_POST['code']);

                    $sql_create = "INSERT INTO caregories(name, code) VALUES ('{$name}', '{$code}')";
                    $create_result = mysqli_query($connection, $sql_create);
                    confirmQuery($create_result);

                }

                if(isset($_GET['update'])) {
                    $cat_id = $_GET['update'];
                    $sql_one_cat = "SELECT * FROM categories WHERE id = $cat_id";
                    $result_one_cat = mysqli_query($connection, $sql_one_cat);
                    confirmQuery($result_one_cat);
                    foreach ($result_one_cat as $category): ?>
                        <form action="" method="post">
                            <input type="hidden"
                                   name="id"
                                   class="form-control"
                                   value="<?=$category['id']?>">
                            <input type="text"
                                   name="name"
                                   class="form-control"
                            value="<?=$category['name']?>">
                            <input type="text" name="code" class="form-control"
                                   value="<?=$category['code']?>">
                            <input type="submit" class="btn btn-success" name="update" value="Редактировать">
                        </form>

                <?php
                        endforeach;

                }
                if(isset($_POST['update'])) {
                    $id = htmlspecialchars($_POST['id']);
                    $name = htmlspecialchars($_POST['name']);
                    $code = htmlspecialchars($_POST['code']);

                    $update_sql = "UPDATE categories SET name='{$name}', code='{$code}' WHERE id = $id";
                    $upd_result = mysqli_query($connection, $update_sql);
                    confirmQuery($upd_result);
                }

                ?>
            </div>
            <div class="col-md-6">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Имя</th>
                            <th>Управления</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                        $sql = "SELECT * FROM categories";
                        $result = mysqli_query($connection, $sql);
                        confirmQuery($result);
                        foreach ($result as $category) :

                    ?>

                        <tr>
                            <td><?=$category['id']?></td>
                            <td><?=$category['name']?></td>
                            <td>
                                <a href="categories.php?update=<?=$category['id']?>" class="btn btn-primary">Редактировать</a>
                                <a
                                        href="categories.php?delete=<?=$category['id']?>"
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

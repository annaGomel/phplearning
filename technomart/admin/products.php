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
                    Страница управления продуктами
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
                $product_id = $_GET['delete'];

                $delete_sql = "DELETE FROM products WHERE id = $product_id LIMIT 1";
                $del_result = mysqli_query($connectionTechnomart, $delete_sql);
                if(!$del_result) {
                    echo "Запрос не удался";
                } else {
                    echo "Продукт удален";
                }
            }


            ?>

            <div class="col-md-12"><a href="products.php?create" class="btn btn-success">Создать продукт</a>
                <?php

                if(isset($_GET['create'])) {?>
                    <form action="" method="post">
                        <br>
                        <label>Название</label>
                        <input type="text" name="name" class="form-control">
                        <label>Описание</label>
                        <input type="text" name="description" class="form-control">
                        <label>Цена</label>
                        <input type="text" name="price" class="form-control">
                        <label>Категория</label>
                        <input type="text" name="category_id" class="form-control">
                        <label>Картинка</label>
                        <input type="text" name="image" class="form-control">
                        <input type="submit" name="store" value="Создать">
                    </form>

                    <?php
                }
                if(isset($_POST['store'])) {

                    $name = htmlspecialchars($_POST['name']);
                    $description = htmlspecialchars($_POST['description']);
                    $price = htmlspecialchars($_POST['price']);
                    $category_id = htmlspecialchars($_POST['category_id']);
                    $image = htmlspecialchars($_POST['image']);

                    $sql_create = "INSERT INTO products (name, description, price, category_id, image, create_date, update_date) VALUES ('{$name}', '{$description}','{$price}','{$category_id}', '{$image}', now(), now())";
                    echo  $sql_create;
                    $create_result = mysqli_query($connectionTechnomart, $sql_create);

                    confirmQuery($create_result);

                }

                if(isset($_GET['update'])) {
                    $product_id = $_GET['update'];
                    $sql_one_product = "SELECT * FROM products WHERE id = $product_id";
                    $result_one_product = mysqli_query($connectionTechnomart, $sql_one_product);
                    confirmQuery($result_one_product);

                    foreach ($result_one_product as $product): ?>

                        <form action="" method="post">
                            <input type="hidden"
                                   name="id"
                                   class="form-control"
                                   value="<?=$product['id']?>">
                            <label>Название</label>
                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="<?=$product['name']?>">
                            <label>Описание</label>
                            <input type="text"
                                   name="description" class="form-control"
                                   value="<?=$product['description']?>">
                            <label>Цена</label>
                            <input type="text"
                                   name="price" class="form-control"
                                   value="<?=$product['price']?>">
                            <label>Категория</label>
                            <input type="text"
                                   name="category_id" class="form-control"
                                   value="<?=$product['category_id']?>">
                            <label>Картинка</label>
                            <input type="text"
                                   name="image"
                                   class="form-control"
                                   value="<?=$product['image']?>">
                            <br>
                            <input type="submit" class="btn btn-success" name="save" value="Сохранить">
                        </form>

                    <?php
                    endforeach;
                }

                if(isset($_POST['save'])) {
                    $id = htmlspecialchars($_POST['id']);
                    $name = htmlspecialchars($_POST['name']);
                    $description = htmlspecialchars($_POST['description']);
                    $category_id = htmlspecialchars($_POST['category_id']);
                    $price = htmlspecialchars($_POST['price']);
                    $image = htmlspecialchars($_POST['image']);

                    $update_sql = "UPDATE products SET name='{$name}', description='{$description}',  price='{$price}', category_id='{$category_id}', image='{$image}', update_date=now() WHERE id = $id";
                    $upd_result = mysqli_query($connectionTechnomart, $update_sql);
                    confirmQuery($upd_result);
                }

                ?>

            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Категория</th>
                        <th>Стоимость</th>
                        <th>Дата</th>
                        <th>Картинка</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM products";
                    $result = mysqli_query($connectionTechnomart, $sql);
                    confirmQuery($result);
                    foreach ($result as $product) :

                        ?>

                        <tr>
                            <td><?=$product['id']?></td>
                            <td><?=$product['name']?></td>
                            <td><?=$product['description']?></td>
                            <td><?=$product['category_id']?></td>
                            <td><?=$product['price']?></td>
                            <td><?=$product['update_date']?></td>
                            <td>
                                <img class="img-responsive" src="<?= $product['image']?>" alt="">
                            </td>
                            <td>
                                <a href="products.php?update=<?=$product['id']?>" class="btn btn-primary">Редактировать</a>
                                <a
                                        href="products.php?delete=<?=$product['id']?>"
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

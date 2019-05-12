<?php

    include "includes/db.php";
    include "includes/header.php";
    include "includes/nav.php";

    $getProducts = "SELECT * FROM products";
    $products = mysqli_query($connectionTechnomart, $getProducts);
    if(!$products) {
        echo "Запрос не удался";
    }

?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Каталог товаров
                <small> ...</small>
            </h1>

            <?php

            foreach ($products as $product) :

            ?>
                <p class="lead">
                     <a href="/"> <?= substr($product['name'], 0, 180)?></a>
                </p>
                <p>
                    <span class="glyphicon glyphicon-time"></span>
                    Posted on <?= date('M d, Y', strtotime($product['create_date']))?></p>
                <hr>
                <img class="img-responsive" src="<?= $product['image']?>" alt="">
                <hr>
                <p>
                    <?= substr($product['description'], 0, 500)?>...
                </p>
                <a class="btn btn-primary" href="product.php?post_id=<?= $product['id']?>">
                    Read More <span class="glyphicon glyphicon-chevron-right"></span>
                </a>

                <hr>
            <?php

            endforeach;

            ?>


            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <?php

        include "includes/sidebar.php";

        ?>

    </div>
    <!-- /.row -->
<?php

include "includes/footer.php";

?>
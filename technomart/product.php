<?php

include "includes/db.php";
include "includes/header.php";
include "includes/nav.php";

if(isset($_GET['post_id'])) {
    $id = $_GET['post_id'];
    $productSql = "SELECT * FROM products WHERE id = $id";
    $productResult = mysqli_query($connectionTechnomart, $productSql);
    if(!$productResult) {
        echo "Запрос не удался";
    }
}

?>

    <!-- Page Content -->
    <div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>

            <?php

            foreach ($productResult as $product) :

                ?>
                <h2>
                    <a href="product.php?post_id=<?= $product['id']?>"><?= $product['name']?></a>
                </h2>
                <p class="lead">
                    by <a href="/"><?= $product['description']?></a>
                </p>
                <p>
                    <span class="glyphicon glyphicon-time"></span>
                    Posted on <?= date('M d, Y', strtotime($product['update_date']))?></p>
                <hr>
                <img class="img-responsive" src="<?= $product['image']?>" alt="">
                <hr>
                <p>
                    <?= $product['description']?>
                </p>

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
<?php

include "includes/db.php";
include "includes/header.php";
include "includes/nav.php";

if(isset($_GET['post_id'])) {
    $id = $_GET['post_id'];
    $postSql = "SELECT * FROM posts WHERE id = $id";
    $postsResult = mysqli_query($connection, $postSql);
    if(!$postsResult) {
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

            foreach ($postsResult as $post) :

                ?>
                <h2>
                    <a href="post.php?post_id=<?= $post['id']?>"><?= $post['title']?></a>
                </h2>
                <p class="lead">
                    by <a href="/"><?= $post['author']?></a>
                </p>
                <p>
                    <span class="glyphicon glyphicon-time"></span>
                    Posted on <?= date('M d, Y', strtotime($post['created_at']))?></p>
                <hr>
                <img class="img-responsive" src="<?= $post['image']?>" alt="">
                <hr>
                <p>
                    <?= $post['content']?>
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
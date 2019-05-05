<?php

    include "includes/db.php";
    include "includes/header.php";
    include "includes/nav.php";

    $getPosts = "SELECT * FROM posts LIMIT 3";
    $posts = mysqli_query($connection, $getPosts);
    if(!$posts) {
        echo "Запрос не удался";
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

            foreach ($posts as $post) :

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
                    <?= substr($post['content'], 0, 180)?>...
                </p>
                <a class="btn btn-primary" href="post.php?post_id=<?= $post['id']?>">
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
<?php

    $sql = "SELECT * FROM categories LIMIT 3";
    $result = mysqli_query($connection, $sql);
    if(!$result) {
        echo "Запрос не удался";
    }

?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php

                    foreach ($result as $category) :

                ?>
                <li class="category-<?= $category['code']?>">
                    <a href="category.php?category=<?= $category['id']?>">
                        <?= htmlspecialchars(ucfirst($category['name']))?>
                    </a>
                </li>

                <?php

                    endforeach;

                ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
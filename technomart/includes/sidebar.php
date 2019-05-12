<?php


$getCategories = "SELECT * FROM categories";
$categories= mysqli_query($connectionTechnomart, $getCategories);
if(!$categories) {
    echo "Запрос не удался";
}

?>
<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <div class="input-group">
            <input type="text" class="form-control">
            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
        </div>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Список категорий товаров</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    <?php
                    foreach ($categories as $category) :
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

        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h4>Side Widget Well</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>

</div>
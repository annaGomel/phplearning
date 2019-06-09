<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <!--заполните этот список из массива категорий-->
            <?php foreach ($categories  as $category): ?>
                <li class="promo__item promo__item--<?= $category['code']?>">
                    <a class="promo__link" href="index.php?category=<?= $category['id']?>">
                        <?= htmlspecialchars(ucfirst($category['name']))?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <!--заполните этот список из массива с товарами-->
            <?php foreach ($lots  as $lot): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <a href="lot.php?lot_id=<?= $lot['id']?>">
                        <?php  if ($lot['picture']){?>
                            <img  src="./uploads/<?=$lot['picture'];?>" width="350" height="260" alt="">
                        <?} else {?>
                            <img  src="./img/no-image.jpg" width="350" height="260" alt="">
                        <?}?>

                    </a>
                </div>
                <div class="lot__info">
                    <?php foreach ($categories as $cat) :
                        if($cat['id']==$lot['category_id']) {
                    ?>
                    <span class="lot__category"> <?= htmlspecialchars(ucfirst($cat['name']))?></span>
                    <?php
                        }
                    endforeach; ?>

                    <h3 class="lot__title">
                        <a class="text-link" href="lot.php?lot_id=<?= $lot['id']?>">
                            <?= htmlspecialchars(ucfirst($lot['title']))?>
                        </a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">
                                <?= htmlspecialchars(ucfirst($lot['start_price']))?>
                            </span>
                            <span class="lot__cost">
                                <?= htmlspecialchars(ucfirst($lot['staf_step']))?><b class="rub">р</b>
                            </span>
                        </div>
                        <div class="lot__timer timer">
                            12:23
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>
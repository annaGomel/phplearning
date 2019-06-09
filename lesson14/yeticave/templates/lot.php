 <main>
    <nav class="nav">
      <ul class="nav__list container">

          <?php foreach ($categories  as $category): ?>
              <li class="nav__item">
                  <a class="promo__link"  href="index.php?category=<?= $category['id']?>">
                      <?= htmlspecialchars(ucfirst($category['name']))?>
                  </a>
              </li>
          <?php endforeach; ?>
      </ul>
    </nav>

    <section class="lot-item container">
      <h2> <?= htmlspecialchars(ucfirst($lotInfo['title']))?> </h2>
      <div class="lot-item__content">
        <div class="lot-item__left">
          <div class="lot-item__image">
              <?php  if ($lotInfo['picture']){?>
                  <img  src="./uploads/<?=$lotInfo['picture'];?>" width="730" height="548"alt="<?=$lotInfo['title'];?>">
              <?} else {?>
                  <img  src="./img/no-image.jpg" width="350" height="260" alt="<?=$lotInfo['title'];?>">
              <?}?>

          </div>


          <p class="lot-item__category">Категория:
              <?php foreach ($categories as $cat) :
                  if($cat['id']==$lotInfo['category_id']) {
                      ?>
                      <span class="lot__category"> <?= htmlspecialchars(ucfirst($cat['name']))?></span>
                      <?php
                  }
              endforeach; ?>

          </p>
          <p class="lot-item__description"><?= htmlspecialchars(ucfirst($lotInfo['description']))?></p>
        </div>
        <div class="lot-item__right">
          <div class="lot-item__state">
            <div class="lot-item__timer timer">
                 <?= htmlspecialchars(ucfirst($lotInfo['end_date']))?>
            </div>
            <div class="lot-item__cost-state">
              <div class="lot-item__rate">
                <span class="lot-item__amount">Текущая цена</span>
                <span class="lot-item__cost"><?= htmlspecialchars(ucfirst($lotInfo['start_price']))?></span>
              </div>
              <div class="lot-item__min-cost">
                Мин. ставка <span><?= htmlspecialchars(ucfirst($lotInfo['staf_step']))?></span>
              </div>
            </div>
            <form class="lot-item__form" action="https://echo.htmlacademy.ru" method="post" autocomplete="off">
              <p class="lot-item__form-item form__item form__item--invalid">
                <label for="cost">Ваша ставка</label>
                <input id="cost" type="text" name="cost" placeholder="12 000">
                <span class="form__error">Введите наименование лота</span>
              </p>
              <button type="submit" class="button">Сделать ставку</button>
            </form>
          </div>
          <div class="history">
            <h3>История ставок (<span>  <?= $countStaf?></span>)</h3>
            <table class="history__list">
                <?php foreach ($userStaf  as $staf): ?>
                    <tr class="history__item">
                        <td class="history__name">
                            <?php foreach ($allUsers as $user) :
                                if($user['id']==$staf['user_id']) {  ?>
                                    <?= htmlspecialchars(ucfirst($user['name']))?>
                             <?php   }   endforeach; ?>
                        </td>
                        <td class="history__price"> <?= htmlspecialchars(ucfirst($staf['amount']))?></td>
                        <td class="history__time"> <?= htmlspecialchars(ucfirst($staf['staf_date']))?> </td>
                    </tr>
                <?php endforeach; ?>

            </table>
          </div>
        </div>
      </div>
    </section>
  </main>

  <main>
    <nav class="nav">
      <ul class="nav__list container">
          <?php foreach ($categories  as $category): ?>
              <li class="nav__item">
                  <a class="promo__link" href="pages/all-lots.html?category=<?= $category['id']?>">
                      <?= htmlspecialchars(ucfirst($category['name']))?>
                  </a>
              </li>
          <?php endforeach; ?>
      </ul>
    </nav>
    <form class="form form--add-lot container form--invalid" action="add.php" method="post"> <!-- form--invalid -->
      <h2><?= htmlspecialchars(ucfirst($title))  ?></h2>
      <div class="form__container-two">
        <div class="form__item form__item--invalid"> <!-- form__item--invalid -->
          <label for="lot_name">Наименование <sup>*</sup></label>
          <input id="lot_name" type="text" name="lot_name" placeholder="Введите наименование лота">
          <!--span class="form__error">Введите наименование лота</span-->
        </div>
        <div class="form__item">
          <label for="category_id">Категория <sup>*</sup></label>
          <select id="category_id" name="category_id">
              <option>Выберите категорию</option>
              <?php foreach ($categories  as $category): ?>
                  <option value="<?= $category['id']?>"><?= htmlspecialchars(ucfirst($category['name']))?></option>
              <?php endforeach; ?>
          </select>
          <span class="form__error">Выберите категорию</span>
        </div>
      </div>
      <div class="form__item form__item--wide">
        <label for="lot_description">Описание <sup>*</sup></label>
        <textarea id="lot_description" name="lot_description" placeholder="Напишите описание лота"></textarea>
        <span class="form__error">Напишите описание лота</span>
      </div>

        <div class="form__item form__item--file">
        <label>Изображение <sup>*</sup></label>
        <div class="form__input-file">
          <input class="visually-hidden" type="file" id="lot_picture" >
          <label for="lot_picture">
            Добавить картинку
          </label>
        </div>
      </div>

      <div class="form__container-three">
        <div class="form__item form__item--small">
          <label for="start_price">Начальная цена <sup>*</sup></label>
          <input id="start_price" type="text" name="start_price" placeholder="0">
          <span class="form__error">Введите начальную цену</span>
        </div>
        <div class="form__item form__item--small">
          <label for="staf_step">Шаг ставки <sup>*</sup></label>
          <input id="staf_step" type="text" name="staf_step" placeholder="0">
          <span class="form__error">Введите шаг ставки</span>
        </div>
        <div class="form__item">
          <label for="lot_end_date">Дата окончания торгов <sup>*</sup></label>
          <input class="form__input-date" id="lot_end_date" type="text" name="lot_end_date" placeholder="Введите дату в формате ГГГГ-ММ-ДД">
          <span class="form__error">Введите дату завершения торгов</span>
        </div>
      </div>
      <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
      <button type="submit" name="save"  class="button">Сохранить лот</button>
    </form>
  </main>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress1
 */

get_header();
?>

  <div class="uk-section uk-section-media uk-background-cover slider" style="background-image: url(template/images/slider.jpg)">
      <div class="uk-container">
        <div class="uk-card uk-card-default uk-card-body uk-width-1-3@m">
          <div class="card-tag">Тема дня</div>
            <div class="uk-card-title">
              <a href="">15 классных рецептов, которые убедят вас в том, что Великий пост можно провести вкусно</a>
            </div>
            <div class="card-desc">Если вы думаете, что постное меню — это исключительно каши на воде, то спешим заверить, что это не так. Здесь важно питаться разнообразно, чтобы не навредить здоровью и легко пережить пост.</div>
          </div>
      </div>
  </div>
  <div class="uk-section uk-section-small articles">
    <div class="uk-container">
      <div class="uk-child-width-1-3@m uk-grid uk-grid-medium uk-grid-match" uk-grid>
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                  <img src="template/images/logo.jpg" alt="">
                </div>
                <div class="uk-card-header">
                  <h3 class="uk-card-title">Что должно быть на столе: 10 лучших предметов сервировки</h3>
                </div>
                <div class="uk-card-footer comments">
                  <ul class="uk-iconnav">
                    <li><a href="" class="" uk-icon="icon: heart"></a> 608</li>
                    <li><a href="" class="" uk-icon="icon: comment"></a> 124</li>
                  </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="<?= get_template_directory_uri() ?>/template/images/slider.jpg" alt="">
                </div>
                <div class="uk-card-header">
                  <h3 class="uk-card-title">Что должно быть на столе: 10 лучших предметов сервировки</h3>
                </div>
                <div class="uk-card-footer comments">
                  <ul class="uk-iconnav">
                    <li><a href="" class="" uk-icon="icon: heart"></a> 608</li>
                    <li><a href="" class="" uk-icon="icon: comment"></a> 124</li>
                  </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                  <img src=" <?= get_template_directory_uri() ?>/template/images/.jpg" alt="">
                </div>
                <div class="uk-card-header">
                  <h3 class="uk-card-title">Что должно быть на столе: 10 лучших предметов сервировки</h3>
                </div>
                <div class="uk-card-footer comments">
                  <ul class="uk-iconnav">
                    <li><a href="" class="" uk-icon="icon: heart"></a> 608</li>
                    <li><a href="" class="" uk-icon="icon: comment"></a> 124</li>
                  </ul>
                </div>
            </div>
        </div>
      </div>
      <button class="uk-button uk-button-default button-articles uk-width-1-1 uk-margin-medium-top">Все статьи</button>
    </div>
  </div>
<div class="uk-section uk-section-small recept">
  <div class="uk-container">
    <h1 class="uk-heading-line uk-text-center"><span>Рецепты</span></h1>
    <div class="uk-grid uk-grid-small uk-grid-match uk-margin-medium-top" uk-grid>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src="<?= get_template_directory_uri() ?>/template/images/logo.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center">Headline</div>
        </div>
      </div>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src=" <?= get_template_directory_uri() ?>/template/images/.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center">Headline</div>
        </div>
      </div>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src=" <?= get_template_directory_uri() ?>/template/images/slider.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center">Headline</div>
        </div>
      </div>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src=" <?= get_template_directory_uri() ?>/template/images/slider.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center">Headline</div>
        </div>
      </div>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src=" <?= get_template_directory_uri() ?>/template/images/slider.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center">Headline</div>
        </div>
      </div>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src=" <?= get_template_directory_uri() ?>/template/images/slider.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center">Headline</div>
        </div>
      </div>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src=" <?= get_template_directory_uri() ?>/template/images/slider.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center">Headline</div>
        </div>
      </div>
      <div class="uk-text-center uk-width-1-2 uk-width-1-3@s uk-width-1-4@m uk-width-1-4@l uk-width-1-4@xl">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src=" <?= get_template_directory_uri() ?>/template/images/slider.jpg" alt="">
            <div class="uk-transition-fade uk-overlay-default uk-position-cover"></div>
            <div class="uk-position-center">Headline</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="uk-section uk-section-small news">
  <div class="uk-container">
    <h1 class="uk-heading-line uk-text-center"><span>Новости</span></h1>
    <div class="uk-child-width-1-4@m uk-grid-match uk-grid-small" uk-grid>
      <div>
          <div class="uk-card uk-card-small uk-card-hover uk-card-body">
              <h3 class="uk-card-title">10:00</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
      </div>
      <div>
          <div class="uk-card uk-card-small uk-card-hover uk-card-body">
              <h3 class="uk-card-title">6 марта</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
      </div>
      <div>
          <div class="uk-card uk-card-small uk-card-hover uk-card-body">
              <h3 class="uk-card-title">5 марта</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
      </div>
      <div>
          <div class="uk-card uk-card-small uk-card-hover uk-card-body">
              <h3 class="uk-card-title">4 марта</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
      </div>
    </div>
  </div>
</div>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress1
 */

get_footer();
?>
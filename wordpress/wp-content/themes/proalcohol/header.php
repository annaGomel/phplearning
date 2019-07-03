<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proalcohol
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	  <header uk-sticky="top: 200; animation: uk-animation-slide-top">
		<div class="uk-container">
		  <nav class="uk-navbar-container uk-navbar-transparent uk-margin-bottom uk-navbar" uk-navbar>
			<div class="uk-navbar-left">
				<ul class="uk-navbar-nav">
					 <li>
						<a href="#">Статьи</a>
					</li>
					<li>
						<a href="#">Рецепты</a>
					</li>
				</ul>
			</div>
			<div class="uk-navbar-center">
				<a class="uk-navbar-item uk-logo" href="#">ProAlcohol.com</a>
			</div>
			<div class="uk-navbar-right">
				<ul class="uk-navbar-nav">
				  <li>
					<form class="uk-search uk-search-navbar uk-visible@s uk-visible@m">
					  <span uk-search-icon></span>
					  <input class="uk-search-input" type="search" placeholder="Найти статью">
					</form>
				  </li>
				  <li>
					<button uk-toggle="target: #button-login" class="uk-button button-login">Войти</button>
				  <div id="button-login" uk-modal>
					<div class="uk-modal-dialog uk-modal-body uk-width-1-4@m uk-width-1-3@s">
					  <button class="uk-modal-close-default" type="button" uk-close></button>
					  <h2 class="uk-modal-title">Войти</h2>
					  <form>
						  <div class="uk-margin">
							  <div class="uk-inline">
								  <span class="uk-form-icon" uk-icon="icon: user"></span>
								  <input class="uk-input" type="text">
							  </div>
						  </div>
						  <div class="uk-margin">
							  <div class="uk-inline">
								  <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
								  <input class="uk-input" type="text">
							  </div>
						  </div>
					  </form>
					</div>
				  </div>
				  </li>
				</ul>
			</div>
		  </nav>
		</div>
	  </header>

	<div id="content" class="site-content">

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Pro alcohol</title>
<?php wp_head()
?>
    <!-- Ui kit styles -->
    <link rel="stylesheet" href="assets/uikit-3.0.0-beta.12/css/uikit.min.css" />

    <!-- Main styles -->
    <link rel="stylesheet" href="template/styles/main.css">

</head>
<body>
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
                        <form class="uk-search uk-search-navbar">
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
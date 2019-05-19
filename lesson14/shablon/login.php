<?php

include "function.php";

$title = 'Авторизация';
$name1 = 'Alex';

$content = renderTemplate('login.php', [
    'title' => $title,
    'name1' => $name1
]);

file_put_contents('login.txt', $content);
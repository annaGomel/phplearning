<?php

include "function.php";

$title = 'Главная страница';
$names = ['Alex', 'Misha', 'Kolia'];

$content = renderTemplate('index.php', [
    'name1' => $name1,
]);


$layout = renderTemplate('layout.php', [
    'content' => $content,
    'title' => $title,
    'names' => $names
]);

print($layout);
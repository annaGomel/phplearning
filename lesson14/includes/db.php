<?php

$connection = mysqli_connect(
    'localhost',
    'root',
    '',
    'lesson14'
);

if(!$connection) {
    echo "Подключение к БД не успешно";
}


?>
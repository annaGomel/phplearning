<?php

    $connection = mysqli_connect(
        'localhost',
        'root',
        '',
        'lesson12'
    );

    if(!$connection) {
        echo "Подключение к БД не успешно";
    }


?>
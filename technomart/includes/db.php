<?php

    $connectionTechnomart = mysqli_connect(
        'localhost',
        'root',
        '',
        'technomart'
    );

    if(!$connectionTechnomart) {
        echo "Подключение к БД не успешно";
    }


?>
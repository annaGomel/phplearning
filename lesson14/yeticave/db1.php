<?php
$connection_new = mysqli_connect(
    'localhost',
    'root',
    '',
    'lesson14'
);
if(!$connection_new){
    echo "Подключение к БД не успешно";
}
?>
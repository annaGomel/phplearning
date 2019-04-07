<?php
//2.1Создать форму, в которую пользователь вносит информацию (например логин),
//полученные данные вывести на экран. Сделать проверку на пустоту. Сделать проверку на длину логина не менее 3 символов.
if(isset($_POST['submit'])) {
    $minimun = 3;

    $login = $_POST['login'];

    if (strlen($login) < $minimun) {
        echo "Login has to bee longer than 3 symbols";
    } else {
        echo "Welcome";
    }
    echo "Your Login is " . $login;

}
//2.2Вытащить данные из файла и вывести через select.

$text = file_get_contents('../test-file');

echo nl2br($text);



?>
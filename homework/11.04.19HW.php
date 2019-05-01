<?php
/**
 * Created by PhpStorm.
 * User: ANNA
 * Date: 07.04.2019
 * Time: 22:59
 */

//3. Домашнее задание (самостоятельная работа)
//3.1 Создать форму с текстовым полем и кнопкой submit. Поль-
//зователь должен вводить в текстовое поле название логина, пароля и e-mail адреса.
//При нажатии на кнопку submit, должно происходить следующие дей-
//ствия:
//- название логина, пароля и e-mail адреса из формы должно записываться в файл
//users.txt;
//- проверка валидации на стороне сервера на обязательность;
//- логин должен быть не менне 3 символов и не более 30 символов;
//- логин должен быть уникальным *;



if(isset($_POST['submit'])) {

    $minimun = 3;
    $maximun = 30;
    $u_name = $_POST['name'];
    $password = $_POST['password'];
    $mail=$_POST['mail'];

    if(strlen($u_name) < $minimun ) {
        echo "Username has to be longer 3 <br>";
        return;
    }

    if(strlen($u_name) > $maximun  ) {
        echo "Username cannot be longer than 30 <br>";
        return;
    }

    if (empty($password)){
        echo "Password is empty <br>";
        return;
    }

    if (empty($mail)){
        echo "Email is empty <br>";
        return;
    }

    $file="users.txt";
    $user_exist=null;

    if (file_exists($file)) {
        $users = file_get_contents($file);
        $user_exist = strstr($users, $u_name);
    }

    if($user_exist!=null) {
        echo " Sorry  this user: $u_name  already exist <br>";
        echo nl2br($users);

    } else {
        $content = "User:".$u_name."\n"."Email:".$mail."\n"."Password:".$password."\n";
        file_put_contents($file, $content, FILE_APPEND | LOCK_EX);

        echo "Hello "."<br/>";
        $users = file_get_contents($file);
        echo nl2br($users);

    }
}




?>
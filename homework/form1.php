<?php

 //3.1 Создать форму с текстовым полем и кнопкой submit. Поль-
//зователь должен вводить в текстовое поле название логина, пароля и e-mail адреса.
//При нажатии на кнопку submit, должно происходить следующие дей-
//ствия:
//- название логина, пароля и e-mail адреса из формы должно выводится на экран;
//- проверка валидации на стороне сервера;
//- логин должен быть не менее 3 символов и не более 30 символов;



if(isset($_POST['submit'])) {

    $good_names = array("Edwin", "Peter", "Samid", "Mohad", "Maria", "Jane", "tom");;
  //  $good_passwords = array();;
 //   $good_mails= array();

    $minimun = 3;
    $maximun = 30;

    $u_name = $_POST['name'];
    $password = $_POST['password'];
    $mail=$_POST['mail'];

    if(strlen($password) < $minimun ) {

        echo "Username has to be longer 3 <br>";

    }

    if(strlen($password) > $maximun  ) {

        echo "Username cannot be longer than 30 <br>";

    }

    if(!in_array( $u_name, $good_names )) {
        echo " Sorry you are not allowed <br>";
    } else {
        echo "Hello " . $u_name."<br/>";
        echo "Email: " . $mail."<br/>";
        echo "Your Password is " . $password;
    }



}


?>
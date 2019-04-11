<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 07.04.2019
 * Time: 20:16
 */

//$users="users.txt";
//$file = file_get_contents($users);
//echo nl2br($file);

/*$users="users.txt";
$file = file($users);
foreach ($file as $line){
    echo explode( ':', $line )[0] . " - " .explode( ':', $line )[1] . "<br>";
}*/

//11,04,19
$login =  $_POST['login'];
$password =  md5 ($_POST['password']);
$users = file('users.txt');
foreach ($users as $user){
    $user = explode(':',$user)[0];
    if ($user == $login){
        echo "login db unikalnym";
        break;
            } else {
        $line = $login . ':' . $password;
        $line = file_put_contents('users.txt',$line, FILE_APPEND);
        echo "user zaregistr";
    }
}
$handle = fopen('users.txt', 'r');







?>
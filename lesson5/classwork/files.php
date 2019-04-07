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

$users="users.txt";
$file = file($users);
foreach ($file as $line){
    echo explode( ':', $line )[0] . " - " .explode( ':', $line )[1] . "<br>";
}







?>
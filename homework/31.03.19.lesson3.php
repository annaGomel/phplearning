<?php
/**
 * Created by PhpStorm.
 * User: ANNA
 * Date: 23.03.2019
 * Time: 23:48
 */


//1. Создать переменную с произвольным текстом (длиной >10символов). Провести проверку: если длина
//строки больше 10 символов, обрезать строку до 10 символов. С помощью функции заменить все символы
//"a-g" на пустоту.

    $var = "congratulation with start working";

    if(strlen ($var)> 10){
        $var = substr($var,0,10);
    };

    $alph = array('a','b','c','d','e','f','g');
    $result = str_replace($alph,' ', $var   );
    echo $result.'<br>' ;

//2. Задание:
//Взять Html разметку:
//" <div class="refnamediv">
//<h1>htmlspecialchars</h1>
//<p> (PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">htmlspecialchars</span> —
//<span class="dc-title">Любой текст</span></p>
//</div>";
//Удалить все html теги. Вывести количество символом после фильтрации.

    $varHtml =
        '<div class="refnamediv">
        <h1>htmlspecialchars</h1>
        <p> (PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">htmlspecialchars</span> —
        <span class="dc-title">Любой текст</span></p>
        </div>';


    $varHtml = strip_tags($varHtml);
    echo $varHtml.'<br>';
    echo strlen($varHtml) .'<br>';

//3. Найти и заменить в строке "http://example.com/user/username" user на author; Вывести результат на экран

$varStr = "http://example.com/user/username";
$result = str_replace('user','author', $varStr  );
echo $result.'<br>' ;

//5. Преобразовать строку "Find me and say Hello Mike!" в массив;

$varStr1 = "Find me and say Hello Mike!";
$result = str_split($varStr1);
print_r($result);
echo "<br>";
$result2 = explode(" ", $varStr1);
print_r($result2);
echo "<br>";

// 6. Посчитать, сколько букв "a" встречается в строке "Find me and say Hello Mike!";

$varStr1 = "Find me and say Hello Mike!";
echo  substr_count($varStr1,'a')."<br>";


//  7. Дан урл "http://example.com/name=Mike&lastname=Jackson&age=25",
// необходимо разбить и вытащить параметры и вывести на экран.


$varUrl = "http://example.com/?name=Mike&lastname=Jackson&age=25";
$parts = parse_url( $varUrl );
print_r($parts);
parse_str( $parts['query'] , $result );
echo "<br>";
print_r($result);
echo "<br>";

//4. Отсортировать массивам [1,22,45,3,23,45,6,76,55,4] по возврстанию *;
$arr = [1,22,45,3,23,45,6,76,55,4];
sort($arr);
print_r($arr);
    ?>

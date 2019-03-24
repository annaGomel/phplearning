<?php
/**
 * Created by PhpStorm.
 * User: ANNA
 * Date: 23.03.2019
 * Time: 23:48
 */


//1. При помощи цикла for выведите все нечетные числа от 1 до 50;

for  ($i  =  1;  $i  <= 50;  $i +=2 )
    echo  $i ."<br>";
echo "<br>";
//2. При помощи цикла while вывести список категорий. Результат Категория 1, Категория 2, и т.д.;
$a = "Kategoriya";
$c = 1;
$b = 25;
while ($c <= $b){
    echo $a .$c ."<br>";
    $c++;
   };
echo "<br>";
//3. Написать скрипт, который выведет Заголовок, Дату и Имя автора, Картину поста (цикл while)
//4. При помощи цикла foreach вывести список категорий. Результат Категория 1, Категория 2, и т.д

$spisok = array();
for  ($i  =  1;  $i  <= 20;  $i++ )
array_push($spisok,"Категория ".$i);

foreach ($spisok as $value) {
    echo $value ."<br>";
}
echo "<br>";
//5. Написать скрипт вывода формы, в котором задействовать подключение конструкци require_once;

require_once "header.php";
echo "body test"."<br>";
require_once "footer.php";
echo  "<br>";

//6. Задача. Переменная $lang может принимать два значения: 'ru' и 'en'. Если она имеет значение 'ru',
// то в переменную $arr запишем массив дней недели на русском языке, а если имеет значение 'en' – то на английском.
// Решите задачу через 2 if, через switch-case.

$lang = "ru";
$arrRu  = array('понедельник', 'вторник','среда', 'четверг', 'пятница', 'суббота', 'воскресенье');
$arrEn = array('monday', 'tuesday','wednesday', 'thursday', 'friday', 'saturday', 'sunday');
/*switch($lang){
    case "ru":
        for ($i = 0; $i <= 6; $i++){
            echo $arrRu[$i]." ";
        }
        break;
    case "en":
        for ($i = 0; $i <= 6; $i++){
            echo $arrEn[$i]." ";
        }
        break;
}*/

echo "<br>";
if( $lang == "ru"){
    for ($i = 0; $i <= 6; $i++){
        echo $arrRu[$i]." ";
    }
} else {
    for ($i = 0; $i <= 6; $i++){
    echo $arrEn[$i]." ";
}
}
echo "<br>";

//7. Заполните массив следующим образом: в первый элемент запишите 'x', во второй 'xx', в третий 'xxx' и так далее.
$arr = array ();
$value = "";
for  ($i  =  1;  $i  <= 10;  $i++ ){
    $value=  $value."x";
    array_push($arr, $value);
}

foreach ($arr as $value) {
    echo $value ."<br>";
}

//echo $value;






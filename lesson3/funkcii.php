<?php  
//28.03.2019
    

//1. Создать функцию, которая возвращает сумму двух чисел;

function calculate($number1,$number2){
    $sum = $number1 + $number2;
    return $sum;
}

//2. Создать функцию, которая выводит на экран сумму двух чисел;


function calculateP($number1,$number2){
    $sum = $number1 + $number2;
    return $sum;

}
 echo calculateP(6,9);

//3. Создать функцию приветствия;

function privetstvie($name){
    $a = 'Hello';
    return $a . ' ' . $name;

}
 echo privetstvie('anna');


//5. ФункциЯ, принимающаЯ массив строк и выводЯщаЯ каждую строку в отдельном параграфе.

//$arr = ["green","orange","black","red","white"];
function color($arr){
    foreach($arr as $elem){
        echo "<p>" . $elem ."</p>";
    }
    
}

color(["green","orange","black","red","white"]);

?>



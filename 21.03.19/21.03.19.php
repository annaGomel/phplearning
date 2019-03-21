<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>



<body>
<!--    5. Если переменная $a НЕ пустая, то выведите 'Верно', иначе выведите 'Неверно'. (empty())-->
   
<?php
   /*
   $a = 'Verno';
    if (!empty($a)){
        echo "Verno";
    } else {
        echo "Neverno";
    }*/
        
    ?>
    <!--1. Необходимо создать выпадающий список годов от 2000 до 2050.
    -->
    
    <!--<select name="" id=""> -->      
    <?php
/*    for($i  =  2000;  $i  <  2050;  $i++)   : ?>
         <option value=""><?= $i ?></option>
         <?php
    endfor;*/
    ?>
    <!--</select>-->
    
<!--     2.  Выведите столбец чисел от 1 до 100-->
    
    <?php
  /* for ($i  =  1;  $i  <  100;  $i++) 
   echo $i . "<br>";*/
    ?>
    
  <!--  4.  Выведите столбец четных чисел в промежутке от 0 до 100-->
    
    <?php
    for ($i  =  1;  $i  <  100;  $i +=2)
    echo $i . "<br>";
    ?>
    
    
</body>
</html>
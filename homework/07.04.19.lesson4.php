<?php
/**
 * Created by PhpStorm.
 * User: ANNA
 * Date: 23.03.2019
 * Time: 23:48
 */


//2.2 Вытащить данные из файла и вывести через select.
$word = "coffee";
echo '<select style="width: 150px;"   name="type_drink" size="1">';
$file_handle = fopen("values.txt", "r");
while (!feof($file_handle)) {
    $line = trim(fgets($file_handle));
    echo '<option '.($line == $word ? " selected " : "" ).'>'.$line.'</option>';

}
fclose($file_handle);
echo '</select>';

?>

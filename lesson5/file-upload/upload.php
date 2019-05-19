<?php

// Принимаем файл и записываем массив в переменную $file
$file = $_FILES['file'];

$dir = 'uploads';

if(!file_exists($dir)){
    mkdir($dir, 0777);
}

$file_name = $dir.'/'.$file['name'];

// перемещаем файл из временной директории в свою
if(move_uploaded_file($file['tmp_name'], $file_name)){
    echo "Файл успешно загружен";
}else {
    echo "Возникла ошибка при загрузке файла, 
    код ошибки - " . $file['error'];
}
//return;
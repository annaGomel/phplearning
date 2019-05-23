<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 14.04.2019
 * Time: 18:22
 */
//1.	Пусть в корне вашего сайта лежит файл old.txt. Переименуйте его на new.txt.
//rename("old.txt", "new.txt");
//2.	Пусть в корне вашего сайта лежит файл test.txt. Пусть также в корне вашего сайта лежит папка dir.
// Переместите файл в эту папку.
//rename("test.txt", "dir/test.txt");

//3.	Пусть в корне вашего сайта лежит папка dir1, а в ней файл test.txt. Пусть также в корне
// вашего сайта лежит папка dir2. Переместите файл в эту папку.
//rename("dir1/test.txt", "dir2/test.txt");
//4.	Пусть в корне вашего сайта лежит файл test.txt. Скопируйте его в файл copy.txt.
//copy("test.txt","copy.txt");
//5.	Пусть в корне вашего сайта лежит файл test.txt. Пусть также в корне вашего сайта лежит папка dir.
// Скопируйте файл test.txt в папку dir. Копию файла также назовите test.txt.
//copy("test.txt","dir/test.txt");

//6.	Пусть в корне вашего сайта лежит файл test.txt. Удалите его.
//unlink("test.txt");

//7.	Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt.
// Вручную сделайте массив с именами этих файлов. Переберите его циклом и удалите все эти файлы.
//$arr=["1.txt","2.txt","3.txt"];
    //foreach($arr as $value){
        //unlink($value);
        //print_r($arr);
//}
//8.	Проверьте, лежит ли в корне вашего сайта файл test.txt.
/*$filename = '/lesson7/test.txt';
var_dump($filename);*/

//9.	Проверьте, лежит ли в корне вашего сайта файл test.txt. Если да - удалите его, если нет - создайте.
/*
$filename = 'test.txt';

if (file_exists($filename)) {
    unlink($filename);
    echo "file " .$filename . " delete ";
} else {
    $fp = fopen("test.txt", "w");
    echo "file" .$filename . " create";
}*/

//10.	Дан массив с именами файлов ['1.txt', '2.txt', '3.txt']. Переберите его циклом и проверьте каждый
// файл на существование. Выведите на экран имя каждого файла и рядом текст "существует" или "не существует".

/*$arr=['1.txt','2.txt','3.txt'];
foreach($arr as $value){
    if (file_exists($value)) {
        echo "file " .$value . " exsiste " ."<br>";
    } else {
        echo "file" .$value . " not exist" ."<br>";
    }
}*/

//11.	Пусть в корне вашего сайта лежит файл test.txt. Узнайте его размер, выведите на экран.

//$var = filesize("test.txt");
   // echo ($var);

//12.	Модифицируйте предыдущую задачу так, чтобы размер файла выводился в килобайтах.
/*$var = filesize("test.txt");
    $newvar = $var / 1000;
        echo ($newvar);*/



//13.	Создайте в корне вашего сайта папку с названием dir.
//mkdir('dir3', 0777);


//14.	Дан массив со строками. Создайте в корне вашего сайта папки, названиями которых служат элементы этого массива
/*
$arr = ['line1','line2','line3','line4'];
foreach($arr as $value){
    mkdir($value, 0777);
}
*/

//15.	Создайте в корне вашего сайта папку с названием test. Затем создайте в этой папке 3 файла: 1.txt, 2.txt, 3.txt.
/*
mkdir('test', 0777);
$arr=['1.txt','2.txt','3.txt'];
foreach($arr as $value){
    //1 variant
    //$f_hdl = fopen('test/'.$value, 'w');
    //fwrite($f_hdl, "test");
    //fclose($f_hdl);
    //2 variant
    file_put_contents('test/'.$value, 'Текст для записи в файл: '.$value);
};
*/

//16.	Удалите папку с названием dir.
/*if ( !is_dir( 'dir' ) ) {
    mkdir( 'dir' );
}
rmdir('dir');*/

//17.	Пусть в корне вашего сайта лежит папка dir, а в ней какие-то текстовые файлы. Выведите на экран столбец имен этих файлов.
/*
$dir= 'dir';
if ( !is_dir( $dir ) ) {
    mkdir($dir, 0777);
}
$arr=['1.txt','2.txt','3.txt'];
foreach($arr as $value) {
    file_put_contents($dir.'/'. $value, 'Текст для записи в файл: ' . $value);
}

foreach(scandir($dir) as $value) {
    echo ($value)."<br>";

}*/

//18.	Создайте папку dir, в папке этой создайте три файла с расширение .txt, один файл с расширением .html. Выведите
// на экран список только файлов с расширением .txt.
$dir1='dir1';
if ( !is_dir( $dir1 ) ) {
    mkdir($dir1, 0777);
}
$arr=['1.txt','2.txt','3.txt','4.html'];
foreach($arr as $value) {
    file_put_contents($dir1.'/'. $value ,'');
}
// variant 1
foreach(glob($dir1.'/*.txt') as $value) {
    echo ($value) . "<br>";
}

// variant 2
$myDirectory=opendir($dir1);
while(($value = readdir($myDirectory))!==false) {
    if (preg_match('|\.txt$|', $value)) {
        echo ($value) . "<br>";
    }
}
closedir($myDirectory);


//19.	В папке из предыдущей задачи выведите количество файлов с с расширением .html и с расширением .txt.
echo ' файлов с расширением .txt: '.  count (glob($dir1.'/*.txt')). "<br>";
echo ' файлов с расширением .html: '. count (glob($dir1.'/*.html')). "<br>";

//20.	Создайте страницу профиля, в котором можно загружать аватарку, должны быть поля Имя, почта, логин, номер телефона,
// информация о себе. Кнопка сохранить. Информацию хранить в файле *.










//21.	Создайте страницу создания новостей, новость должна иметь следующие поля, название новости, картинка, дата создания, имя автора, краткий текст *.



?>
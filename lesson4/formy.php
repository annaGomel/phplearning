<?php  
//31.03.2019
    
//1.	Сделайте чекбокс: если он отмечен, то выведите 'отмечен', если не отмечен - то выведите 'не отмечен'.


if(isset($_POST['fruits'])){
    echo "otmechen";
    print_r($_POST['fruits']);
} else {
    echo "ne otmechen";
}

//2.	Сделайте функцию input, которая создает инпут с типом text. Функция
// должна иметь следующие параметры: name, value.

function input($type, $name, $value){
    return "<input type ={$type};
                   name ={$name};
                   value ={$value}>";
};
    echo input($_POST['type'],
           $_POST['name'],
           $_POST['value']);


//3.	Спросите у пользователя имя с помощью формы. Сделайте чекбокс: если он отмечен, то поприветствуйте
//пользователя, если не отмечен - попрощайтесь с пользователем.-->
$value = $_POST['name'];
$login = $_POST['login'];
if($value == 1){
    echo "Privet, ";
     echo($login);
    } else {
        echo "poka!";
    }

?>
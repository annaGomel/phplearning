<?php  
//31.03.2019
    
//1.	Сделайте чекбокс: если он отмечен, то выведите 'отмечен', если не отмечен - то выведите 'не отмечен'.


if(isset($_POST['fruits'])){
    echo "otmechen";
    print_r($_POST['fruits']);
} else {
    echo "ne otmechen";
}
    
?>
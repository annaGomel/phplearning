<?php
include 'function.php';
include 'db1.php';
$title = 'Лот';


$sqlCategories='SELECT * FROM cathegory';
$categories=mysqli_query($connection_new, $sqlCategories);
$sqlUsers='SELECT * FROM users';
$allUsers=mysqli_query($connection_new, $sqlUsers);

// Сохранение  добавленной   экипировки
if(isset($_POST['save'])) {

    $minimun = 3;
    $maximun = 30;


    $lot_name = htmlspecialchars($_POST['lot_name']);
    $category_id = htmlspecialchars($_POST['category_id']);
    $lot_description = htmlspecialchars($_POST['lot_description']);
    $start_price  = htmlspecialchars($_POST['start_price']);
    $staf_step = htmlspecialchars($_POST['staf_step']);
    $lot_end_date = htmlspecialchars($_POST['lot_end_date']);

    // Валидация   полей
    if(strlen($lot_name) < $minimun ) {
        $content = renderTemplate('add.php',
            ['title'=>$title, 'categories'=>$categories,'errorField'=>'lot_name', 'lot_name'=>$lot_name, 'category_id'=>$category_id,
                'lot_description'=>$lot_description,  'start_price'=>$start_price, 'staf_step'=>$staf_step,
            ]);

        $layout = renderTemplate('layout.php',['title'=> $title,  'content'=>$content]);
        print($layout);
        exit();
    }

    // Валидация   полей
    if($category_id == 0 ) {
        $content = renderTemplate('add.php',
            ['title'=>$title, 'categories'=>$categories,'errorField'=>'category_id', 'lot_name'=>$lot_name, 'category_id'=>$category_id,
                'lot_description'=>$lot_description,  'start_price'=>$start_price, 'staf_step'=>$staf_step,
            ]);
        $layout = renderTemplate('layout.php',['title'=> $title,  'content'=>$content]);
        print($layout);
        exit();
    }

    // Валидация   полей
    if(strlen($lot_description) < $minimun ) {
        $content = renderTemplate('add.php',
            ['title'=>$title, 'categories'=>$categories,'errorField'=>'lot_description', 'lot_name'=>$lot_name, 'category_id'=>$category_id,
                'lot_description'=>$lot_description,  'start_price'=>$start_price, 'staf_step'=>$staf_step,
            ]);
        $layout = renderTemplate('layout.php',['title'=> $title,  'content'=>$content]);
        print($layout);
        exit();
    }

    // Валидация   полей
    if($start_price <=0 ) {
        $content = renderTemplate('add.php',
            ['title'=>$title, 'categories'=>$categories,'errorField'=>'start_price', 'lot_name'=>$lot_name, 'category_id'=>$category_id,
                'lot_description'=>$lot_description,  'start_price'=>$start_price, 'staf_step'=>$staf_step,
            ]);
        $layout = renderTemplate('layout.php',['title'=> $title,  'content'=>$content]);
        print($layout);
        exit();
    }

    // Валидация   полей
    if($staf_step <=0 ) {
        $content = renderTemplate('add.php',
            ['title'=>$title, 'categories'=>$categories,'errorField'=>'staf_step', 'lot_name'=>$lot_name, 'category_id'=>$category_id,
                'lot_description'=>$lot_description,  'start_price'=>$start_price, 'staf_step'=>$staf_step,
            ]);
        $layout = renderTemplate('layout.php',['title'=> $title,  'content'=>$content]);
        print($layout);
        exit();
    }



    // Загрузка картинки
    $path = "uploads/";
    $lot_picture =  basename($_FILES["lot_picture"]["name"]);
    $path_picture =  $path.basename($_FILES["lot_picture"]["name"]);
    $file=$_FILES['lot_picture']['name'];
    $result = move_uploaded_file($_FILES['lot_picture']['tmp_name'],$path_picture);
    if ($result) {
        echo "file successfully uploaded <br>";
        echo $path_picture;
    }
    else {
        echo "please select your file";
    }

// Сохранение добавленной экипировки   в базу
    $sql_create = "INSERT INTO lots(title, description, picture,start_price,staf_step,category_id,create_date,end_date) VALUES ('{$lot_name}', '{$lot_description}', '{$lot_picture}', '{$start_price}', '{$staf_step}', '{$category_id}', now(),'{$lot_end_date}')";
    $create_result = mysqli_query($connection_new, $sql_create,MYSQLI_STORE_RESULT);
    confirmQuery($create_result);
    $id= $connection_new->insert_id;

    if (!mysqli_commit($connection_new)) {
        print("Не удалось зафиксировать транзакцию\n");
    }
// Переход на страницу  отображения описания   добавленной экипировки
    echo '<script type="text/javascript">window.location = "';
    echo "lot.php?lot_id=$id";
    echo '"</script>';

}

// Вывод страницы  описания  экипировки по Идишнику
if(isset($_GET['lot_id'])) {
    $id = $_GET['lot_id'];
    $lotSql = "SELECT * FROM lots WHERE id = $id";
    $lotResult = mysqli_query($connection_new, $lotSql);
    if(!$lotResult) {
        echo "Запрос не удался";
    }

    $lot = $lotResult->fetch_array();

    $userStafSql = "SELECT * FROM user_staf WHERE lot_id = $id";
    $userStafResult = mysqli_query($connection_new, $userStafSql);
    $countStaf = count($userStafResult->fetch_all(),COUNT_NORMAL);
    if($lot) {
        // сли экипровка найдена выводим страницу описания
        $content = renderTemplate('lot.php', ['title'=>$title, 'categories'=>$categories, 'allUsers'=>$allUsers, 'lotInfo'=>$lot, 'userStaf'=>$userStafResult,'countStaf'=>$countStaf]);
        $layout = renderTemplate('layout.php',['title'=> $title, 'content'=>$content]);
    }else{
        // сли экипровка не найдена выводим  ошибки 404 -  страница не найдена
        $content = renderTemplate('404.php', ['title'=>$title, 'categories'=>$categories, 'lotInfo'=>$lot]);
        $layout = renderTemplate('layout.php',['title'=> $title, 'content'=>$content]);
    }

} else{
    // сли экипровка не найдена выводим  ошибки 404 -  страница не найдена
    $content = renderTemplate('404.php', ['title'=>$title, 'categories'=>$categories]);
    $layout = renderTemplate('layout.php',['title'=> $title, 'content'=>$content]);
}

   print($layout);


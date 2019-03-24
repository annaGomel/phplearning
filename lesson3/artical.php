<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
</head>
<body>

<!-- задание 1-->
   
<?php
    $artical = [
    0 => [
        'title' => 'zagolovok1',
        'image' => '../This-Is-Why-Cats-Are-Afraid-of-Cucumbers-760x506.jpg',
        'content' =>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel debitis, voluptatibus qui numquam ab, natus temporibus rerum cum officiis ipsa necessitatibus quas blanditiis, incidunt quam illo quisquam doloremque quidem soluta laudantium, nesciunt veritatis reiciendis quibusdam eaque delectus eius. Quo, dolor. ',    
    
    ],
       
    1 => [
        'title' => 'zagolovok1',
        'image' => '../This-Is-Why-Cats-Are-Afraid-of-Cucumbers-760x506.jpg',
        'content' =>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat illum vel cum deleniti maiores iure debitis corrupti adipisci! Illum ullam sit explicabo, hic, cupiditate sint libero officiis, eligendi praesentium quaerat facilis recusandae. Inventore, odit, maxime. ',    
        
    ],
       
    2 => [
        'title' => 'zagolovok1',
        'image' => '../This-Is-Why-Cats-Are-Afraid-of-Cucumbers-760x506.jpg',
        'content' =>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, minus accusamus aliquid itaque libero et at esse, cupiditate quae nostrum, laudantium, nisi dolorum voluptatum debitis ratione impedit vitae odio ipsum quod perferendis. Ratione consequatur pariatur, mollitia eaque quisquam autem tempora. Rem possimus, laudantium perferendis quidem itaque, voluptatum cum exercitationem dolorem! ',            
    ],
       3 => [
        'title' => 'zagolovok1',
        'image' => '../This-Is-Why-Cats-Are-Afraid-of-Cucumbers-760x506.jpg',
        'content' =>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, minus accusamus aliquid itaque libero et at esse, cupiditate quae nostrum, laudantium, nisi dolorum voluptatum debitis ratione impedit vitae odio ipsum quod perferendis. Ratione consequatur pariatur, mollitia eaque quisquam autem tempora. Rem possimus, laudantium perferendis quidem itaque, voluptatum cum exercitationem dolorem! ',            
    ], 
    
    ];

    foreach($artical as $item) { 
    
?>

<div class="card" style="width: 18rem;">    
  <img src="<?= $item['image'] ?>" class="card-img-top" alt="...">
      <div class="card-body">
            <h5 class="card-title"><?= $item['title'] ?></h5>
                <p class="card-text"><?= $item['content'] ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  
 
</div>
<?php
 }
   ?> 
</body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</html>

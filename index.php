
<?php 
    
    include_once __DIR__ . '/classes/food.php';
    include_once __DIR__ . '/classes/toy.php';


    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-2</title>
</head>
<body>
    <?php  
    
    $cibo = new Food('25/05/2026','pollo,macinato','proteico','cane',true,);
    var_dump($cibo);
    $giochi = new Toy('bastone','grigio','cina','big','gatto',false);
    var_dump($giochi)
    ?>
</body>
</html>
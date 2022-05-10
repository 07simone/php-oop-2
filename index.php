
<?php 
    
    include_once __DIR__ . '/classes/food.php';
    include_once __DIR__ . '/classes/toy.php';
    include_once __DIR__ . '/classes/user.php';
    include_once __DIR__ . '/classes/bancomat.php';

    $cibo = new Food('25/05/2026','pollo,macinato','proteico','cane',true,);
    $card = new Bancomat('154824555','25/02/2025',150);
    $utente = new User('sara', 'ferri',28,false, null, $card);
    $giochi = new Toy('bastone','grigio','cina','5€','gatto',false);
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
    
    var_dump($cibo);
    var_dump($utente);
    var_dump($giochi);
    var_dump($card);
    ?>
    <p>
        <?php echo $utente->setSconto(); ?>
    </p>
    <p>
        <?php echo $utente->getAge(); ?>
    </p>
    <p>
        <?php echo $card->getdisponibilità(); ?>
    </p>
    


    
</body>
</html>
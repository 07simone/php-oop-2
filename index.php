
<?php 
    
    include_once __DIR__ . '/classes/food.php';
    include_once __DIR__ . '/classes/toy.php';
    include_once __DIR__ . '/classes/user.php';
    

    $cibo = new Food('25/05/2026','pollo,macinato','proteico','cane',true,);
    $utente = new User('sara', 'ferri',24,false, null, 150);
    $giochi = new Toy('bastone','grigio','cina',85,'gatto',false);
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
    ?>
    <p>
        <?php echo $utente->setSconto(); ?>
    </p>
    <p>
        <?php echo $utente->getAge(); ?>
    </p>
    <p>
        <?php  echo 'hai appena effettuato un acquisto pari a ' . $giochi->getprice() . ' ti restano sulla carta un totale di: ' . $utente->setCarta_credito($giochi->getprice()); ?>
    </p>
    
    


    
</body>
</html>
<?php
require_once __DIR__ . "./cibo.php";
require_once __DIR__ . "./cucce.php";
require_once __DIR__ . "./giochi.php";
require_once __DIR__ . "./utente.php";

$acana_cat = new Cibo("ACANA CAT GRASSLANDS REGIONALS 25", 25 ,"Contiene il 75% di pesce e carne (agnello, anatra, tacchino, lucioperca) e il 25% di verdure, frutta ed estratti vegetali. Ricco di proteine naturali." , "Croccantini");
$acana_dog = new Cibo("ACANA DOG PACIFICA REGIONALS 25", 25 ,"La ricetta di Acana Pacifica contiene il 70% di pesce da pesca sostenibile nelle acque canadesi del Pacifico del Nord e si rifà alle naturali esigenze nutrizionali del vostro cane e per il suo piano nutrizionale segue l’esempio dei suoi antenati in natura." , "Croccantini");

$trixie_dog_1 = new Giochi("Trixie Dog Activity Poker Box", 15 ,"4 scatole con diversi meccanismi di apertura, riempibili con snack, in plastica con piedini antiscivolo.","Gioco d'intelligenza");

$chris = new Utente("Christian","mmmmm@gmail.com");
$chris->addProductToCart($acana_cat);
$chris->addProductToCart($acana_dog);
$chris->scadenza = true ;

$marc = new Utente("Marco","");
$marc->addProductToCart($acana_cat);
$marc->addProductToCart($acana_dog);
$marc->scadenza = false ;

$paolo = new Utente("Paolo","mmmmm@gmail.com");
$paolo->addProductToCart($acana_cat);
$paolo->addProductToCart($acana_dog);
$paolo->scadenza = false ;

$arr = [$chris,$marc,$paolo];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach($arr as $user) {?>
        <li>
            <h1><?php echo $user->name; ?></h1>
            <?php if($user->scadenza === false) {?>
            <ul>
                <?php foreach($user->cart as $cartItem) { ?>
                    <li><?php echo $cartItem->getInfo();?></li>
                <?php } ?>
            </ul>
            <h2>Totale : <?php echo $user->getTotalPrice(); ?> <h2>
            <?php } else {?>
                <p>Carta di credito scaduta </p>
            <?php }?>
        </li>
    <?php } ?>
    </ul>
</body>
</html>
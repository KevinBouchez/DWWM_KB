<?php

    require_once("class/fruits.class.php");
    require("common/header.php");
    require("common/menu.php");

?>

<h1>Fruits</h1>

<?php

    //Création
    $f1 = new Fruits("Pomme","apple.png",3.00."€",Fruits::POIDS_MID."kg");

    $f2 = new Fruits("Cerise","cherry.png",5.00."€",Fruits::POIDS_MAX."kg");

    $f2 = new Fruits("Cerise","cherry.png",1.00."€",Fruits::POIDS_MIN."kg");

    $fruits = Fruits::listFruits();

    foreach($fruits as $value){
        $value->afficherImageFruit();
        echo "<br/>---------------------------------------------------------------<br/><br/>";
    }

?>

<?php 
    require("common/footer.php");
?>
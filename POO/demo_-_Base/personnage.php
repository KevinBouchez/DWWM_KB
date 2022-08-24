<?php

    require_once("class/personnage.class.php");
    require("common/header.php");
    require("common/menu.php");

?>

<h1>Personnages</h1>

<?php

    //Création d'un personnage
    $p1 = new Personnage("Thor","player.png","Mage",127,true);
    $p1->afficherImage();
    echo "<br/>----------------------------------------------------------------------------<br/><br/>";
    $p2 = new Personnage("Odin","playerM.png","Guerrier",199,true);
    $p2->afficherImage();
    echo "<br/>----------------------------------------------------------------------------<br/><br/>";
    $p3 = new Personnage("Athena","playerF.png","Archer",54,false);
    $p3->afficherImage();
    
?>

<?php 
    require("common/footer.php");
?>
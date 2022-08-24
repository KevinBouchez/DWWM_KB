<?php

    require_once("class/batiment.class.php");
    require_once("class/maison.class.php");
    require("common/header.php");
    require("common/menu.php");

?>

<h1>Batiments & Maisons</h1>

<?php

    $maison = new Maison(Maison::MAISON," Maison Temoin "," 2 rue pipo ",6);
    $batiment = new Batiment(Batiment::BATIMENT," Batiment Temoin "," 3 rue popi ");
    echo $maison->__toString();
    echo "<br/><br/>--------------------------------------<br/><br/>";
    echo $batiment->__toString();

?>

<?php 
    require("common/footer.php");
?>

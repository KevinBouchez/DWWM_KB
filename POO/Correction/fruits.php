<?php

    require_once("class/fruits.class.php");
    require("common/header.php");
    require("common/menu.php");

?>

<h1>Page des Fruits</h1>

<?php

$pomme1 = new Fruits(Fruits::POMME,150);
$pomme2 = new Fruits(Fruits::POMME,130);
$pomme3 = new Fruits(Fruits::POMME,160);
$cerise1 = new Fruits(Fruits::CERISE,15);
$cerise2 = new Fruits(Fruits::CERISE,10);
$cerise3 = new Fruits(Fruits::CERISE,20);
$cerise4 = new Fruits(Fruits::CERISE,10);

$fruits = [$pomme1,$pomme2,$pomme3,$cerise1,$cerise2,$cerise3,$cerise4];

foreach($fruits as $value){
    echo $value;
    echo "<br/>*****************************************<br/>";
}

?>

<?php 
    require("common/footer.php");
?>
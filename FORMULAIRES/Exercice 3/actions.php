<?php
$a= $_POST["chiffre1"];
$b= $_POST["chiffre2"];

for($i=1;$i<=$b;$i++){
    $total = $i * $a;
    if("Afficher la table choisie"){
        echo $a . ' x ' . $i . ' = ' . $total . '<br>';
    }
}
?>

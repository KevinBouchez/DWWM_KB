<?php

$PrixHT = $_POST["PrixHT"];
$TVA = $_POST["TVA"];

$taux = $PrixHT * $TVA / 100;
$PrixTTC = $PrixHT + $taux;

    echo "Le prix TTC est : $PrixTTC "."€"."<br/>";
    echo "Le montant de la TVA est : $taux "."€";
    
?>

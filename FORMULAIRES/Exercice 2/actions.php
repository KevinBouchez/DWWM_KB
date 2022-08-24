<?php
if( isset($_POST["nombre1"]) AND isset ($_POST["menu"]) AND isset ($_POST["nombre2"]))
{

$numero1 = htmlspecialchars($_POST["nombre1"]);
$numero2 = htmlspecialchars($_POST["nombre2"]);
$menu = htmlspecialchars($_POST["menu"]);



if($numero1 != NULL AND $numero2 != NULL ){
    if($menu == "divi" AND $numero2 == 0 ){
        echo " on ne peut pas diviser par 0 voyons !!!";
    }
    else
    {
        if( $menu == "add"){
            $resultat = $numero1 + $numero2 ;
            echo 'Total : ' . $resultat;
        }
        if($menu == "sous"){
            $resultat = $numero1 - $numero2 ;
            echo 'Total : '. $resultat ;
        }
        if ($menu == "divi"){
            $resultat = $numero1 / $numero2;
            echo 'Total : ' . $resultat ;
        }
        if( $menu == "multi"){
            $resultat = $numero1 * $numero2;
            echo 'Total : ' . $resultat;
        }
    }
}
else{
    echo 'Veuiller remplir tout les champs ! ';
}
}
?>
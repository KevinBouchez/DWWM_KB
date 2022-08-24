<?php

$montant = htmlspecialchars($_POST["montant"]);
$resultat = htmlspecialchars($_POST["resultat"]);
$menu = htmlspecialchars($_POST["menu"]);

if($menu == "livre"){
    $resultat = $montant * 0.87;
}

if($menu == "dollar"){
    $resultat = $montant * 1.05;
}


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
    <form action="actions.php" method="post">
    Montant : <input type="text" name="montant" placeholder="Montant"/> 
    
    Convertire : <select name="menu" onchange="form.sumbit">
                    <option value="choix">Choix</option>
                    <option value="dollar">$</option>
                    <option value="livre">£</option>
                </select>

    Résultat : <input type="" name="resultat" value=<?php echo $resultat; ?> >
    <input type="submit" value="CONVERTIRE"/>
    </form>
    
</body>
</html>


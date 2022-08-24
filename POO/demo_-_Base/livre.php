<?php

    require_once("class/livre.class.php");
    require("common/header.php");
    require("common/menu.php");

?>

<h1>Livres</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="livre.php" method="post">
    <p>
        Titre du livre : <input type="text" name="titre" placeholder="Titre du livre"/>
        Nom de l'auteur : <input type="text" name="nom" placeholder="Nom de l'auteur"/>
        Prenom de l'auteur : <input type="text" name="prenom" placeholder="Prénom de l'auteur"/>
        Prix du livre : <input type="text" name="prix" placeholder="Prix du livre"/>
        <input type="submit" value="Validé"/> <input type="reset" value="Reset"></p>
    </form>
</body>
</html>

<?php

    //Création
    $l1 = new Livre("livre.png",$_POST['titre'],$_POST['nom'],$_POST['prenom'],$_POST['prix']." €");
    $l1->afficherImageLivre();
    echo "<br/>----------------------------------------------------------------------------<br/><br/>";
    
?>

<?php 
    require("common/footer.php");
?>

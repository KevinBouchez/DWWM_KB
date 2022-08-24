<?php

    require_once("class/livre.class.php");
    require("common/header.php");
    require("common/menu.php");

?>

<h1>Page Livres</h1>

<!-- <form action="livre.php" method="$_POST">
    <input type="text" name="titre" placeholder="Titre du livre">
    <input type="text" name="nom" placeholder="Nom de l'auteur">
    <input type="text" name="prenom" placeholder="Prenom de l'auteur">
    <input type="text" name="prix" placeholder="Prix du livre">
    <input type="submit" name="btn" value="OK">
</form><br/> -->

<?php

    //Création
    $l1 = new Livre("livre.png","La sagesse du psychopath","Dutton","Kevin",15.90."€");
    $l1->afficherImageLivre();

    $l2 = new Livre("livre.png","Madame Bovary","Flaubert","Gustave",4.10."€");
    $l2->afficherImageLivre();

    $l3 = new Livre("livre.png","Labyrinthes","Thilliez","Franck",21.90."€");
    $l3->afficherImageLivre();

    $l4 = new Livre("livre.png","Le dieu infernal","Briggs","Elizabeth",15.81."€");
    $l4->afficherImageLivre();

?>

<?php 
    require("common/footer.php");
?>
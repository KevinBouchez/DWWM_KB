<?php
$menu=$_POST["menu"];

if($menu == "monsieur"){
    echo "Civilité : Monsieur"."<br /><br />";
}

if($menu == "madame"){
    echo "Civilité : Madame"."<br /><br />";
}

echo " NOM : ".htmlspecialchars($_POST["nom"])."<br />";
echo " PRENOM : ".htmlspecialchars($_POST["prenom"])."<br />";
echo " AGE : ".htmlspecialchars($_POST["age"])."<br /><br />";
echo " ADRESSE : ".htmlspecialchars($_POST["adresse"])."<br />";
echo " VILLE : ".htmlspecialchars($_POST["ville"])."<br />";
echo " CODE POSTALLE : ".htmlspecialchars($_POST["cp"])."<br /><br />";
echo " EMAIL : ".htmlspecialchars($_POST["email"])."<br />";
echo " TELEPHONE : ".htmlspecialchars($_POST["tel"])."<br /><br />";


echo " SITUATION : ".$_POST["celib"]."<br /><br />";
echo " QUELLE LANGUE PARLE TU ? "."<br />";
echo " Vous parler : " . $_POST["fr"]."</b><br>";
echo " Vous parler : " . $_POST["en"]."<br /><br />";
echo " AIME TU LE POISSON : ".$_POST["poisson"]."<br />";

?>
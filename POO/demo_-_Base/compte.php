<?php

    require_once("class/compte.class.php");
    require("common/header.php");
    require("common/menu.php");

?>

<h1>Comptes Bancaires</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="compte.php" method="post">
    <p>
        Depot : <input type="text" name="depot" placeholder="Montant a deposer"/>
        <input type="submit" value="Validé"/></p>
    </form>
    <form action="compte.php" method="post">
    <p>
        Retrait : <input type="text" name="retrait" placeholder="Montant a retirer"/>
        <input type="submit" name="submit" value="-"/></p>
    </form>
</body>
</html>

<?php

$depot=$_POST["depot"];
$retrait=$_POST["retrait"];

if($_POST['submit']=='+'){
    echo$calc->add();
$c1 = new Comptes("banque.png",$depot,Comptes::TAUX,2);
 }
    $compte = Comptes::listComptes();

    foreach($compte as $value){
        echo "<br/><br/>";
        $value->afficherImageBanque();
        echo "<br/><br/>--------------------------------------<br/><br/>";
    }

?>

<?php 
    require("common/footer.php");
?>
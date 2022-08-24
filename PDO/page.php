<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
    <h1>Merci pour la connexion</h1>
</body>
</html>

<?php
require 'database';

$rep = $pdo->query('SELECT * FROM Artistes');
$don = $rep->fetch();
while($don = $rep->fetch()){
    echo $don['code_artiste']." ".$don['nom_artiste']." ".$don['prenom_artiste']." ".$don['password'].'<br>';
}

?>
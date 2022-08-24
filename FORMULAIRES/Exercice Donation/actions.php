<?php



$content = " NOM : ".$_POST["nom"]. " |" ;
$content .=  " AGE : ".$_POST["age"]." Ans"." | ";
$content .=  " EMAIL : ".$_POST["email"]." | ";
$content .=  " DON : ".$_POST["don"]." €"."\n";

file_put_contents('resultat.txt', $content, FILE_APPEND);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>BIENVENUE SUR LE SITE DE DONNATION</h1>

<section>

    <form action="actions.php" method="post">

        <div>

            <p> NOM  : <input class="zonetext1" type="text" name="nom" placeholder="Nom" required/><br/></p>
            <p> AGE  : <input class="zonetext2" type="text" name="age" placeholder="Age" required/><br/></p>
            <p> EMAIL : <input class="zonetext3" type="email" name="email" placeholder="Email" required/></p>
            <p> DON  : <input class="zonetext4" type="text" name="don" placeholder="€" required/><br/></p></p>
            <p><input class="btn" type="submit" value="Validé" onclick="return action='page.php' "/></p>

        </div>

    </form>
    
</section>   
</body>
</html>
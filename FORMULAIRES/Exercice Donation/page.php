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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section>
        <div class="div1">
            <h1>MERCI POUR LE DON A LA PROCHAINE</h1>
           
            <div class="img1"><img src="../Exercice Donation/pouce.png" alt=""></div>
        
        </div>
        
    </section>
</body>
</html>
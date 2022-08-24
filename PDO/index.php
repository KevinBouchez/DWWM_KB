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
        <h1>CONNEXION</h1>
<section>
    <div>
       
        <form class="forme" action="index.php" method="post">
            <p>Email: <input type="email" name="email" /></p>
            <p>Password : <input type="password" name="password" /></p>
            <p><input class="btn1" type="submit" name="btn1" value="Connexion"/> <input class="btn1" type="submit" name="btn1" value="Inscription" onclick="return action='add.php'"/></p>
            
        </form>
    </div>
</section>
</body>
</html>

<?php
require 'database.php';


    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        var_dump($email);
        var_dump($password);
    
        $req = $pdo->prepare('SELECT * FROM client WHERE email = :email');
        $req->bindValue('email', $email);
        $req->execute();

        //Est-ce que c'est le bon utilisateur avec la bonne adresse 
        $res = $req->fetch(PDO::FETCH_ASSOC);
        
        var_dump($res);
        
        if ($res) {

            //C'est qu'on récupère de la requête BDD
            $passwordHash = $res['password'];

            //On vérifie si le mot de passe correspond bien a celui que l'on connait
            if (password_verify($password, $passwordHash)) {
                header ("Location: page.php"); 
                exit(); 
            } else {
                echo "Identifiants invalides";
            }
        } else {
            echo "Identifiants invalides";
        }
    }

?>
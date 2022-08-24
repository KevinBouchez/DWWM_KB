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
        <h1>INSCRIS TOI</h1>
<section>
    <div>
       
        <form class="forme" action="add.php" method="post">
            <p>Email: <input type="email" name="email" /></p>
            <p>Password : <input type="password" name="password" /></p>
            <p><input class="btn1" type="submit" name="btn1" value="Valide"/> <input class="btn2" type="submit" name="btn1" value="Retour" onclick="return action='index.php'"/></p>
            
        </form>
    </div>
</section>
</body>
</html>

<?php
require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 

    var_dump($email);
    var_dump($password);

    $req = $pdo->prepare("INSERT INTO client(email,password) VALUES (:email, :password)");
    $req->bindValue('email', $email);
    $req->bindValue('password', $password);
    $res = $req->execute();

    if ($res) {
        header ("Location: index.php"); 
        exit(); 
    }
}



?>
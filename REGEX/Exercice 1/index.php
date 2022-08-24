<?php 

@$btn = $_POST['btn'];
@$pass = $_POST['pass'];
$message = "";
if(isset($btn)){
    if(preg_match('#a', $pass))
    $message="<li style ='color:green'> C'est ok pour moi </li>";
    else
    $message= "<li style ='color:red'> T'es mauvais  </li>";
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
    <form action="index.php" method="post">

    <input type="text" name="pass" value="<?=$pass?>">
    <input type="submit" name="btn" value="valider">

    </form>
    <div>
        <?php echo $message ?>
    </div>
</body>
</html>
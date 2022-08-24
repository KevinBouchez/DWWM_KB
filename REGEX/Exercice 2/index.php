<?php 

@$menufable = $_POST['menu-fable'];
@$menuregex = $_POST['menu-regex'];
@$btn = $_POST['btn'];
$message = "";
if(isset($btn)){
    if(preg_match('[a-zA-Z]', $menufable))
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
        <select name="menu-fable" id="">
            <option value="<?=$menufable?>">Choisi la phrase de la fable</option>
            <option value="1">Maître Corbeau, sur un arbre perché,</option>
            <option value="2">Tenait en son bec un fromage.</option>
            <option value="3">Maître Renard, par l'odeur alléché,</option>
            <option value="4">Lui tint à peu près ce langage :</option>
            <option value="5">Et bonjour, Monsieur du Corbeau,</option>
            <option value="6">Que vous êtes joli ! que vous me semblez beau !</option>
            <option value="7">Sans mentir, si votre ramage</option>
            <option value="8">Se rapporte à votre plumage,</option>
            <option value="9">Vous êtes le Phénix des hôtes de ces bois.</option>
            <option value="10">À ces mots le Corbeau ne se sent pas de joie,</option>
            <option value="11">Et pour montrer sa belle voix,</option>
            <option value="12">Il ouvre un large bec, laisse tomber sa proie.</option>
            <option value="13">Le Renard s'en saisit, et dit : Mon bon Monsieur,</option>
            <option value="14">Apprenez que tout flatteur</option>
            <option value="15">Vit aux dépens de celui qui l'écoute.</option>
            <option value="16">Cette leçon vaut bien un fromage sans doute.</option>
            <option value="17">Le Corbeau honteux et confus</option>
            <option value="18">Jura, mais un peu tard, qu'on ne l'y prendrait plus.</option>
        </select>
        <select name="menu-regex" id="">
            <option value="reg-0">Choisi ton REGEX</option>
            <option value="reg-1">Le premier mot de chaque ligne</option>
            <option value="reg-2">Les mots qui commencent par une majuscule mais qui ne sont pas en début de ligne</option>
            <option value="reg-3">Les mots de plus de 8 lettres</option>
            <option value="reg-4">Les mots qui ont au moins 3 voyelles d’affilées</option>
            <option value="reg-5">Les mots qui n’ont pas d’accent</option>
            <option value="reg-6">Les mots qui contiennent un « x »</option>
        </select>
        <input type="submit" name="btn" value="Validé">
    </form>
    <div>
        <?php echo $message ?>
    </div>
</body>
</html>
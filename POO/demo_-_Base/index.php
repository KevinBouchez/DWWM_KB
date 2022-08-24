<?php ob_start() ?>
<h1>Bienvenue sur le site dédié à la POO sur PHP</h1>
<?php
     require("common/header.php"); 
?>

<?php $content = ob_get_clean();
    require("common/menu.php"); 
    require("common/footer.php");
?>
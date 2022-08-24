    <?php
    require('contact.php');
    
    $retour = mail('kevin.bouchez.59@hotmail.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: webmaster@monsite.fr');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
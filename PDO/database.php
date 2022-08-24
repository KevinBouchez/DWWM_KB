<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=clients","kevin","");
}catch(PDOException $e){
    echo $e->getMessage();
}

?>
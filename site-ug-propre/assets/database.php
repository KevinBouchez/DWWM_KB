<?php

try
{
    $pdo = new PDO("mysql:host=localhost;dbname=UG-Site","kevin","");
}
    catch(PDOException $e){
    echo $e->getMessage();
}


/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'kevin');
define('DB_PASSWORD', '');
define('DB_NAME', 'UG-Site');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
<?php 

$servername = 'localhost';
$username = 'root';
$password = 'root';


try {

$db = new PDO("mysql:host=$servername; dbname=StreamingWars", $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo 'Connexion à la BDD réussie !';

} catch(PDOException $e) {
    echo 'Erreur : ' .$e->getMessage();
}



?>

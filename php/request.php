<?php
try
{
	$db = new PDO('
    mysql:host=localhost;
    dbname=StreamingWars;
    charset=utf8',
    'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>
<?php
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=equipe1h17', 'equipe1h17', 'rogue-animal');
}
catch(PDOException $e){
    echo "erreur de connexion";
}
?>

<?php
//<!-- Se code me permet de me connecter à la base de donné de plus si il y a une erreur se code m'affiche mon message personnalisé ou l'erreur qui est en cours; j'appel cette fonction à chauqe fois que j'ai besoins de me connecter à ma base de données-->
try {
    // Permet de donné l'acces à la base de donnée
    $db = new PDO('mysql:host=localhost;dbname=Portfolio', 'Victor', 'p@ssw0rd');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e) {
    echo 'Impossible de se connecter à la base de donnée';
    echo $e->getMessage();
    die();
}

<?php
// $auth = 0;
// error_reporting(E_ALL);
// ini_set('display_errors', 1);



// je mets les inclusion du code php avant le code html pour éviter les problèmes au niveau des sessions

include 'lib/includes.php';
// tout ces fichier sont dans le fichier 'lib/includes.php'
// include 'lib/constants.php';
// include 'lib/db.php';
// include 'lib/auth.php';


include 'phpIndexInclude/header.php';


include 'lib/debug.php';


include 'phpIndexInclude/navbar.php';






// on utilise notre objet PDO $db et on y met notre requête qui va nous permettre de selectionner tout dans la table users dans le but de récupérer un premier utilisateur
$select = $db->query('SELECT * FROM users');
// je choisis la méthode de récupération. j'ai le choix entre FETCH_OBJ $user->id et FETCH_ASSOC $users['id];
$select->setFetchMode(PDO::FETCH_OBJ);
// affiche la variable $select sur la page
// var_dump($select->fetchAll());






include 'phpIndexInclude/presentation.php';
include 'phpIndexInclude/navbarEnBas.php';

include 'phpIndexInclude/footer.php';

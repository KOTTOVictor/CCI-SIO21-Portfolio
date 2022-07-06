<?php
session_start();
// ^ j'ai besoin de cette commande pour initialiser des sessions

// session_unset();
// var_dump($_SESSION['Auth']);
// var_dump($_SESSION['id']);
// var_dump($_SESSION);


/*<!-- ce fichier permet de gérer l'authentification. Il va bloqué.  Cet à dire que si ce fichier est inclus il interdira au gens de se connecté. permet de vérifier qu'un utilisateu est authentifier ou non.
Avant d'utiliser la SESSION en php il faut d'abord initialiser. session_start();
permet d'utiliser $_SESSION  -->
*/
// const BASE_URL = 'http://dev.vtr-solution.ovh/';
// const BASE_PHP = '/var/www/portfoliov1/';



// Si utilisateur ne s'est pas authentifier alors il est automatiquement redirigé vers login.php
if (!isset($auth)) {

    if (!isset($_SESSION['Auth']['id'])) {
        header('Location:' . WEBROOT . 'login.php');
        // http_response_code(300);
        die();
    }
}


// Non defini
// var_dump($auth);

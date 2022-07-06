<?php
//<!-- ce fichier me permet de definier des nouvemlles ocnstantes -->

// const BASE_URL = 'http://dev.vtr-solution.ovh/';
// const BASE_PHP = '/var/www/portfoliov1/';

// $url = $_SERVER['REQUEST_URI'];


// $url = explode('portfoliov1', $_SERVER['REQUEST_URI']);

// var_dump($url);

define(
    // 'WEBROOT',
    // basename
    // je met dirname si je veux que le chin du fichier s'arrête au dosier qui le contient.
    // (dirname
    // (
    // ($_SERVER['SERVER_NAME']) . "/")

    'WEBROOT',
    (dirname($_SERVER['SERVER_NAME']) . "/")
);
var_dump(WEBROOT);

// define(
//     'WEBROOT',
//     $url[0] . "portfoliov1/"
// );


// dirname($_SERVER['SCRIPT_NAME']) . '/')

// var_dump(WEBROOT);

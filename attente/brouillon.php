dquadn je clic sur id wrap
id navdecote
right +1000px











<?php
<?php
//<!-- ce fichier me permet de definier des nouvemlles ocnstantes -->

// const BASE_URL = 'http://dev.vtr-solution.ovh/';
// const BASE_PHP = '/var/www/portfoliov1/';

// $url = $_SERVER['REQUEST_URI'];



$directory = (basename(dirname(dirname(__FILE__))));
var_dump($directory);
// 'portfoliov1'


$url = explode($directory, $_SERVER['REQUEST_URI']);
var_dump($url);
// '/admin/index.php'

define(
    // 'WEBROOT',
    // basename
    // je met dirname si je veux que le chin du fichier s'arrête au dosier qui le contient.
    // (dirname
    // (
    // ($_SERVER['SERVER_NAME']) . "/")

    'WEBROOT',
    // (dirname($_SERVER['SERVER_NAME']) . "/")
    ($directory) . "/"
);
var_dump(basename(WEBROOT));


// var_dump(WEBROOT);






var_dump($url);

var_dump(dirname(dirname(__FILE__)));


define(
// 'WEBROOT',
// basename
// je met dirname si je veux que le chin du fichier s'arrête au dosier qui le contient.
// (dirname
// (
// ($_SERVER['SERVER_NAME']) . "/")



'WEBROOT',
(dirname($_SERVER['DOCUMENT_ROOT']) . "/")
);





$directory = (basename(dirname(dirname(__FILE__))));

$url = explode($directory, $_SERVER['REQUEST_URI']);

var_dump($url);
var_dump($directory);


define(
// 'WEBROOT',
// basename
// je met dirname si je veux que le chin du fichier s'arrête au dosier qui le contient.
// (dirname
// (
// ($_SERVER['SERVER_NAME']) . "/")



'WEBROOT',
(dirname($_SERVER['DOCUMENT_ROOT']) . "/")
);







<p class="modif" style="
    color: white;
    font-size: 2em;
    font-weight: bolder;
">Modifier</p>




  font-weight: bolder;












// define(
// // 'WEBROOT',
// // basename
// // je met dirname si je veux que le chin du fichier s'arrête au dosier qui le contient.
// // (dirname
// // (
// // ($_SERVER['SERVER_NAME']) . "/")



// 'WEBROOT',
// ($url[0] . 'portfoliov1/')
// );


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
<?php
// Me redirige vers index.php qui me redirige vers logout.php si je ne me suis pas authentifié en tant qu'admin

$auth = 0;
include('lib/includes.php');
$_SESSION = array();
header('Location:' . WEBROOT . 'index.php');

// var_dump(header());
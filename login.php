<?php

$auth = 0;

// const BASE_URL = 'http://dev.vtr-solution.ovh/';
// const BASE_PHP = '/var/www/portfoliov1/';


include 'phpIndexInclude/header.php';
include 'phpIndexInclude/navbar.php';




include  'lib/includes.php';


// TRAITEMENT DU FORMULAIRE

if (isset($_POST['username']) && isset($_POST['password'])) {
    // permet de protéger la chaine de charactère pour l'id. la fonction quote permet à php de me retourné les valeur entré sans les charactères indésirale
    $username = $db->quote($_POST['username']);
    // la fonction sha1 ne retourne jamais de guillemet
    $password = sha1($_POST['password']);
    // $sql = "SELECT * FROM users WHERE username='{$_POST['username']}'";
    // $sql = "SELECT * FROM users WHERE username=$username AND password=$password ";
    $select = $db->query("SELECT * FROM users WHERE username=$username AND password=$password");
    // var_dump($selet->rowCount());
    // var_dump ($sql);
    //var_dump($_POST);
    // $select = $db->query("SELECT * FROM users WHERE username=$username AND password='$password'");

    // if ($select->rowCount() > 0) {
    //     $_SESSION['Auth'] = $select->fetch();
    //     setFlash('');


    //     header('Location:' . WEBROOT . 'admin/index.php');
    //     die();
    // }
}

// var_dump($select->rowCount());

// var_dump($_SESSION);

// Pour afficher ce qui se passe lorsque quelque chose a été posté (losque je ta sur "se connecter")
var_dump($_POST);
// $_POST

?>



<!-- Post permet d'utilisr la methode POST pour ne pas que les information id et mtp s'affiche dans la bar de recher via la methode GET par défaut. Pour afficher les information de POST il faut déja le definir dans la methode du formulaire pui var_dump($_POST); -->
<!-- Si $POST username est defni dans ce ce cas là on va afficher $_POST username -->
<form action="#" method="POST">
    <div class="">
        <label for="username">Nom d'utilisateur</label>
        <?php
        // renvoie a la fonction si username est entré alors username reste (cotenu dans ./lib/form.php)
        echo input('username');
        ?>
    </div>
    <div class="">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="">Se connecter</button>
</form>




<?php
include './lib/debug.php';
include  'phpIndexInclude/footer.php';
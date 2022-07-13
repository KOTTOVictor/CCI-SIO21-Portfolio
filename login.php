<?php

$auth = 0;

// const BASE_URL = 'http://dev.vtr-solution.ovh/';
// const BASE_PHP = '/var/www/portfoliov1/';



include  'lib/includes.php';



// TRAITEMENT DU FORMULAIRE

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $db->quote($_POST['username']);
    $password = sha1($_POST['password']);

    // $sql = "SELECT * FROM users WHERE username='{$_POST['username']}'";
    // var_dump($sql);

    $select = $db->query("SELECT * FROM users WHERE username=$username AND password='$password'");
    // var_dump($select->rowCount());

    // si rowcount suppérieur à zero ça veut dire qu'un utilisateur est connecté
    if ($select->rowCount() > 0) {
        $_SESSION['Auth'] = $select->fetch();
        header('Location:' . WEBROOT . 'admin/index.php');

        setFlash('Vous êtes maintenant connecté');

        die();
    }
}

// Inclusion du header
include 'phpIndexInclude/header.php';
include 'phpIndexInclude/admin_navbar.php';

// var_dump($select->rowCount());

// var_dump($_SESSION);

// Pour afficher ce qui se passe lorsque quelque chose a été posté (losque je ta sur "se connecter")
// var_dump($_POST);
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
// include './lib/debug.php';
include  'phpIndexInclude/footer.php';
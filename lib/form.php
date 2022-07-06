<?php
// Si le cham est rempli alors je retient le dernier texte entré si non je n'affiche rien
function input($id)
{
    $value = isset($_POST[$id]) ? $_POST[$id] : '';
    return "<input type='text' class='formInput' id='$id' name='username' value='$value'>";
};

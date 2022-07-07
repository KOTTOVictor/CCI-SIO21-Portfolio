<?php
function flash()
{
    if (isset($_SESSION['Flash'])) {
        extract($_SESSION['Flash']);
        // detruit le message si jamais la pag est actualisée
        // unset($_SESSION['Flash']);
        return "<div class='alert alert-$type'>$message</div>";
        // return "<div class=alert>$message</div>";
    }
    // else {
    //     return "Hello word!";
    // }
    // die();
}

function setFlash($message, $type = 'success')
{
    $_SESSION['Flash']['message'] = $message;
    $_SESSION['Flash']['type'] = $type;
}


// function setFlash($message, $type = 'success')
// {
//     $_SESSION['Flash']['message'] = $message;
//     $_SESSION['Flash']['type'] = $type;
// };

// ------------------

// function flash($message, $type = 'success')
// {
//     return "<div class='alert alert-type'>$message
//     </div>";
// }

// {
//     if (isset($_SESSION['Fash'])) {
//         extract($_SESSION['Flash']);
//         unset($_SESSION['Flash']);
//         return "<div class='alert alert-$type'>$message</div>";
//     }
// };
<?php

include('http_codes.php');
include('http_mime_types.php');
const HTTP_CONTENT_TYPE  = 'Content-Type';
const HTTP_REFRESH = 'Refresh';
const HTTP_LOCATION = 'Location';
const HTTP_LANGUAGE = 'Content-Language';
const LANG_FR = 'fr-FR';
const LANG_EN = 'en-GB';

/*
 * http_response
 *      $code (int, 3 chiffres) : code réponse http
 *      $content_type (string)  : content-type
 *      $nocache (boolean)      : true => décactiver le cache
 *      $body (string)          : corps du message
 *      $redirect_url (string)  : redirection
 *      $refresh_s (int)        : délai pour refresh
 *      $stop_script (bool)     : true=>stop
*/
function http_response(
    $body = '',
    $content_type = HTML,
    $code = HTTP_OK,
    $nocache = true,
    $redirect_url = '',
    $refresh_s = -1,
    $lang = LANG_FR,
    $stop_script = true
) {
    http_response_code($code);
    if ($nocache) {
        header("Expires: 0");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
    }
    if (strlen($redirect_url) > 0 && $refresh_s <= 0) {
        if ($code < 300 || $code > 300) {
            http_response_code(HTTP_MULTIPLE_CHOICES);
        }
        header(HTTP_LOCATION . ': ' . $redirect_url);
    }
    if ($refresh_s > 0) {
        $refresh =  HTTP_REFRESH . ': ' . $refresh_s;
        if (strlen($redirect_url) > 0) {
            if ($code < 300 || $code > 300) {
                http_response_code(HTTP_MULTIPLE_CHOICES);
            }
            $refresh .= ' url= ' . $redirect_url;
        }
        header($refresh);
    }
    if (strlen($lang) > 0) {
        header(HTTP_LANGUAGE . ': ' . $lang);
    }

    if (strlen($content_type) > 0) {
        header(HTTP_CONTENT_TYPE . ': ' . $content_type);
    }
    echo $body;
    if ($stop_script)
        die();
}

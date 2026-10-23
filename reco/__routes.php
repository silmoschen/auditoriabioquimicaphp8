<?php

if (!defined('RECO_ROUTES_READY')) {
    define('RECO_ROUTES_READY', true);

    $docRoot = rtrim(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']), '/');
    if (substr($docRoot, -5) !== '/reco') {
        $docRoot .= '/reco';
    }
    $_SERVER['DOCUMENT_ROOT'] = $docRoot;
    $ruta = 'reco';
}

?>

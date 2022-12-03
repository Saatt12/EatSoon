<?php
error_reporting(E_ALL ^ E_NOTICE);
require './functions/session.php';
require './config/env.php';
if (!$_SESSION){
    iniSesion();
}

if (isset($_SESSION) && session__get("user")){
    destruirSesion();
}
$url = RUTA.'/index.php';
while (ob_get_status())
{
    ob_end_clean();
}
header( "Location: $url" );
exit();
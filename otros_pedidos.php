<?php
error_reporting(E_ALL ^ E_NOTICE);
require './functions/session.php';
require './config/env.php';
require './config/conexion.php';
require './functions/otrosPedidos.php';
require './functions/product.php';
require './functions/carrito.php';
if (!$_SESSION){
    iniSesion();
}


$con = conexion($db_config);
$pagina;
if(isset($_GET['page'])){
    $pagina =  (int)$_GET['page'];
}else{
    $pagina = 1;
}
$actual;
if($pagina > 1){
    // $actual = ($pagina-1)*$proPage;
    $actual = ($pagina * $proPage)-$proPage;
}else{
    $actual = 0;
}


//$productos = getProducts($con);
//limitarProductos($con); 
$productos = getProductoPage($con,$actual,$proPage);
redireccionar($productos,RUTA);
$numPaginas = getCantPaginas($con,$actual,$proPage);
$enCarrito = [];
$contadorCarrito = 0;
if ($_SESSION['usuario_anonimo']!=null) {
    $contadorCarrito = totalProductosEnCarrito($con, ['code' => session__get("usuario_anonimo")]);
    $enCarrito = enCarrito($con, ['code' => session__get("usuario_anonimo")]);
}
$otrosPedidos = mostrarOtrosPedidos($con);
$title = "Inicio Pagina"; // Nombre del title
$header='./templates/header.template.php';
$page = './pages/otrosPedidos.page.php'; // Nombre y ruta de la pagina
require './templates/otrosPedidos.template.php';
require './templates/carrito.template.php';
exit();
?>
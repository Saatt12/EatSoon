<?php
error_reporting(E_ALL ^ E_NOTICE);
require './functions/session.php';
require './config/env.php';
require './config/conexion.php';
require './functions/pedido.php';
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
$productos = getProductoPage($con,$actual,$proPage);
redireccionar($productos,RUTA);
$numPaginas = getCantPaginas($con,$actual,$proPage);
$title = "Historial"; // Nombre del title
$enCarrito = [];
$contadorCarrito = 0;
if ($_SESSION['usuario_anonimo']!=null) {
   $contadorCarrito = totalProductosEnCarrito($con, ['code' => session__get("usuario_anonimo")]);
   $enCarrito = enCarrito($con, ['code' => session__get("usuario_anonimo")]);
}
$pedidos = mostrarHistorial($con,"comprado");
$header='./templates/header.template.php';
$page = './pages/historial-compras.page.php'; // Nombre y ruta de la pagina
require './templates/homeUsuarioCreado.template.php'; // Require template
require './templates/carrito.template.php';
exit();
?>
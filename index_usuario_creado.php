<?php
    error_reporting(E_ALL ^ E_NOTICE);
    require './functions/session.php';
    require './config/env.php';
    require './config/conexion.php';
    require './functions/product.php';
    require './functions/carrito.php';
if (!$_SESSION){
    iniSesion();
}

    
    $con = conexion($db_config);
    
    $folder_save = 'storage/'; // carpeta de donde se eliminaran tus imagenes

    deleteExpireds($con, $folder_save); //eliminar productos expirados
   
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
    $title = "Inicio Pagina"; // Nombre del title
    $header='./templates/header.template.php';
    $page = './pages/inicio.page.php'; // Nombre y ruta de la pagina
    require './templates/homeUsuarioCreado.template.php'; // Require template
    require './templates/carrito.template.php';
exit();
?>
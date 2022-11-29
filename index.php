<?php

    require './config/env.php';
    require './config/conexion.php';
    require './functions/product.php';



    
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

    

    $title = "Inicio Pagina"; // Nombre del title

    $page = './pages/inicio.page.php'; // Nombre y ruta de la pagina
    require './templates/home.template.php'; // Require template
    require './templates/carrito.template.php';
?>
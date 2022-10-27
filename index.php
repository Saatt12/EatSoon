<?php

    require './config/env.php';
    require './config/conexion.php';
    require './functions/product.php';


    $con = conexion($db_config);
    
    
    $productos = getProducts($con);
    

    $title = "Inicio Pagina"; // Nombre del title

    $page = './pages/inicio.page.php'; // Nombre y ruta de la pagina
    require './templates/home.template.php'; // Require template

?>
<?php

    require './config/env.php';
    require './config/conexion.php';
    require './functions/cuenta.php'; 
//  require './functions/file.php';

    $con = conexion($db_config);
    

    /** Verificar si se envio por el metodo POST */
    if($_SERVER['REQUEST_METHOD'] == 'POST'){    
        $data = [
            'nombre_producto' => $_POST['nombre_producto'],
            'cantidad' => $_POST['cantidad'],
            'precio_producto' => $_POST['precio_producto'],
            'fecha_caducidad' => $_POST['fecha_caducidad'],
            'desc_producto' => $_POST['desc_producto'],
            'imagen' => $_FILES['imagen']
        ];



    $create = createUser($con, $data);

    if(!$create){
         echo "El producto ingresado ya existe";
    }

        header('Location: crear.php');
    }
    
    
    $title = "Creacion de Cuenta"; // Nombre del title

    $page = './pages/crearCuenta.pages.php';  // Nombre y ruta de la pagina
    require './templates/home.template.php'; // Require template

?>
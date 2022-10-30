<?php

    require './config/env.php';
    require './config/conexion.php';
    require './functions/product.php';
    require './functions/file.php';

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

        $folder_save = 'storage/'; // carpeta donde quieres guardar tus imagenes

        $create = createProduct($con, $data, $folder_save, function($ruta, $file){ 
            return uploadFile($ruta, $file); //manipular archivo
        });

        if(!$create){
            echo "El producto ingresado ya existe";
        }

        header('Location: registrar.php');
    }
    
    
    $title = "Registrar Producto"; // Nombre del title

    $page = './pages/registro.page.php';  // Nombre y ruta de la pagina
    require './templates/simple.template.php'; // Require template

?>
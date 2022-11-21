<?php

    require './config/env.php';
    require './config/conexion.php';
    require './functions/loginf.php';
    require './functions/file.php';

    $con = conexion($db_config);

    /** Verificar si se envio por el metodo POST */
    if($_SERVER['REQUEST_METHOD'] == 'POST'){    
        $data = [
            'usuario' => $_POST['usuario'],
            'password' => $_POST['password']
        ];

        loginUser($con, $data);
    }
    
    
    $title = "Login"; // Nombre del title

    $page = './pages/login.page.php';  // Nombre y ruta de la pagina.
    require './templates/login.template.php'; // Require template
?>
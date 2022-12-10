<?php
error_reporting(E_ALL ^ E_NOTICE);
    require './functions/session.php';
    require './config/env.php';
    require './config/conexion.php';
    require './functions/loginf.php';
    require './functions/file.php';
if (!$_SESSION){
    iniSesion();
}
    $con = conexion($db_config);

    /** Verificar si se envio por el metodo POST */
    if($_SERVER['REQUEST_METHOD'] == 'POST'){    
        $data = [
            'correo' => $_POST['correo'],
            'password' => $_POST['password']
        ];

        $user=loginUser($con, $data);
        if ($user!=null){
            iniSesion();
            session__set("user",$user['CORREO']);
            session__set("user_id",$user['CI']);
            ob_start();
            $url = RUTA.'/index_usuario_creado.php';
            while (ob_get_status())
            {
                ob_end_clean();
            }
            //header( "Location: $url" );
            echo "<script>window.location = '$url'</script>";
            exit();
        }
    }
    
    
    $title = "Login"; // Nombre del title

    $page = './pages/login.page.php';  // Nombre y ruta de la pagina.
    require './templates/login.template.php'; // Require template
exit();
?>
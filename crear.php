<?php
error_reporting(E_ALL ^ E_NOTICE);
require './functions/session.php';
require './config/env.php';
    require './config/conexion.php';
    require './functions/cuenta.php';
if (!$_SESSION){
    iniSesion();
}
    $con = conexion($db_config);
    
    /** Verificar si se envio por el metodo POST */
    if($_SERVER['REQUEST_METHOD'] == 'POST'){    
        $data = [
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'ci' => $_POST['ci'],
            'direccion' => $_POST['direccion'],
            'telefono' => $_POST['telefono'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'Cpassword' => $_POST['Cpassword']
        ];

        // if($data['password']==$data['Cpassword']){
            
        // }else{
        //     //para mostrar mensaje no crear cuenta
        //     // echo "<script type='text/javascript'>";
        //     // echo "mensajeexito(1)"; 
        //     // echo "</script> ";
        // }

        $create = createUser($con, $data);
        if($create){
           // header('Location: https://youtube.com');
           $url = RUTA.'/login.php?m=Inicia sesion para confirmar tu cuenta';
           while (ob_get_status())
           {
               ob_end_clean();
           }
           //header( "Location: $url" );
           echo "<script>window.location = '$url'</script>";
           
           exit();
        }
    }
    
    $title = "Creacion de Cuenta"; // Nombre del title

    $page = './pages/crearCuenta.pages.php';  // Nombre y ruta de la pagina
    require './templates/crearC.template.php'; // Require template
exit();
?>
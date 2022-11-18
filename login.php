<?php

require './config/env.php';
require './config/conexion.php';
require './functions/loginf.php'; 

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
    if($data['password']==$data['Cpassword']){
        $create = createUser($con, $data);

    }else{
        //para mostrar mensaje no crear cuenta
      
        echo "<script type='text/javascript'>";
        echo "mensajeexito(1)"; 
        echo "</script> ";
      
    }


if(!$create){
     echo "La cuenta ingresado ya existe";
     
}

    header('Location: crear.php');
}
        
    
    $title = "Login"; // Nombre del title

    $page = './pages/login.page.php';  // Nombre y ruta de la pagina
    require './templates/login.template.php'; // Require template

?>
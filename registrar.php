<?php
error_reporting(E_ALL ^ E_NOTICE);
require './functions/session.php';
require './config/env.php';
    require './config/conexion.php';
    require './functions/product.php';
    require './functions/file.php';
if (!$_SESSION){
    iniSesion();
}
    $con = conexion($db_config);
    

    /** Verificar si se envio por el metodo POST */
    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if ($_SESSION['user_id']==null) {
            $message= "Para registrar producto inicie sesion";
            header('Location: registrar.php?m='.$message);
            exit;
        } else {
            $data = [
                'nombre_producto' => $_POST['nombre_producto'],
                'cantidad' => $_POST['cantidad'],
                'precio_producto' => $_POST['precio_producto'],
                'fecha_caducidad' => $_POST['fecha_caducidad'],
                'desc_producto' => $_POST['desc_producto'],
                'imagen' => $_FILES['imagen'],
                'producto_usuario_id' => intval(session__get("user_id"))
            ];
            $folder_save = 'storage/'; // carpeta donde quieres guardar tus imagenes
    
        //var_dump($data);
        
            $create = createProduct($con, $data, $folder_save, function($ruta, $file){ 
                return uploadFile($ruta, $file); //manipular archivo
            });
            $message="";
            if(!$create){
                $message= "El producto ingresado ya existe";
                header('Location: registrar.php?m='.$message);
                exit;
            }else{
                $message= "El producto registrado";
                $url = RUTA.'/index_usuario_creado.php?page=1&m=' . $message;
                while (ob_get_status())
                {
                    ob_end_clean();
                }
                header( "Location: $url" );
                exit();
            }
    
        }

    }
    
    
    $title = "Registrar Producto"; // Nombre del title

    $page = './pages/registro.page.php';  // Nombre y ruta de la pagina
    require './templates/registrarP.template.php'; // Require template
exit();
?>
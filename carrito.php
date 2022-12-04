<?php
error_reporting(E_ALL ^ E_NOTICE);
require './functions/session.php';
require './config/env.php';
require './config/conexion.php';
require './functions/carrito.php';
if (!$_SESSION){
    iniSesion();
}
$con = conexion($db_config);


/** Verificar si se envio por el metodo POST */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'producto_id' => $_POST['producto_id'],
        'usuario_CI' => null,
        'code' => ""
    ];
    if ($_SESSION['usuario_anonimo']==null) {
        iniSesion();
        session__set("usuario_anonimo",getToken(6));
        $data['code'] = session__get("usuario_anonimo");
    } else {
        $data['code'] =session__get("usuario_anonimo");
    }
    switch ($_POST['action']) {
        case 'agregar':
            $create = agregarAlCarrito($con, $data);
            $message = "";
            if (!$create) {
                $message = "Fallo al añadir a carrito";
            } else {
                $message = "Añadido al carrito";
            }
            break;
        case 'delete':
            $data['carrito_id'] = $_POST['carrito_id'];
            $create = eliminarItem($con, $data);
            $message = "";
            if (!$create) {
                $message = "Fallo al eliminar";
            } else {
                $message = "Añadido al carrito";
            }
            break;
        case 'mas':
            $data['carrito_id'] = $_POST['carrito_id'];
            $create = aumentarItem($con, $data);
            $message = "";

            break;
        case 'menos':
            $data['carrito_id'] = $_POST['carrito_id'];
            $create = desminuirItem($con, $data);
            break;
        case 'vaciar':
            $create = vaciarItem($con, $data);
            break;
        case 'comprar':
            $create = comprarItem($con, $data);
            if (!$create) {
                $message = "Tienes que iniciar session para continuar la su pedido";
                $url = RUTA.'/crear.php?page=' . $_POST['page'] . '&m=' . $message;
                while (ob_get_status())
                {
                    ob_end_clean();
                }
                header( "Location: $url" );
                exit();
            }
            break;
        default:
            # code...
            break;
    }
    $url = RUTA.'/index_usuario_creado.php?page=' . $_POST['page'] . '&m=' . $message;
    while (ob_get_status())
    {
        ob_end_clean();
    }
    header( "Location: $url" );
    exit();
}
$url = RUTA.'/index.php';
while (ob_get_status())
{
    ob_end_clean();
}
header( "Location: $url" );
exit();
?>

<?php
function mostrarPedido($con,$pedido="pedido"){
    if ($con) {
        if ($_SESSION['user']!=null) {
            $email = session__get("user");
            $usuario = $con->prepare("SELECT * FROM usuario WHERE correo = '$email' LIMIT 1");
            $usuario->execute();
            $user = $usuario->fetch(PDO::FETCH_ASSOC);
            $ci= $user['CI'];
            $query = $con->prepare("SELECT * FROM pedido JOIN producto ON (pedido.producto_id_producto=producto.id_producto) WHERE usuario_CI = '$ci' AND estado='$pedido'");
                $query->execute();
         return $query->fetchAll();
        }
    }
}
function mostrarHistorial($con,$pedido="comprado"){
    if ($con) {
        if ($_SESSION['user']!=null) {
            $email = session__get("user");
            $usuario = $con->prepare("SELECT * FROM usuario WHERE correo = '$email' LIMIT 1");
            $usuario->execute();
            $user = $usuario->fetch(PDO::FETCH_ASSOC);
            $ci= $user['CI'];
            $query = $con->prepare("SELECT * FROM pedido JOIN producto ON (pedido.producto_id_producto=producto.id_producto) WHERE usuario_CI = '$ci' AND estado='$pedido'");
                $query->execute();
         return $query->fetchAll();
        }
    }
}
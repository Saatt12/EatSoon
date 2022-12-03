<?php

function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) return $min; // not so random...
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd > $range);
    return $min + $rnd;
}

function getToken($length)
{
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet .= "0123456789";
    $max = strlen($codeAlphabet); // edited

    for ($i = 0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max - 1)];
    }

    return $token;
}
function agregarAlCarrito($con, $data)
{
    if ($con && $data) {
        $pro = $data['producto_id'];
        $cod = $data['code'];
        $query2 = $con->prepare("SELECT cantidad FROM carrito WHERE producto_id = '$pro' AND code='$cod'");
        $query2->execute();
        $existe = $query2->fetchAll();
        if (count($existe) > 0) {
            $carr = $con->prepare("UPDATE carrito SET cantidad = ? WHERE producto_id = ? AND code= ?");
            $contar = $existe[0]['cantidad'] + 1;
            /*array respetando el orden de cada valor*/
            $arrParams = array($contar, $pro, $cod);
            /*Pasamos el array en el execute*/
            if ($carr->execute($arrParams)) {
                return true;
            } else {
                return false;
            }
        } else {
            $query = $con->prepare(
                'INSERT INTO carrito (cantidad, producto_id, usuario_CI, code)
                                VALUES (:cantidad, :producto_id, :usuario_CI, :code)'
            );

            try {
                $query->execute([
                    ':cantidad' => 1,
                    ':producto_id' => $data['producto_id'],
                    ':usuario_CI' => $data['usuario_CI'],
                    ':code' => $data['code']
                ]);
                return true;
            } catch (Exception $e) {
                var_dump($e->getMessage());
            }
        }
        return false;
    } else {
        return false;
    }
}
function totalProductosEnCarrito($con, $data)
{
    $code = $data["code"];
    $query = $con->prepare("SELECT SUM(cantidad) AS total FROM carrito  WHERE code = '$code'");
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
    return $row['total'];
}
function enCarrito($con, $data)
{
    $code = $data["code"];
    $query = $con->prepare("SELECT carrito.*, producto.id_producto,
producto.fecha_publicacion,
producto.nombre_producto,
producto.precio_producto,
producto.fecha_caducidad,
producto.desc_producto,
producto.cantidad as cantidad_producto,
producto.imagen,
producto.pedido_codPedido  FROM carrito JOIN producto ON (carrito.producto_id=producto.id_producto) WHERE code = '$code'");
    $query->execute();
    return $query->fetchAll();
}
function eliminarItem($con, $data)
{
    if ($con && $data) {
        $pro = $data['carrito_id'];
        $cod = $data['code'];
        $query = $con->prepare("DELETE FROM carrito WHERE carrito_id = '$pro' AND code='$cod'");
        $query->execute();
        return true;
    }
    return false;
}
function aumentarItem($con, $data)
{
    if ($con && $data) {
        $pro = $data['carrito_id'];
        $cod = $data['code'];
        $query2 = $con->prepare("SELECT cantidad FROM carrito WHERE carrito_id = '$pro' AND code='$cod'");
        $query2->execute();
        $existe = $query2->fetchAll();
        if (count($existe) > 0) {
            $carr = $con->prepare("UPDATE carrito SET cantidad = ? WHERE carrito_id = ? AND code= ?");
            $contar = $existe[0]['cantidad'] + 1;
            /*array respetando el orden de cada valor*/
            $arrParams = array($contar, $pro, $cod);
            /*Pasamos el array en el execute*/
            if ($carr->execute($arrParams)) {
                return true;
            } else {
                return false;
            }
        }
    }
    return false;
}
function desminuirItem($con, $data)
{
    if ($con && $data) {
        $pro = $data['carrito_id'];
        $cod = $data['code'];
        $query2 = $con->prepare("SELECT cantidad FROM carrito WHERE carrito_id = '$pro' AND code='$cod'");
        $query2->execute();
        $existe = $query2->fetchAll();
        if (count($existe) > 0) {
            $carr = $con->prepare("UPDATE carrito SET cantidad = ? WHERE carrito_id = ? AND code= ?");
            if ((int)$existe[0]['cantidad'] > 1) {
                $contar = (int)$existe[0]['cantidad'] - 1;
                /*array respetando el orden de cada valor*/
                $arrParams = array($contar, $pro, $cod);
                /*Pasamos el array en el execute*/
                if ($carr->execute($arrParams)) {
                    return true;
                } else {
                    return false;
                }
            }
            return false;
        }
    }
    return false;
}
function vaciarItem($con, $data){
    if ($con && $data) {
        $cod = $data['code'];
        $query = $con->prepare("DELETE FROM carrito WHERE code='$cod'");
        $query->execute();
        return true;
    }
    return false;
}
function comprarItem($con, $data){
    if ($con && $data) {
        if(isset($_COOKIE['user'])){
            $email = $_COOKIE['user'];
            $usuario = $con->prepare("SELECT * FROM usuario WHERE correo = '$email' LIMIT 1");
            $usuario->execute();
            $user = $usuario->fetch(PDO::FETCH_ASSOC);

            $code = $data["code"];
            $query = $con->prepare("SELECT * FROM carrito  WHERE code = '$code'");
            $query->execute();
            $row = $query->fetchAll();
            if (count($row)>0) {               
                foreach ($row as $key => $value) {
                    
                    $query2 = $con->prepare(
                        'INSERT INTO pedido (
                            codPedido,
                            producto_id_producto,
                            usuario_CI,
                            tatal_Pedido,
                            fecha_Pedido)
                        VALUES (null, :producto_id_producto, :usuario_CI, :tatal_Pedido, :fecha_Pedido)'
                    );
                    try {
                        $res= $query2->execute([
                        ':producto_id_producto'=>$value['producto_id'],
                        ':usuario_CI'=>$user['CI'],
                        ':tatal_Pedido'=>$value['cantidad'],
                        ':fecha_Pedido'=>date('y-m-d H:i:s')
                        ]);
                    } catch (Exception $e) {
                       var_dump($e->getMessage());
                    }
                }
                $query3 = $con->prepare("DELETE FROM carrito WHERE code='$code'");
                $query3->execute();
            }
            return true;
        }else{
            return false;
        }
    }
    return false;
}

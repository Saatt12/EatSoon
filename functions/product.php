<?php

    function existProduct($con, $product){
        $query = $con->prepare("SELECT * FROM producto WHERE nombre_producto = '$product' LIMIT 1");
        $query->execute();
        return count($query->fetchAll()) > 0;
    }

    function getProducts($con){
        $query = $con->prepare('SELECT * FROM producto');
        $query->execute();
        return $query->fetchAll();
    }

    function createProduct($con, $data, $folder_save, $uploadFile){
        if(!existProduct($con, $data['nombre_producto'])){ //si no existe, se registra

            $data['imagen'] = $uploadFile($folder_save, $data['imagen']);
            $query = $con->prepare(
                'INSERT INTO producto (id_producto, nombre_producto, cantidad, precio_producto, fecha_caducidad, imagen, desc_producto)
                VALUES (null, :nombre_producto, :cantidad, :precio_producto, :fecha_caducidad, :imagen, :desc_producto)'
            );
    
            $query->execute([
                ':nombre_producto' => $data['nombre_producto'],
                ':cantidad' => intval($data['cantidad']),
                ':precio_producto' => $data['precio_producto'],
                ':fecha_caducidad' => $data['fecha_caducidad'],
                ':imagen' => $data['imagen'], 
                ':desc_producto' => $data['desc_producto']
            ]);
            
            return true;
        }else{
            return false;
        }
    }

    

    /** Elimina los productos que expiraron */
    function deleteExpireds($con, $dir){
        if(existProductExpired($con)){
            $products = existProductExpired($con);

            foreach($products as $pt){
                unlink($dir . $pt['imagen']);
            }

            $query = $con->prepare("DELETE FROM producto WHERE fecha_caducidad <= CURDATE()");
            $query->execute();
        }
    }
     function existeDescripcion($descripcion){

     }

?>
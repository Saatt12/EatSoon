<?php

    $cant = 0;
    function existProduct($con, $product){
        $query = $con->prepare("SELECT * FROM producto WHERE nombre_producto = '$product' LIMIT 1");
        $query->execute();
        return count($query->fetchAll()) > 0;
    }

    function redireccionar($products,$ruta){
        $productSize = count($products);
        if(isset($_GET['page'])){
            if($productSize == 0 && (int)($_GET['page'])>1 ){
                header("location: $ruta/index.php?page=1");
            } 
        }
    }

    function getCantPaginas($con, $actual, $limite){
        
        
        $query = $con->query("SELECT FOUND_ROWS() AS cantidad ");
        $cantidad = $query->fetch()['cantidad'];
        return ceil($cantidad/$limite);
        
    }


function getProductoPage($con,$actual,$limite){
       
        
        $query = $con->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM producto WHERE fecha_publicacion ORDER BY fecha_publicacion desc LIMIT $actual,$limite ");
        $query->execute();
        $aux = $query->rowCount();
        $page = $aux/$limite;
        $page = ceil($page);
        $GLOBALS['cant'] = $page;
        return $query->fetchAll();


        
    }

    function limitarProductos($con){
        $query = $con->prepare("SELECT * FROM producto");
        $query->execute();
        $numeroProductos = count($query->fetchAll());
        //var_dump($numeroProductos);
        if($numeroProductos > 60){
            $query = $con->prepare("DELETE FROM producto WHERE id_producto = (SELECT MIN(id_producto) FROM producto)");
            $query->execute();
        }
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

    function existProductExpired($con){
        $query = $con->prepare("SELECT * FROM producto WHERE fecha_caducidad <= CURDATE()");
        $query->execute();
        return $query->fetchAll();
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
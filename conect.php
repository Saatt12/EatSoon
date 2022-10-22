<?php 

    //esta funcion inserta datos del formulario registar de la H3 en la BD 

    //recupera las variables de registreo mediante metodo POST 
    $nombre_producto = $_POST['nombre_producto'];
    $cantidad = $_POST['cantidad'];
    $precio_producto = $_POST['precio_producto'];
    $fecha_caducidad = $_POST['fecha_caducidad'];
    $imagen = $_FILES['imagen']['tmp_name'];
    $img = $_FILES['imagen']['name'];
    $archivo = 'storge/'.$_FILES['imagen']['name'];
    $desc_producto = $_POST['desc_producto'];
    move_uploaded_file($imagen,$archivo);
    //inicializo conexion con la BD
    $enlace = mysqli_connect("127.0.0.1","root","","eatsoon");
    if(!$enlace){
        die("no se puede".mysqli_error());
    }    
    //probando------------------------------
    if(buscarRepetido($nombre_producto,$precio_producto,$enlace)==1){
        echo "El producto ingresado ya existe";
    }else{
        $accion_nm = "INSERT INTO producto(nombre_producto,precio_producto,fecha_caducidad,desc_producto,cantidad,imagen) VALUES ('$nombre_producto','$precio_producto','$fecha_caducidad','$desc_producto','$cantidad','$img')";
        echo $consulta_nm = mysqli_query($enlace,$accion_nm) or die(mysqli_error());
    }
    //-------------------------------------------------------------------------------
    function buscarRepetido($nombre,$cant,$conexion){
        $sql = "SELECT * FROM producto 
        WHERE nombre_producto='$nombre' AND precio_producto='$cant'";
                $res=mysqli_query($conexion,$sql);
                if(mysqli_num_rows($res) > 0){
                    
                    return header('Location: registrar.php');;
                }else{
                    return 0;
                }
                
    }
    //--------------------------------------


    /* lo que da
    //Insertamos las variable en la BD
    $accion_nm = "INSERT INTO producto(nombre_producto,precio_producto,fecha_caducidad,desc_producto,cantidad,imagen) VALUES ('$nombre_producto','$precio_producto','$fecha_caducidad','$desc_producto','$cantidad','$img')";
    $consulta_nm = mysqli_query($enlace,$accion_nm) or die(mysqli_error());    
    mysqli_close($enlace);  */
    
?>
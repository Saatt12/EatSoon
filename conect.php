<?php 
    //Edgar Fausto Copa Lopez
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
    //Insertamos las variable en la BD
    $accion_nm = "INSERT INTO producto(nombre_producto,precio_producto,fecha_caducidad,desc_producto,cantidad,imagen) VALUES ('$nombre_producto','$precio_producto','$fecha_caducidad','$desc_producto','$cantidad','$img')";
    $consulta_nm = mysqli_query($enlace,$accion_nm) or die(mysqli_error());    
    mysqli_close($enlace);  
?>
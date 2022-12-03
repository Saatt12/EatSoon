
<?php 

    //limpiado

    function no_repetirUsuario($con, $data){
        $ci = $data["ci"];
        $email = $data["email"];
        $query = $con->prepare("SELECT * FROM usuario WHERE ci = '$ci' OR correo = '$email' LIMIT 1");
        $query->execute();
        return count($query->fetchAll()) == 0;
    }




     //** controlar si existe un usuario */
     function Existe_Usuario($con, $data){
        $nombre = $data["correo"];
        $contraseña = $data["password"];
        $query = $con->prepare("SELECT * FROM usuario WHERE correo = '$nombre' AND contraseña = '$contraseña' LIMIT 1");
        $query->execute();
        return $query->fetchAll();
    }

    function loginUser($con, $data){
        $login =Existe_Usuario($con, $data);
        if(count($login)==1) {
            //codigo para loguearse
            //header('Location: index_usuario_creado.php');
            //setcookie("user",$login[0]["CORREO"]);
            return $login[0];
        }else{
            $error = "Correo o contrseña incorrecto";
            //header('Location: login.php?error='.$error);
        }
        return null;
    }
?>
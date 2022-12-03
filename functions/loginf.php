
<?php 

    function createUser($con, $data){        
          if(no_repetirUsuario($con, $data)){  
            $query = $con->prepare(
                'INSERT INTO usuario (ci, nombre, apellido, direccion, telefono, correo, contraseña)
                            VALUES (:ci, :nombre, :apellido, :direccion, :telefono, :email, :pass)'
            );


            $query->execute([
                ':nombre' => $data['nombre'],
                ':apellido' => $data['apellido'],
                ':ci' => $data['ci'],
                ':direccion' => $data['direccion'],
                ':telefono' => $data['telefono'], 
                ':email' => $data['email'],
                ':pass' => $data['password']
            ]);

// Para direccionar automaticamente al inicio despues de crear una cuenta
          header("Location: index_usuario_creado.php");
              die();


            return true;
    }else{
        return false;
    }
}

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
<?php 

    function createUser($con, $data){        
            
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
        
            return true;
    }

?>
<?php 

    function createUser($con, $data){        
            
            $query = $con->prepare(
                'INSERT INTO usuario (ci, nombre, apellido, direccion, telefono, correo, contraseña)
                VALUES ("122", "edgar", "copa", "antezana", "12345667", "ggg", "1232131")'
            );

            $query->execute([
                ':nombre' => $data['nombre'],
                ':apellido' => $data['apellido'],
                ':ci' => $data['ci'],
                ':direccion' => $data['direccion'],
                ':telefono' => $data['telefono'], 
                ':email' => $data['email'],
                ':password' => $data['password']
            ]);
        
            return true;
    }
?>
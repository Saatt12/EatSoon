<?php

    function conexion($db_config){
        try{
            return new PDO(
                'mysql:host='.$db_config['db_host'].
                ';port='.$db_config['db_port'].
                ';dbname='.$db_config['db_name'],
                $db_config['db_user'],
                $db_config['db_pass']
            );
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

?>
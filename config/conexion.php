<?php

date_default_timezone_set('America/La_Paz');

$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
   // echo 'La zona horaria del script difiere de la zona horaria de la configuracion ini.';
} else {
   // echo 'La zona horaria del script y la zona horaria de la configuración ini coinciden.';
}


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
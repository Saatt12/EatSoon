<?php

    function uploadFile($ruta, $file){
            if (!file_exists($_SERVER['DOCUMENT_ROOT'].'/EatSoon')) {
                mkdir($_SERVER['DOCUMENT_ROOT'].'/EatSoon', 0777);
            }
            if (!file_exists($_SERVER['DOCUMENT_ROOT'].'/EatSoon/'.$ruta)) {
                mkdir($_SERVER['DOCUMENT_ROOT'].'/EatSoon/'.$ruta, 0777);
            }
            $dir_archivo =$_SERVER['DOCUMENT_ROOT'].'/EatSoon/'.$ruta . $file['name'];
            $da=move_uploaded_file($file['tmp_name'], $dir_archivo);
            $rename_file = newNameFila($file['name']);
            $dir_rename_file = $ruta . $rename_file;

            rename($dir_archivo, $dir_rename_file);
            return $rename_file;
    }

    function newNameFila($file_name){
        $extension = getExtension($file_name);
        return rand(11111111111111, 99999999999999) . '.' . $extension;
    }

    function getExtension($file_name){
        $img_to_arr = explode(".", $file_name);
        return $img_to_arr[count($img_to_arr) - 1];
    }

?>
<?php 

function conectarDB() : mysqli{
    $db = new mysqli('localhost', 'root', 'Salguero3003.', 'bienesraices_crud');

    if(!$db) {
        echo "No se conecto";
        exit;
    }

    return $db;
};
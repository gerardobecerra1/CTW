<?php

require './src/Roots.php';
require PATH_SRC . 'autoloader/Autoloader.php';

Autoloader::registrar();

$rutas = scandir(PATH_ROUTES);//Lista los archvos de de la carpeta routes

foreach ($rutas as $archivo) {//importamos los arcivos en la carpeta routes
    $rutaArchivo = realpath(PATH_ROUTES . $archivo);
    if(is_file($rutaArchivo)){
        require $rutaArchivo;
    }
}

Route::submit();
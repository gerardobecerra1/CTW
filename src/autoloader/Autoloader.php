<?php

class Autoloader{
    
    public static function registrar() {
        if(function_exists('__autoload')){//comporbamos si el autoload ya esta registrado
            spl_autoload_register('__autoload');//Lo confirmamos
            return;
        }
        if(version_compare(PHP_VERSION, '5.3.0') >= 0){//si la version es mayo o igual 
            spl_autoload_register(array('Autoloader', 'cargar'),true,true);//regitraremos nuestra propia version de autoloader
        }else{
            spl_autoload_register(array('Autoloader', 'cargar'));
        }
    }
    
    public static function cargar($clase) {
        $nombreArchivo = $clase . '.php';//Crea un string con la extención de nuestros archvios
        $carpetas = require PATH_CONFIG . 'autoloader.php';
        foreach ($carpetas as $carpeta) {
            if(self::buscarArchivo($carpeta, $nombreArchivo)){
                return true;
            }
        }
        
        return false;
    }
    
    private static function buscarArchivo($carpeta, $nombreArchivo) {
        $archivos = scandir($carpeta);
        foreach ($archivos as $archivo) {
            $rutaArchivo = realpath($carpeta . DIRECTORY_SEPARATOR . $archivo);
            if(is_file($rutaArchivo)){
                if($nombreArchivo == $archivo){
                    require_once $rutaArchivo;
                    return true;
                }
            }else if($archivo != '.' && $archivo != '..'){
                self::buscarArchivo($rutaArchivo, $nombreArchivo);
            }
        }
        return false;
    }
    
}


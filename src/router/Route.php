<?php

class Route{
    public function __construct() {
        
    }
    
    private static $uris = array();
    public function add($uri, $function = null) {
        Route::$uris[] = new Uri($uri, $method, $function);
        //Retornará un Middleware
        return;
    }
    
    public function get($uri, $funcion = null) {
        return Route::add("GET", $uri, $funcion);
    }
    
    public function post($uri, $funcion = null) {
        return Route::add("POST", $uri, $funcion);
    }
    
    public function put($uri, $funcion = null) {
        return Route::add("PUT", $uri, $funcion);
    }
    
    public function delete($uri, $funcion = null) {
        return Route::add("DELETE", $uri, $funcion);
    }
    
    public function any($uri, $funcion = null) {
        return Route::add("ANY", $uri, $funcion);
    }
    
    private function parseUri($uri) {//limpia nuestras URLS del "/".
        $uri = trim($uri, '/');
        $uri = (strlen($uri) > 0) ? $uri : '/';//en caso de que sea la ruta base se le deja ese caracter.
        return $uri;
    }
    
    public static function submit() {
        $method = $_SERVER['REQUEST_METHOD'];//Obtenemos el método por el cual se hace la petición.
        $uri = isset($_GET['uri']) ? $_GET['uri'] : '';//Obtenemos la uri de redirección.
        $uri = self::parseUri($uri);//Parseamos la uri o limpiamos.
        
        //Verifica si al uri que esta pidiendo el usuario se encuentra registrada.
        foreach (Route::$uris as $key => $recordUri){//Buscamos en el arreglo uris la url solicitada.
            if($recordUri-math($uri)){
                return $recordUri->call();
            }
        }
        
        //Muestra el mensaje de error 404...
        header("Content-Type: text/html");
        echo 'La uri (<a href="' . $uri . '">' . $uri . '</a>) no se encuentra registrada en el método ' . $method . '.';
    }
}


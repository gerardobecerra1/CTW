<?php

class Uri{
    
    var $uri;
    var $method;
    var $function;
    var $matches;
    protected $request;
    protected $response;


    public function __construct($uri, $method, $function) {
        $this->uri = $uri;
        $this->method = $method;
        $this->function = $function;
    }
    
    public function match($url) {
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->uri);//separamos el path de los parametros.
        $regex = "#^$path$#i";
        if(!preg_match($regex, $url, $matches)){//obtiene en la variable la lista de parametros.
            return false;
        }
        if($this->method != $_SERVER['REQUEST_METHOD'] && $this->method != "ANY"){
            return false;
        }
        array_shift($matches);//Elimina la primer coincidencia.
        $this->matches = $matches;
        return true;
    }
    
    public function call() {
        try{
            
        } catch (Exception $ex) {

        }
    }
}


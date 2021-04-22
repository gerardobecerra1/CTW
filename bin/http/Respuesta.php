<?php

class Respuesta{
    public $codigo;
    public $mensaje;
    public $datos;

    public function __construct($codigo = null, $mensaje = null, $datos = null) {
        //Obtenemos la respuesta por defecto apratir del código
        if(isset($codigo) && empty($mensaje)){
            $respuesta = EMensajes::getMensaje($codigo);
            $this->codigo = $respuesta->codigo;
            $this->mensaje = $respuesta->mensaje;
            $this->datos = $respuesta->datos;
            return;
        }
        if(is_string($codigo)){
            $temp = EMensajes::getMensaje($codigo);
            $codigo = $temp->codigo;
        }
        $this->codigo = $codigo;
        $this->mensaje = $mensaje;
        $this->datos = $datos;
    }
    
    public function json($obj = null) {//esto codifica un objeto o una instancia de nuestra clase respuesta
        header('Content-Type: application/json');
        if(is_array($obj) || is_object($obj)){
            return json_encode($obj);
        }
        return json_encode($this);
    }


    public function getCodigo() {
        return $this->codigo;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function getDatos() {
        return $this->datos;
    }

    public function setCodigo($codigo): void {
        $this->codigo = $codigo;
    }

    public function setMensaje($mensaje): void {
        $this->mensaje = $mensaje;
    }

    public function setDatos($datos): void {
        $this->datos = $datos;
    }

}

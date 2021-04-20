<?php

class Conexion{
    private $conexion;//En esta variable guardamos la referencia de la conexión PDO(PHP Data Objects).
    private $configuracion = [//Aqui guardamos nustra configuracion d enustra base de datos.
        "driver" => "mysql",
        "host" => "localhost",
        "database" => "changetheworld",//nombre de la base de datos
        "port" => "3306",
        "user" => "root",//usuario de MySQL
        "password" => "",// contraseña de MySQL
        "charset" => "utf8mb4"
    ];
    
    public function __construct() {
        
    }
    
    function conectar() {
        try{//Aqui controla la operación que hace dentro y si genera algun problema nos ejecuta lo que hacemos en catch
            //Defiinimos el servidor,base de datos y todo lo que usaremos para conectar con nuestra basde de datos.
            $CONTROLADOR = $this->configuracion["driver"];
            $SERVIDOR = $this->configuracion["host"];
            $BASE_DATOS = $this->configuracion["database"];
            $PUERTO = $this->configuracion["port"];
            $USUARIO = $this->configuracion["user"];
            $CLAVE = $this->configuracion["password"];
            $CODIFICACION = $this->configuracion["charset"];
            
            //creamos una URL con nuestros datos
            $url = "{$CONTROLADOR}:host={$SERVIDOR}:{$PUERTO};"."dbname={$BASE_DATOS};charset={$CODIFICACION}";
            //Creamos la conexión
            $this->conexion = new PDO($url,$USUARIO,$CLAVE);
            echo 'Conexión exitosa';
        } catch (Exception $ex) {
            echo 'Conexión fallida';
            echo $ex->getTraceAsString();
        }
    }
}


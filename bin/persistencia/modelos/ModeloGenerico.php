<?php

class ModeloGenerico extends Crud{
    private $className;
    private $excluir = ["className","tabla","conexion","wheres","sql","excluir"];

    public function __construct($tabla, $className, $propiedades = null){
        parent::__construct($tabla);
        $this->className = $className;

        if(empty($propiedades)){
            return;
        }

        foreach($propiedades as $llave => $valor){
            $this->{$llave} = $llave;//asignamos nuevos atributos al objeto
        }
    }

    protected function obtenerAtributos(){
        $variables = get_class_vars($this->className);//obtenmos todos las variables en nuestras clases y los guarda como arreglo inclusive los del crud ya que extendemos de ella
        $atributos = [];
        $max = count($variables);
        foreach ($variables as $llave => $valor) {
            if(!in_array($llave, $this->excluir)){//aqui si no es ninguno de los que tenemos en excluir lo agragamos
                $atributos[] = $llave;
            }
        }
        return $atributos;
    }

    protected function parsear($obj = null){
        try {
            $atributos = $this->obtenerAtributos();
            $objetoFinal = [];
            //Obtener el objeto desde el modelo.
            if($obj == null){
                foreach ($atributos as $indice => $llave) {
                    if(isset($this->{$llave})){
                        $objetoFinal[$llave] = $this->{$llave};
                    }
                }
                return $objetoFinal;
            }

            //corregimos el objeto que recibimos con los atributos del modelo.
            foreach ($atributos as $indice => $llave) {
                if(isset($obj[$llave])){//isset deetermina si una variable está DEFINIDA Y NO ES NULL
                    $objetoFinal[$llave] = $obj[$llave];
                }
            }
            return $objetoFinal;
        } catch (Exception $exc) {
           throw new Exception("Error en ". $this->className . ".parsear() => " . $exc->getMessage());
        }
    }

    public function fill($obj){
        try {
            $atributos = $this->obtenerAtributos();
            foreach ($atributos as $indice => $llave) {
                if(isset($obj[$llave])){
                    $this->{$llave} = $obj[$llave];
                }
            }
        } catch (Exception $exc) {
            throw new Exception("Error en ". $this->className . ".fill() => " . $exc->getMessage());
        }
    }

    public function insert($obj = null){
        $obj = $this->parsear($obj);
        return parent::insert($obj);
    }

    public function update($obj){
        $obj = $this->update($obj);
        parent::update($obj);
    }

    public function __get($nombreAtributo){
        return $this->{$nombreAtributo};
    }

    public function __set($nombreAtributo, $valor){
        $this->{$nombreAtributo} = $valor;
    }

}
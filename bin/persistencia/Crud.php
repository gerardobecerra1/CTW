<?php

class Crud {
    protected $tabla;//necesitamos el nombre de la tabla que se almacena en esta variable
    protected $conexion;//necesitamos hacer la conexion a a base de datos
    protected $wheres = "";//necesitamos condiciones si es necesario
    protected $sql;//necestitamos guardar la consulta que crearemos(traer una tabla completa, tal usario, borrarlo, actualizarlo, etc.)
    
    public function __construct($tabla = null){ //necesitamos un constructor/inicializador que nos haga la conexion y trae el nombre de la tabla
        $this->conexion = (new Conexion())->conectar();//para ahorrar lineas encerramos la instancia en () para desde ahi llamar a conectar
        $this->tabla = $tabla;
    }
    
    public function get() {
        try{
            $this->sql = "SELECT * FROM {$this->tabla} {$this->wheres}";//guradmos la consulta con el nombre de la tabla guardada previamente
            $sth = $this->conexion->prepare($this->sql);
            $sth->execute();
            return $sth->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
        }
    }
    
    public function insert($obj) {
        try {
            //Alt+96 para hacer "`"
            // implode concatena/une elementos de un array en un string en este caso llamado campos  
            //array_keys devuelve todas las claves de un array o un subconjunto de claves de un array
            $campos = implode("`, `", array_keys($obj));//Guarda: "nombreUno`, `nombreDos`, "....
            $valores = ":".implode(", :", array_keys($obj));//Guarda: ":nombre1, :nombre2, :...."
            $this->sql = "INSERT INTO {$this->tabla} (`{$campos}`) VALUES({$valores})";
            $this->ejecutar($obj);
            //para obtener el id le decimos a conexion que nos traega del ultimo obj insertado el id este metodo viene de PDO
            $id = $this->conexion->lastInsertId();
            return $id;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function update($obj) {
        try {
            $campos = "";
            foreach ($obj as $llave => $valor) {
                $campos .= "`$llave`=:$llave,";//Guarda: "`nombre`=:nombre,`apellidos`=:apellidos,"
            }
            $campos = rtrim($campos, ",");//Retira los espacios en blanco (u otros caracteres que le digamos en este caso ",") del final de un string
            $this->sql = "UPDATE {$this->tabla} SET {$campos} {$this->wheres}";
            $filasAfectadas = $this->ejecutar($obj);
            return $filasAfectadas;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function delete() {
        try {
            $this->sql = "DELETE  FROM {$this->tabla} {$this->wheres}";
            $filasAfectadas = $this->ejecutar();
            return $filasAfectadas;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function where($llave, $condicion, $valor) {
        $this->wheres .= (strpos($this->wheres, "WHERE")) ? " AND " : " WHERE ";//strpos busca la palabra where dentro del parametro a la derecha
        $this->wheres .= "`$llave` $condicion " . ((is_string($valor)) ? "\"$valor\"" : $valor) . " ";
        return $this;
        
    }
    
    public function orWhere($llave, $condicion, $valor) {
        $this->wheres .= (strpos($this->wheres, "WHERE")) ? " OR " : " WHERE ";//strpos busca la palabra where dentro del parametro a la derecha
        $this->wheres .= "`$llave` $condicion " . (is_string($valor) ? "\"$valor\"" : $valor) . " ";
        return $this;
        
    }

    private function ejecutar($obj = null) {
        $sth = $this->conexion->prepare($this->sql);
        if($obj !== null){//Si mi objeto no esta vacio
            foreach ($obj as $llave => $valor) {
                if(empty($valor)){// y si el valor que mandamos tenemos está vacío lo dejamos vacío y si no hacemos lo de abajo
                    $valor = null;
                }
                $sth->bindValue(":$llave", $valor);//le asignamos los valores a nuestro objeto en su nombre que vayamos del foreach
            }
        }
        $sth->execute();
        $this->reiniciarValores();
        return $sth->rowCount();// contamos las fias que fueron afectadas este metodo viene de PDO
    }
    
    private function reiniciarValores() {
        $this->wheres = "";
        $this->sql = null;
    }
}



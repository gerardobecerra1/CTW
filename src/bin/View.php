<?php

class View{
    
    protected $variables;
    protected $output;
            
    function __construct() {
        
    }
    
    public function render($file, $variables = null) {
        if(isset($variables) && is_array($variables)){
            $this->variables = $variables;
        }
        $file = PATH_VIEWS . $file;
        ob_start();//Abrimos un búffer para capturar el contenido del archivo
        $this->includeFile($file);
        $output = ob_get_contents();
        ob_end_clean();
        return $output;//retornamos el contenido renderizado
    }
    
    public function includeFile($file) {
        //Creamos las variables en el contexto actual...
        if(isset($this->variables) && is_array($this->variables)){
            foreach ($this->variables as $key => $value) {
                global  ${$key};
                ${$key} = $value;
            }
        }
        
        if(file_exists($file)){
            return include $file;
        }else
        if(file_exists($file . ".php")){
                return include $file . ".php";
        }else
        if(file_exists($file . ".html")){
                return include $file . ".html";
        }else{
            echo "<h2>No existe el archivo: $file</h2></br>";
        }
    }

}


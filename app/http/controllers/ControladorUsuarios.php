<?php

class ControladorUsuarios extends Controller{
    
    public function __construct() {
        
    }
    
    public function index() {
            return $this->view("welcome");//podemos poner la terminación .php pero la funcion asume y lo importa si esque es correcto el nombre
    }

    public function registro() {
        return $this->view("usuarios/registro");
    }

    function insertarUsuario(Request $request) {
        $usuarioModel = new tbl_Users();
        $usuario = $usuarioModel->where("email", "=", $request->email)->first();
        if($usuario){
            return new Respuesta(EMensajes::ERROR,"El correo ya se encuentra registrado.");
        }
        $id = $usuarioModel->insert($usuario);
        $comprobacion = ($id > 0);
        $respuesta = new Respuesta($comprobacion ? EMensajes::REGISTRO_EXITOSO : EMensajes::ERROR_REGISTRO);
        $respuesta->setDatos($id);
        return $respuesta;
    }
    
    function listarUsuarios() {
        $usuarioModel = new tbl_Users();
        $lista = $usuarioModel->get();
        $comprobacion = count($lista);
        $respuesta = new Respuesta($comprobacion ? EMensajes::CONSULTA_EXITOSA : EMensajes::ERROR_CONSULTA);
        $respuesta->setDatos($lista);
        return $respuesta;
    }
    
    function actualizarUsuario($usuario) {
        $usuarioModel = new tbl_Users();
        $actualizados = $usuarioModel->where("id_user", "=", $usuario["idUser"])->update($usuario);
        $comprobacion = ($actualizados > 0);
        return new Respuesta($comprobacion ? EMensajes::ACTUALIZACION_EXITOSA : EMensajes::ERROR_ACTUALIZACION);;
    }
    
    function eliminarUsuario($idUser) {
        $usuarioModel = new tbl_Users();
        $eliminados = $usuarioModel->where("id_user", "=", $idUser)->delete();
        $comprobacion = ($eliminados > 0);
        return new Respuesta($comprobacion ? EMensajes::ELIMINACION_EXITOSA : EMensajes::ERROR_ELIMINACION);
    }
    
    function buscarUsuarioPorId($idUser) {
        $usuarioModel = new tbl_Users();
        $usuario = $usuarioModel->where("id_user", "=", $idUser)->first();
        $comprobacion = ($usuario != null);
        return new Respuesta($comprobacion ? EMensajes::CORRECTO : EMensajes::ERROR);
    }
}
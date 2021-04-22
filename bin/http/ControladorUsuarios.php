<?php

class ControladorUsuarios{
    
    public function __construct() {
        
    }
    
    function insertarUsuario($usuario) {
        $usuarioModel = new tbl_Users();
        $id = $usuarioModel->insert($usuario);
        $comprobacion = ($id > 0);
        $respuesta = new Respuesta($comprobacion ? EMensajes::REGISTRO_EXITOSO : EMensajes::ERROR_REGISTRO);
        //para personalizar un mensaje seria:
//        $respuesta->setMensaje("blablabla");
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
        $respuesta = new Respuesta($comprobacion ? EMensajes::ACTUALIZACION_EXITOSA : EMensajes::ERROR_ACTUALIZACION);
        $respuesta->setDatos($actualizados);
        return $respuesta;
    }
    
    function eliminarUsuario($idUser) {
        $usuarioModel = new tbl_Users();
        $eliminados = $usuarioModel->where("id_user", "=", $idUser)->delete();
        $comprobacion = ($eliminados > 0);
        $respuesta = new Respuesta($comprobacion ? EMensajes::ELIMINACION_EXITOSA : EMensajes::ERROR_ELIMINACION);
        $respuesta->setDatos($eliminados);
        return $respuesta;
    }
    
    function buscarUsuarioPorId($idUser) {
        $usuarioModel = new tbl_Users();
        $usuario = $usuarioModel->where("id_user", "=", $idUser)->first();
        return [
            "codigo" => (($usuario != null) ? 1 : -1),
            "mensaje" => ($usuario != null) ? "Se ha consultado el usuario correctamente." : "No se pudo consultar el usuario.",
            "datos" => $usuario
        ];
    }
}


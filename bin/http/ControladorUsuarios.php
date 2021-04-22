<?php

class ControladorUsuarios{
    
    public function __construct() {
        
    }
    
    function insertarUsuario($usuario) {
        $usuarioModel = new tbl_Users();
        $id = $usuarioModel->insert($usuario);
        return [
            "codigo" => (($id > 0) ? 1: -1),
            "mensaje" => ($id > 0) ? "Se ha registrado el usuario correctamente." : "No se pdo registrar el usuario.",
            "datos" => $id
        ];
    }
    
    function listarUsuarios() {
        $usuarioModel = new tbl_Users();
        $lista = $usuarioModel->get();
        return [
            "codigo" => ((count($lista) > 0) ? 1 : -1),
            "mensaje" => ((count($lista) > 0) ? "Se han consultado los registros correctamente." : "No hay registros."),
            "datos" => $lista
        ];
    }
    
    function actualizarUsuario($usuario) {
        $usuarioModel = new tbl_Users();
        $actualizados = $usuarioModel->where("id_user", "=", $usuario["idUser"])->update($usuario);
        return [
            "codigo" => (($actualizados > 0) ? 1 : -1),
            "mensaje" => ($actualizados > 0) ? "Se ha actualizado el usuario correctamente." : "No se pudo actualizar el usuario.",
            "datos" => $actualizados
        ];
    }
    
    function eliminarUsuario($idUser) {
        $usuarioModel = new tbl_Users();
        $eliminados = $usuarioModel->where("id_user", "=", $idUser)->delete();
        return [
            "codigo" => (($eliminados > 0) ? 1 : -1),
            "mensaje" => ($eliminados > 0) ? "Se ha eliminado el usuario correctamente." : "No se pudo eliminar el usuario.",
            "datos" => $eliminados
        ];
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


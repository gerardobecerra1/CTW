<?php

require_once './bin/conexion/Conexion.php';
require_once './bin/persistencia/Crud.php';
require_once './bin/persistencia/modelos/ModeloGenerico.php';
require_once './bin/persistencia/modelos/tbl_Users.php';
require_once './bin/http/ControladorUsuarios.php';
require_once './bin/http/Respuesta.php';
require_once './bin/constantes/EMensajes.php';

//$usuario = new tbl_Users();
$controladorUsuario = new ControladorUsuarios();
//$respuesta = $controladorUsuario->insertarUsuario([
//    "role_user" => "Teacher",
//    "photo" => null,
//    "username" => "Donax",
//    "name_user" => "Edgar Donato",
//    "last_name" => "Calvillo Lumbreras",
//    "description_user" => null,
//    "email" => "donas@gmail.com",
//    "password_user" => "1234",
//    "registered_date" => date("Y-m-d"),
//    "date_of_last_change" => date("Y-m-d")
//]);

//$usuario = [
//    "idUser" => 4,
//    "username" => "La donata"
//];

//$respuesta = $controladorUsuario->actualizarUsuario($usuario);
//$respuesta = $controladorUsuario->buscarUsuarioPorId(1);
//echo "<pre>";
//var_dump($respuesta);
//echo "</pre>";

$respuesta = $controladorUsuario->listarUsuarios()->json();
//$controladorUsuario->buscarUsuarioPorId(3);
echo $respuesta;
//echo "<pre>";
//var_dump($respuesta);
//echo "</pre>";

//para hacer una consultar por campos:
//buscar por id
//$consulta = $modelo->where("id_user", "=", 1)->get();
//buscar por email
//$consulta = $modelo->where("email", "=", "dani@gmail.com")->get();
//buscar por nombre
//$consulta = $modelo->where("name_user", "=","Luis Gerado")->get();


//$modelo->insert();




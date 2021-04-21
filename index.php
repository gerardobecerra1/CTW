<?php

require_once './bin/conexion/Conexion.php';
require_once './bin/persistencia/Crud.php';
require_once './bin/persistencia/modelos/ModeloGenerico.php';
require_once './bin/persistencia/modelos/tbl_Users.php';


$modelo = new tbl_Users();

//para hacer una consultar por campos:
//buscar por id
//$consulta = $modelo->where("id_user", "=", 1)->get();
//buscar por email
//$consulta = $modelo->where("email", "=", "dani@gmail.com")->get();
//buscar por nombre
$consulta = $modelo->where("name_user", "=","Luis Gerado")->get();

// para insertar ahora seria asi:
//$modelo->setRole_user("Teacher");
//$modelo->setUsername("Danix");
//$modelo->setName_user("Alberto Daniel");
//$modelo->setLast_name("Hernández Villanueva");
//$modelo->setEmail("dani@gmail.com");
//$modelo->setPassword_user("1234");
//$modelo->setRegistered_date(date("Y-m-d"));
//$modelo->setDate_of_last_change(date("Y-m-d"));
//$modelo->insert();

echo "<pre>";
var_dump($consulta);
echo "</pre>";


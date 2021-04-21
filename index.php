<?php

require_once './bin/conexion/Conexion.php';
require_once './bin/persistencia/Crud.php';

$crud = new Crud("tbl_Users");

//$id = $crud->insert([
//    "role_user" => "Teacher",
//    "photo" => null,
//    "username" => "Gerax",
//    "name_user" => "Luis Gerado",
//    "last_name" => "Becerra Jiménez",
//    "description_user" => null,
//    "email" => "gerajmz@outlook.com",
//    "password_user" => "1234",
//    "registered_date" => date("Y-m-d"),
//    "date_of_last_change" => date("Y-m-d")
//]);
//
//echo 'El id insertado es: '. $id;
//echo '<br>';
$lista = $crud->get();
echo "<pre>";
var_dump($lista);
echo "</pre>";


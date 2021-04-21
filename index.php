<?php

require_once './bin/conexion/Conexion.php';
require_once './bin/persistencia/Crud.php';

$crud = new Crud("tbl_Users");

$afectadas = $crud->where("id_user", "=", 2)->update([
     "role_user" => "Student"
]);

$eliminados = $crud->where("id_user", "=", 2)->delete();

echo '<br>';
echo 'El número de filas afectadas es: '. $afectadas . " Eliminadas son: " . $eliminados;
echo '<br>';

//$id = $crud->insert([
//    "role_user" => "Teacher",
//    "photo" => null,
//    "username" => "Danix",
//    "name_user" => "Alberto Daniel",
//    "last_name" => "Hernández Villanueva",
//    "description_user" => null,
//    "email" => "alberthor@gmail.com",
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


<?php

require_once './bin/conexion/Conexion.php';

$conexion = new Conexion();//instanciamos una objeto de la clase conexion
$conexion->conectar();//y como ya es un objeto conexion podemos llamar al metodo conectar
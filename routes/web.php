<?php

//VIEWS
Route::get("/", ControladorUsuarios::class);
Route::get("/listar_usuarios", ControladorUsuarios::class);
Route::get("/registro", ControladorUsuarios::class."@registro");

//Recursos
Route::post("/insertar", ControladorUsuarios::class."@insertarUsuario");
<?php

//Vistas
Route::get("/", ControladorUsuarios::class);
Route::get("/listar_usuarios", ControladorUsuarios::class);
Route::get("/registro", ControladorUsuarios::class."@registro");
Route::get("/Login", ControladorUsuarios::class."@login");

//Recursos
Route::post("/Login/registrar", ControladorUsuarios::class."@insertarUsuario");

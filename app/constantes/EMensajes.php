<?php

class EMensajes {
    const CORRECTO = "CORRECTO";
    const REGISTRO_EXITOSO = "REGISTRO_EXITOSO";
    const ACTUALIZACION_EXITOSA = "ACTUALIZACION_EXITOSA";
    const ELIMINACION_EXITOSA = "ELIMINACION_EXITOSA";
    const CONSULTA_EXITOSA = "CONSULTA_EXITOSA";
    const ERROR = "ERROR";
    const ERROR_REGISTRO = "ERROR_REGISTRO";
    const ERROR_ACTUALIZACION = "ERROR_ACTUALIZACION";
    const ERROR_ELIMINACION = "ERROR_ELIMINACION";
    const ERROR_CONSULTA = "ERROR_CONSULTA";
    const NO_HAY_REGISTROS = "NO_HAY_REGISTROS";
    const ERROR_CONEXION_BD = "ERROR_CONEXION_BD";
    
    
    public static function getMensaje($codigo) {
        switch ($codigo){
            case EMensajes::CORRECTO:
                return new Respuesta(1,"Se ha realizado la operación de manera correcta.");
            case EMensajes::REGISTRO_EXITOSO:
                return new Respuesta(1,"Se ha realizado el registro con éxito.");
            case EMensajes::ACTUALIZACION_EXITOSA:
                return new Respuesta(1,"Se ha actualizado el registro con éxito.");
            case EMensajes::CONSULTA_EXITOSA:
                return new Respuesta(1,"Se ha relizado la consulta con éxito.");
            case EMensajes::ELIMINACION_EXITOSA:
                return new Respuesta(1,"Se ha eliminado el registro con éxito.");
            case EMensajes::ERROR:
                return new Respuesta(-1,"Se ha producido un error al realizar la operación.");
            case EMensajes::ERROR_REGISTRO:
                return new Respuesta(-1,"Se ha producido un error al realizar el registro.");
            case EMensajes::ERROR_ACTUALIZACION:
                return new Respuesta(-1,"Se ha producido un error al realizar la actualización.");
            case EMensajes::ERROR_CONSULTA:
                return new Respuesta(-1,"Se ha producido un error al realizar la consulta.");
            case EMensajes::ERROR_ELIMINACION:
                return new Respuesta(-1,"Se ha producido un error al  realizar la eliminación.");
            case EMensajes::NO_HAY_REGISTROS:
                return new Respuesta(-1,"No se encuentra regirstros en la base de datos.");
            case EMensajes::ERROR_CONEXION_BD:
                return new Respuesta(-1,"Se ha producido un error al intetar conectar con la base de datos.");
        }
    }
}


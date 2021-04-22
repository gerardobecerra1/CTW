<?php

class EMensajes {
    const CORRECTO = "CORRECTO";
    const ERROR = "ERROR";
    const REGISTRO_EXITOSO = "REGISTRO_EXITOSO";
    const ERROR_REGISTRO = "ERROR_REGISTRO";
    const ACTUALIZACION_EXITOSA = "ACTUALIZACION_EXITOSA";
    const ERROR_ACTUALIZACION = "ERROR_ACTUALIZACION";
    const ELIMINACION_EXITOSA = "ELIMINACION_EXITOSA";
    const ERROR_ELIMINACION = "ERROR_ELIMINACION";
    const CONSULTA_EXITOSA = "CONSULTA_EXITOSA";
    const ERROR_CONSULTA = "ERROR_CONSULTA";
    
    public static function getMensaje($codigo) {
        switch ($codigo){
            case EMensajes::CORRECTO:
                return new Respuesta(1,"Se ha realizado la operación de manera correcta.");
            case EMensajes::ERROR:
                return new Respuesta(-1,"Se ha producido un error al realizar la operación.");
            case EMensajes::REGISTRO_EXITOSO:
                return new Respuesta(1,"Se ha realizado el registro con éxito.");
            case EMensajes::ERROR_REGISTRO:
                return new Respuesta(-1,"Se ha producido un error al realizar el registro.");
            case EMensajes::ACTUALIZACION_EXITOSA:
                return new Respuesta(1,"Se ha actualizado el registro con éxito.");
            case EMensajes::ERROR_ACTUALIZACION:
                return new Respuesta(-1,"Se ha producido un error al realizar la actualización.");
            case EMensajes::CONSULTA_EXITOSA:
                return new Respuesta(1,"Se ha relizado la consulta con éxito.");
            case EMensajes::ERROR_CONSULTA:
                return new Respuesta(-1,"Se ha producido un error al realizar la consulta.");
            case EMensajes::ELIMINACION_EXITOSA:
                return new Respuesta(1,"Se ha eliminado el registro con éxito.");
            case EMensajes::ERROR_ELIMINACION:
                return new Respuesta(-1,"Se ha producido un error al  realizar la eliminación.");
        }
    }
}


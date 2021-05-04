var vista = {
    controles: {
        formRegistro: $('#formRegistrar'),   
    },
    init: function(){
        vista.eventos();
    },
    eventos: function(){
        vista.controles.formRegistro.on('submit',vista.callbacks.eventos.accionesFormRegistro.ejecutar)
    },
    callbacks:{
        eventos:{
            accionesFormRegistro:{
                ejecutar:function(evento){
                    __app.detenerEvento(evento);
                    var form = vista.controles.formRegistro;
                    var obj = form.getFormData();
                    vista.peticiones.resgistrarUsuarios(obj);
                }
            }
        },
        peticiones:{
            beforeSend: function(){
                vista.controles.formRegistro.find('input,button').prop('disabled',true);
            },
            completo: function(){
                vista.controles.formRegistro.find('input,button').prop('disabled',false);
            },
            finalizado: function(respuesta){
                if(__app.validarRespuesta(respuesta)){
                    vista.controles.formRegistro.find('input').val('');
                    swal('Correcto','Se ha registrado correctamente el usuario', 'success');
                    return;
                }
                swal('Error',respuesta.mensaje, 'error');
            }
        }
    },
    peticiones:{
        resgistrarUsuarios: function(obj){
            __app.post(RUTAS_API.USUARIOS.REGISTRAR_USUARIO, obj)
            .beforeSend(vista.callbacks.peticiones.beforeSend)
            .complete(vista.callbacks.peticiones.completo)
            .success(vista.callbacks.peticiones.finalizado)
            .error(vista.callbacks.peticiones.finalizado)
            .send()
        }
    }
};
$(vista.init);
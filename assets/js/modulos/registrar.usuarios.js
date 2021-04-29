var vista = {
    controles: {
        formRegistro: $('#formRegistro'),   
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
                ejecutar:function(){
                    __app.detenerEvento(evento);
                    var form = vista.controles.formRegistro;
                    var obj = form.getFormData();
                    console.log(obj);
                }
            }
        }
    },
    peticiones:{
        resistrarUsuarios: function(){
            
        }
    }
};
$(vista.init);
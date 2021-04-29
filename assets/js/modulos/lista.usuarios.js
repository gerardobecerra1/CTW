var vista = {//creamos un objeto
    controles: {//Atrubutos
        tbodyListaUsuarios: $('#tablaListaUsuarios tbody')
    },
    init: function () {
        vista.eventos();
        vista.peticiones.listarUsuarios();
    },
    eventos: function () {

    },
    callbacks: {
        eventos: {

        },
        peticiones: {
            listarUsuarios: {
                beforeSend: function () {
                    var tbody = vista.controles.tbodyListaUsuarios;
                    tbody.html(vista.utils.templates.consultando());
                },
                completo: function (respuesta) {
                    var tbody = vista.controles.tbodyListaUsuarios;
                    var datos = __app.parsearRespuesta(respuesta);
                    if (datos && datos.length > 0) {
                        tbody.html('');//limpia los componentes dentro de tbody
                        for (var i = 0; i < datos.length; i++) {
                            var dato = datos[i];
                            console.log();
                            tbody.append(vista.utils.templates.item(dato));//mostramos los datos
                        }
                    } else {
                        tbody.html(vista.utils.templates.noHayRegistros());
                    }
                }
            }
        }
    },
    peticiones: {
        listarUsuarios: function () {
            __app.get(RUTAS_API.USUARIOS.LISTAR)
                    .beforeSend(vista.callbacks.peticiones.listarUsuarios.beforeSend)
                    .success(vista.callbacks.peticiones.listarUsuarios.completo)
                    .error(vista.callbacks.peticiones.listarUsuarios.completo)
                    .send();
        }
    },
    utils: {
        templates: {
            item: function (obj) {
                return '<tr>'
                        + '<td>' + obj.username + '</td>'
                        + '<td>' + obj.name_user + '</td>'
                        + '<td>' + obj.last_name + '</td>'
                        + '<td>' + obj.email + '</td>'
                        + '<td>' + obj.registered_date + '</td>'
                        + '<td>' + obj.date_of_last_change + '</td>'
                        + '<td>'
                        + '<a href="javascript:;" class="btn-accion editar">Editar</a>'
                        + '  |  '
                        + '<a href="javascript:;" class="btn-accion eliminar">Eliminar</a>'
                        + '</td>'
                        + '</tr>';
            },
            consultando: function () {
                return '<tr><td colspan="6">Consultando...</td></tr>'
            },
            noHayRegistros: function () {
                return '<tr><td colspan="6">No hay registros...</td></tr>';
            }
        }
    },
};
$(vista.init);
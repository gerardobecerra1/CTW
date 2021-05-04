<html>
    <head>
        <title>Proyecto 1 | Insertar con Ajax</title>
        <link href="<?= URL::to("assets/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css"/>
    </head>
    <body data-urlbase="<?= URL::base() ?>">
        <div class="container">
            <div class="card mt-5">
                <div class="card-header bg-dark text-white">
                    <h5>Proyecto 1</h5>
                </div>
                <div class="card-body">
                    <div class="btn-group">
                        <a href="<?= URL::base() ?>">Lista usuarios</a>
                    </div>
                    <hr/>
                    <h4 class="card-title mb-4">Insertar con AJAX</h4>
                    <form id="formRegistrar" action="insertar" method="POST">
                        <select class="selector" name="tipo" id="tipo">
                            <option value="Student" selected>Student</option>
                            <option value="Teacher">Teacher</option>
                        </select>
                        <div class="form-group">
                            <label for="username">Username (*):</label>
                            <input type="text" class="form-control" id="username" name="username" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="name">Name (*):</label>
                            <input type="text" class="form-control" id="name" name="name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="last">Last name (*):</label>
                            <input type="text" class="form-control" id="last" name="last" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email (*):</label>
                            <input type="email" class="form-control" id="email" name="correo" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" class="form-control" id="password" name="password" />
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="<?= URL::to("assets/plugins/jquery.js") ?>" type="text/javascript"></script>
        <script src="<?= URL::to("assets/bootstrap/js/bootstrap.min.js") ?>" type="text/javascript"></script>
        <script src="<?= URL::to("assets/js/global/helperform.js") ?>" type="text/javascript"></script>
        <script src="<?= URL::to("assets/js/global/rutas.api.js") ?>" type="text/javascript"></script>
        <script src="<?= URL::to("assets/js/global/app.global.js") ?>" type="text/javascript"></script>
        <script src="<?= URL::to("assets/js/modulos/registrar.usuarios.js") ?>" type="text/javascript"></script>
    </body>
</html>
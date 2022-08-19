<?php
require_once "vistas/modulos/header.php";

?>
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">USUARIOS</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Insertar usuarios</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" autocomplete="off" name="formulariou" id="formulariou" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="form-group col-md-6" id="grupoUsuario">
                            <label>Usuario</label>
                            <div class="negacion">
                                <input type="txt" class="form-control" id="txtUsuario" autocomplete="off" name="txtUsuario" placeholder="Usuario">
                                <i class=" iconoDeError fas fa-angry"></i>

                            </div>
                            <p class="error">El usuario debe tener de 4 a 14 caracteres, incluidos Letras, numeros, guion y guion_bajo </p>
                        </div>


                        <div class="form-group col-md-6" id="grupoContraseña">
                            <div class="negacion">
                                <label>Contraseña</label>
                                <input type="password" class="form-control" id="txtContraseña" autocomplete="off" name="txtContraseña" placeholder="Contraseña">
                                <i class=" iconoDeError fas fa-angry"></i>

                            </div>
                            <p class="error">la contraseña debe tener de 4 a 12 caracteres, incluidos Letras, numeros, guion y guion_bajo </p>

                        </div>
                        <div class="form-group col-md-6" id="grupoNombre">
                            <div class="negacion">
                                <label for="txtNombre">Nombre</label>
                                <input type="txt" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre">
                                <i class=" iconoDeError fas fa-angry"></i>

                            </div>
                            <p class="error">El nombre tiene que ser de 1 a 40 dígitos y no puede contener numeros ni caracteres especiales</p>

                        </div>
                        <div class="form-group col-md-6" id="grupoApellido">
                            <div class="negacion">
                                <label for="txtApellido">Apellido</label>
                                <input type="txt" class="form-control" id="txtApellido" name="txtApellido" placeholder="Apellido">
                                <i class=" iconoDeError fas fa-angry"></i>
                            </div>
                            <p class="error">El Apellido tiene que ser de 1 a 40 dígitos y no puede contener numeros ni caracteres especiales</p>

                        </div>
                        <div class="form-group col-md-6" id="grupoCedula">
                            <div class="negacion">
                                <label for="txtCedula">Cedula</label>
                                <input type="txt" class="form-control" id="txtCedula" name="txtCedula" placeholder="Cedula">
                                <i class=" iconoDeError fas fa-angry"></i>
                            </div>
                            <p class="error">la cedula tiene que ser de 7 a 10 dígitos </p>
                        </div>
                        <div class="form-group col-md-6" id="grupoEmail">
                            <div class="negacion">
                                <label for="txtEmail">Email</label>
                                <input type="txt" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email">
                                <i class=" iconoDeError fas fa-angry"></i>
                            </div>
                            <p class="error">Por favor ingrese el correo correctamente</p>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="txt">Rol:</label>
                            <select name="txtRol" id="txtRol" class="form-control" required>
                                <option value=""> Seleccione Rol </option>
                                <?php
                                $objCtrUsuario = new ControllerUsuario();
                                $listaUsuario = $objCtrUsuario->ctrMostrarRol();
                                foreach ($listaUsuario as $dato) {
                                    echo '<option value="' . $dato["id"] . '"> ' . $dato["tipo"] . ' </option>';
                                }
                                ?>

                            </select>
                        </div>
                        <div class="form-group col-md-6 " id="grupoCelular">
                            <div class="negacion">
                                <label for="txtCelular">Celular</label>
                                <input type="txt" class="form-control" id="txtCelular" name="txtCelular" placeholder="Celular">
                                <i class=" iconoDeError fas fa-angry"></i>
                            </div>
                            <p class="error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>


                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>


                </form>
            </div>
            <?php
            if (isset($_POST['txtNombre'])) {
                $objCon = new ControllerUsuario();
                $objCon->crtInsertarUsuario(
                    $_POST['txtUsuario'],
                    $_POST['txtContraseña'],
                    $_POST['txtNombre'],
                    $_POST['txtApellido'],
                    $_POST['txtCedula'],
                    $_POST['txtEmail'],
                    $_POST['txtCelular'],
                    $_POST['txtRol']
                );
            }
            ?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<?php
require_once "vistas/modulos/footer.php";

?>
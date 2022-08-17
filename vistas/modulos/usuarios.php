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
                <form method="post" autocomplete="off" name="formulario" id="formulario" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="form-group col-md-6">
                            <label for="txtUsuario">Usuario</label>
                            <input type="txt" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="Usuario">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="txtContraseña">Contraseña</label>
                            <input type="password" class="form-control" id="txtContraseña" name="txtContraseña" placeholder="Contraseña">
                        </div>


                        <div class="form-group col-md-6">
                            <label for="txtNombre">Nombre</label>
                            <input type="txt" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtApellido">Apellido</label>
                            <input type="txt" class="form-control" id="txtApellido" name="txtApellido" placeholder="Apellido">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtCedula">Cedula</label>
                            <input type="txt" class="form-control" id="txtCedula" name="txtCedula" placeholder="Cedula">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtEmail">Email</label>
                            <input type="txt" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="txt">Rol:</label>
                            <select name="txtRol" id="txtRol" class="form-control" required>
                                <option value=""> Seleccione Rol </option>
                                <?php
                                $objCtrUsuario = new ControllerUsuario();
                                $listaUsuario = $objCtrUsuario->ctrMostrarRol();
                                foreach ($listaUsuario as $dato) {
                                    echo '<option value="'. $dato["id"].'"> ' . $dato["tipo"] . ' </option>';
                                }
                                ?>

                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtCelular">Celular</label>
                            <input type="txt" class="form-control" id="txtCelular" name="txtCelular" placeholder="Celular">
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
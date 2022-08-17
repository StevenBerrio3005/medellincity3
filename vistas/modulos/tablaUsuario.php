<?php
require_once "vistas/modulos/header.php";

?>
<style>
    table{
        font-size: 1vw;
    }
</style>
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
             <a name="" id="" class="btn btn-outline-success col-md-1" href="index.php?ruta=reporteUsuarios" role="button"><i class="fas fa-file-excel"></i></a>  
             <a name="" id="" class="btn btn-outline-danger col-md-1" href="index.php?ruta=reporteUsuarios" role="button"><i class="fas fa-file-pdf"></i></a> 
        </div>
        <div class="card-body">
        <table class="table" id="usuarios" >
            <thead class="table-dark">

                <th>id</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cedula</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>id_tipo</th>
                <th>funciones</th>

            </thead>
            <tbody>
                <?php
                $objCtrCtrUsuario = new ControllerUsuario();
                $listaDeUsuario = $objCtrCtrUsuario->ctrListarUsuario();
                foreach ($listaDeUsuario as $dato) {
                    echo "
                        <tr>
                             <td>" . $dato["id"] . "</td>
                             <td>" . $dato["user"] . "</td>
                             <td>" . $dato["password"] . "</td>
                             <td>" . $dato["nombres"] . "</td>
                             <td>" . $dato["apellidos"] . "</td>
                             <td>" . $dato["cedula"] . "</td>
                             <td>" . $dato["email"] . "</td>
                             <td>" . $dato["telefono"] . "</td>
                             <td>" . $dato["id_tipo"] . "</td>


                             <td>
                                <button type='button' title=' Mdificar Usuario' class='btn btn-outline-primary' id='boton1' data-toggle='modal' data-target='#ModificarModal' onclick='modificar(this.parentElement.parentElement);' ><i class='fas fa-edit'></i> </button>
                                
                                <button type='button' title=' Eliminar Usuario' class='btn btn-outline-danger' id='boton2' onclick='eliminarU(this.parentElement.parentElement);' ><i class='fas fa-eraser'></i></button>
                            </td>
                             

                                
                        </tr>
                    ";
                }
                ?>

            </tbody>

        </table>
        <!--madamos los parametror al controlador  -->

      <!-- elimar a Usuario -->
      <?php
      if (isset($_GET['eliminarU'])) {
        $objCtrUsuario = new ControllerUsuario;
        $objCtrUsuario->ctrEliminarUsuario();
      }
      ?>
    

        <!-- modal para eliminar producto -->
        <div class="modal  fade" id="ModificarModal" tabindex="-1" aria-labelledby="ModificarModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="modalC">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModificarModalLabel">Modificar cliente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" autocomplete="off" name="formulario" id="formulario" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="form-group col-md-6">
                            <label for="txtId">Id</label>
                            <input type="txt" class="form-control" id="MtxtId" name="MtxtId" placeholder="Id">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtUsuario">Usuario</label>
                            <input type="txt" class="form-control" id="MtxtUsuario" name="MtxtUsuario" placeholder="Usuario">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="txtContraseña">Contraseña</label>
                            <input type="txt" class="form-control" id="MtxtContraseña" name="MtxtContraseña" placeholder="Contraseña">
                        </div>


                        <div class="form-group col-md-6">
                            <label for="txtNombre">Nombre</label>
                            <input type="txt" class="form-control" id="MtxtNombre" name="MtxtNombre" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtApellido">Apellido</label>
                            <input type="txt" class="form-control" id="MtxtApellido" name="MtxtApellido" placeholder="Apellido">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtCedula">Cedula</label>
                            <input type="txt" class="form-control" id="MtxtCedula" name="MtxtCedula" placeholder="Cedula">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtEmail">Email</label>
                            <input type="txt" class="form-control" id="MtxtEmail" name="MtxtEmail" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="txt">Rol:</label>
                            <select name="MtxtRol" id="MtxtRol" class="form-control" required>
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
                            <input type="txt" class="form-control" id="MtxtCelular" name="MtxtCelular" placeholder="Celular">
                        </div>
                    </div>
                    <!-- /.card-body -->
                            <!-- /.card-body -->
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>


                </form>
                <?php
                    if (isset($_POST['MtxtId'])) {
                     $objCtrUsuario = new ControllerUsuario();
                     $objCtrUsuario->ctrModificarUsuario();
                    }
                ?>
                </div>
            </div>
        </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">

        </div>
        <!-- /.card-footer-->


    </div>
</section>
<?php
    require_once "vistas/modulos/footer.php";

?>
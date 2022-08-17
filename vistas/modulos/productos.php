<?php
require_once "vistas/modulos/header.php";

?>
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">PRODUCTOS</h3>

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
                    <h3 class="card-title">Insertar Producto</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" autocomplete="off" name="formulario" id="formulario" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="form-group col-md-6">
                            <label for="txtNombre">Nombre</label>
                            <input type="txt" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Descripcion</label>
                            <textarea name="txtDescripcion" id="txtDescripcion" name="txtDescripcion" cols="30" rows="2" class="form-control" placeholder=" descripcion del producto"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txTalla">Talla</label>
                            <input type="txt" class="form-control" id="txtTalla" name="txtTalla" placeholder="Talla">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtValor">Valor</label>
                            <input type="txt" class="form-control" id="txtValor" name="txtValor" placeholder="Valor">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtCantidad">Cantidad</label>
                            <input type="txt" class="form-control" id="txtCantidad" name="txtCantidad" placeholder="Cantidad">
                        </div>

                        <div class="container2">
                            <div class="campImg" id="boton">
                                <label for="imagen"></label>
                                <img src="./view/img/image-solid.svg" alt="" id="img-imagen" title="AGREGAR UNA IMAGEN">
                                <input type="file" name="imagen" id="imagen" class="file" onchange="vista_preliminar(event)" accept=".png, .jpg, .jpeg" placeholder="imagen del proyecto">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>


                </form>
            </div>
            <?php
            if (isset($_POST['txtNombre']) and $_POST['txtNombre'] != null) {
                $objCon = new ControladorProducto();
                $objCon->ctrInsertarProducto(
                    $_POST['txtNombre'],
                    $_POST['txtTalla'],
                    $_POST['txtCantidad'],
                    $_POST['txtDescripcion'],
                    $_POST['txtValor'],
                    file_get_contents($_FILES['imagen']['tmp_name'])
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
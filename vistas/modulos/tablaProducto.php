<?php
require_once "vistas/modulos/header.php";

?>
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">

            <a name="" id="" class="btn btn-outline-success col-md-1" href="index.php?ruta=reporteProducto" role="button"><i class="fas fa-file-excel"></i></a>
        </div>
        <div class="card-body">
            <table class="table" id="productos">
                <thead class="table-dark">

                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Talla</th>
                    <th>Cantidad</th>
                    <th>Descripcion</th>
                    <th>Valor</th>
                    <th>Imagen</th>
                    <th>funciones</th>

                </thead>
                <tbody>
                    <?php
                    $objCtrProdcuto = new ControladorProducto();
                    $listaDeproductos = $objCtrProdcuto->ctrListarProductos();
                    foreach ($listaDeproductos as $dato) {
                        echo "
                            <tr>
                            <td>" . $dato["id"] . "</td>
                            <td>" . $dato["nombre"] . "</td>
                            <td>" . $dato["talla"] . "</td>
                            <td>" . $dato["cantidad"] . "</td>
                            <td>" . $dato["descripcion"] . "</td>
                            <td>" . $dato["valor"] . "</td>
                            <td>
                                <img style='height: 100px; width: 100px' class='img-thumbnail' src='data:image/jpeg;base64," . base64_encode($dato["imagen"]) . "'/>
                            </td>
                            <td>
                            <button type='button' title=' Modificar producto' class='btn btn-outline-primary' id='boton1' data-toggle='modal' data-target='#ModificarModal' onclick='modificarP(this.parentElement.parentElement);' ><i class='fas fa-edit'></i> </button>
                            <button type='button' title=' Eliminar producto' class='btn btn-outline-danger' id='boton2' onclick='eliminar(this.parentElement.parentElement);' ><i class='fas fa-eraser'></i></button>
                            </td>
                        </tr>
                            ";
                    }

                    ?>

                </tbody>

            </table>
            <!--madamos los parametror al controlador  -->
            <?php
            if (isset($_GET['eliminar'])) {
                $objCtrProdcuto = new ControladorProducto;
                $objCtrProdcuto->ctrEliminarProductos();
            }
            ?>

            <!-- modal para eliminar producto -->
            <div class="modal  fade" id="ModificarModal" tabindex="-1" aria-labelledby="ModificarModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" id="modalC">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModificarModalLabel">Modificar productos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" autocomplete="off" name="formulario" id="formulario" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group col-md-6">
                                    <label for="MtxtCodigo">Codigo</label>
                                    <input type="txt" class="form-control" id="MtxtCodigo" name="MtxtCodigo" placeholder="Nombre">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="txtNombre">Nombre</label>
                                    <input type="txt" class="form-control" id="MtxtNombre" name="MtxtNombre" placeholder="Nombre">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Descripcion</label>
                                    <textarea name="MtxtDescripcion" id="MtxtDescripcion" name="MtxtDescripcion" cols="30" rows="2" class="form-control" placeholder=" descripcion del producto"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="txTalla">Talla</label>
                                    <input type="txt" class="form-control" id="MtxtTalla" name="MtxtTalla" placeholder="Talla">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="txtValor">Valor</label>
                                    <input type="txt" class="form-control" id="MtxtValor" name="MtxtValor" placeholder="Valor">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="txtCantidad">Cantidad</label>
                                    <input type="txt" class="form-control" id="MtxtCantidad" name="MtxtCantidad" placeholder="Cantidad">
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
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                            <?php

                            if (isset($_POST['MtxtCodigo'])) {
                                $objCtrProdcuto = new ControladorProducto();
                                $listaDeproductos = $objCtrProdcuto->ctrModificarProductos();
                            }
                            ?>  


                        </form>


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
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
                <form method="post" name="formulario" id="formulario" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="form-group col-md-6" id="grupoNombre">
                            <div class="negacion">
                                <label for="txtNombre">Nombre</label>
                                <input type="txt" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre">
                                <i class=" iconoDeError fas fa-angry"></i>
                            </div>
                            <p class="error">El nombre tiene que ser de 1 a 40 dígitos y no puede contener numeros ni caracteres especiales</p>


                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Descripcion</label>
                            <textarea name="txtDescripcion" id="txtDescripcion" name="txtDescripcion" cols="30" rows="2" class="form-control" placeholder=" descripcion del producto"></textarea>
                        </div>
                        <div class="form-group col-md-6" id="grupoTalla">
                            <div class="negacion">
                                <label for="txTalla">Talla</label>
                                <input type="txt" class="form-control" id="txtTalla" name="txtTalla" placeholder="Talla">
                                <i class="iconoDeError fas fa-angry"></i>
                            </div>
                            <p class="error">la talla debe de tener de 1 a 3 carateres</p>


                        </div>
                        <div class="form-group col-md-6" id="grupoValor">
                            <div class="negacion">
                                <label for="txtValor">Valor</label>
                                <input type="txt" class="form-control" id="txtValor" name="txtValor" placeholder="Valor">
                                <i class=" iconoDeError fas fa-angry"></i>
                            </div>
                            <p class="error">El valor solo pude tener numeros</p>
                        </div>
                        <div class="form-group col-md-6" id="grupoCantidad">
                            <div class="negacion">
                                <label for="txtCantidad">Cantidad</label>
                                <input type="txt" class="form-control" id="txtCantidad" name="txtCantidad" placeholder="Cantidad">
                                <i class=" iconoDeError fas fa-angry"></i>
                            </div>
                            <p class="error">La cantidad solo pude tener numeros</p>

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
<script>
const formularios2 = document.getElementById('formulario');
const inputs2 = document.querySelectorAll('#formulario input');
const expresiones = {
        nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
        talla: /^[a-zA-ZÀ-ÿ\s]{1,3}$/, // Letras y espacios, pueden llevar acentos.
        valor: /^\d{3,14}$/, // 7 a 14 numeros.
        cantidad: /^\d{1,14}$/, // 7 a 14 numeros.
    }
const campos = {
    Nombre: false,
    Talla: false,
    Valor:false,
    Cantidad: false
}


const validarFormulario = (e) => {
    switch (e.target.name) {
        case "txtNombre":
            validarCampo(expresiones.nombre, e.target, 'Nombre');
            break;
        case "txtTalla":
            validarCampo(expresiones.talla, e.target, 'Talla');
            break;
        case "txtValor":
            validarCampo(expresiones.valor, e.target, 'Valor');
            break;
        case "txtCantidad":
            validarCampo(expresiones.cantidad, e.target, 'Cantidad');
            break;

    }
   
}
const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo${campo}`).classList.remove('form-groun-incorrecto');
        document.getElementById(`grupo${campo}`).classList.add('form-groun-correcto');
        document.querySelector(`#grupo${campo} i`).classList.add('fa-grin-alt');
        document.querySelector(`#grupo${campo} i`).classList.remove('fa-angry');
        document.querySelector(`#grupo${campo} .error`).classList.remove('error-activo');
        campos[campo] = true;
    } else {
        document.getElementById(`grupo${campo}`).classList.add('form-groun-incorrecto');
        document.getElementById(`grupo${campo}`).classList.remove('form-groun-correcto');
        document.querySelector(`#grupo${campo} i`).classList.add('fa-angry');
        document.querySelector(`#grupo${campo} i`).classList.remove('fa-grin-alt');
        document.querySelector(`#grupo${campo} .error`).classList.add('error-activo');
        campos[campo] = false;
    }
}
inputs2.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);

})
formularios2.addEventListener('submit', (e) => {
    e.preventDefault();
    if ( campos.Nombre && campos.Talla && campos.Valor && campos.Cantidad ) {
        formularios2.submit();
    }else {
        Swal.fire({
            title: 'erro r!',
            text: 'Por favor rellene todos los campos correctamente.',
            icon: 'error',
            timer: 4000,
            timerProgressBar: true

        })
    }
})  
</script>
<?php
require_once "vistas/modulos/footer.php";
?>

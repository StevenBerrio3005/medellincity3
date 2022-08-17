<?php

    class ControladorProducto{
        public function ctrInsertarProducto($nombre,$talla,$cantidad,$descripcion,$valor,$imagen) { 
            $objDtoProducto = new Productos(null,$nombre,$talla,$cantidad,$descripcion,$valor,$imagen);
            $objDaoProducto = new ModelProducto($objDtoProducto);
            if ($objDaoProducto -> mldInsertarProducto()){
                echo"
                <script>
                    Swal.fire({
                        title: 'PRODUCTO AGREGADO CON EXITO',
                        text: 'producto insertado',
                        icon: 'success',
                        timer:4000,
                        timerProgressBar:true,
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ok!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location='index.php?ruta=tablaProductos';
                        }else{
                            window.location='index.php?ruta=tablaProductos';

                        }
                    })
                </script>
                ";

            }else{
                echo "<script>
                Swal.fire(
                    'GOOD',
                    'Usuario no se pudo Modificado',
                    'danger'
                  )
                ;</script>
                ";
                
            }

        }

        /* listamos los Productos DE LA BASE DE DATOS */
        public function ctrListarProductos(){
            $array = false; 
            try {
                $objDtoProductos = new Productos(null,null,null,null,null,null,NULL);
                $ojbDaoproductos = new ModelProducto($objDtoProductos);
                $array =  $ojbDaoproductos -> mdlListarproductos() -> fetchALL();

            } catch (\Throwable $e) {
                echo"Error en el controlador  de  ctrListarCliente  $e";
            }
            return $array;

        }
        public function ctrModificarProductos(){
            $ojbDtoProductos = new Productos(
                $_POST['MtxtCodigo'],
                $_POST['MtxtNombre'],
                $_POST['MtxtTalla'],
                $_POST['MtxtCantidad'],
                $_POST['MtxtDescripcion'],
                $_POST['MtxtValor'],
                file_get_contents($_FILES['imagen']['tmp_name'])
            );
            

            $ojbDaoProductos = new ModelProducto($ojbDtoProductos);
            $ojbDaoProductos -> mdlModificarProductos();
            if ($ojbDaoProductos == true) {
                echo"

                    <script>
                    Swal.fire({
                        title: 'PRODUCTO MODIFICADO',
                        text: ' Producto modificado con exito',
                        icon: 'success',
                        timerProgressBar:true,
                        timer:4000,
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, deseo modificar!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            window.location='index.php?ruta=tablaProductos';
                        }else{
                            window.location='index.php?ruta=tablaProductos';
                        }
                      })
                    </script>
                    ";
            }
                
            
            else{
                echo "<script>
                    Swal.fire(
                        'ERROR',
                        'Productos no se pudo Modificado',
                        'danger'
                      )
                    ;</script>
                    ";
            }
        }
        public function ctrEliminarProductos(){
            $ojbDtoProductos = new Productos(
                $_GET['eliminar'],
                null,
                null,
                null,
                null,
                null,
                null


            );

            $ojbDaoProductos = new ModelProducto($ojbDtoProductos);
            ($ojbDaoProductos -> mdlEliminarProductos());
            echo"<script>
                window.location='index.php?ruta=tablaProductos';
            </script>";

      
        }


    }
?>
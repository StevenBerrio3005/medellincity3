<?php
    /* CREAR UN OBJETO DE ARRANQUE  */
        if (isset($_GET['ruta'])){
            switch ($_GET['ruta']) {
                case 'producto':
                    require_once "vistas/modulos/productos.php";
                    break;
                case 'usuario':
                        require_once "vistas/modulos/usuarios.php";
                        break;
                case 'tablaProductos':
                    require_once "vistas/modulos/tablaProducto.php";
                    break;
                case 'tablaUsarios':
                    require_once "vistas/modulos/tablaUsuario.php";
                    break;
                case 'reporteProducto':
                    require_once "vistas/modulos/reporteProducto.php";
                    break;
                  case 'reporteUsuarios':
                    require_once "vistas/modulos/reporteUsuarios.php";
                    break;

                default:
                    require_once "vistas/modulos/presentacion.php";
                    break;
            }
        }else{
            require_once "vistas/modulos/presentacion.php";
        }



?>

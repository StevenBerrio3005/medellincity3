 <!-- /.content-wrapper -->

 <footer class="main-footer">
   <div class="float-right d-none d-sm-block">
     <b>Version</b> 3.1.0-rc
   </div>
   <strong>Copyright &copy;2022 <a href="#">Steven Berrio</a>.</strong> Todos los derechos reservados.
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="vistas/js/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="vistas/js/bootstrap.bundle.min.js"></script>
 <!-- AdminLTE App -->
 <script src="vistas/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="vistas/js/demo.js"></script>
 <script src="vistas/js/bootstrap.min.js"></script>
 <script src="vistas/js/producto.js"></script>
 <script src="vistas/js/usuarios.js"></script>
 <script src="vistas/js/validacionesU.js"></script>
 <script src="vistas/js/validacion.js"></script>
 <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>


 <!-----------dataTable css--------- -->
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
 <script src="cdn.datatables.net/plug-ins/1.12.1/i18n/es-CO.json"></script>

 <!--   archivo de js para mostrar lso datos a modificar -->
 <script>
   $(document).ready(function() {
     $('#productos').DataTable({
       language: {

         "autoFill": {
           "cancel": "Cancelar"
         },
         "buttons": {
           "collection": "Coleccion",
           "colvis": "Columna Visible",
           "colvisRestore": "Restaurar Columnas Visibles",
           "copy": "Copiar",
           "copyKeys": "presiones inicio + c para copiar ka infrocion de la tabla.  click en este mensaje para salir o esc.",
           "copySuccess": {
             "_": "Copiado con exito",
             "1": "Fila copiada con exito"
           },
           "copyTitle": "Tabla Copiada",
           "createState": "Crear estado",
           "pageLength": {
             "_": "ver %d filas",
             "-1": "Ver todas las Filas",
             "1": "Ver solo una fila"
           },
           "print": "Impresion",
           "removeAllStates": "Remover todos los estados",
           "removeState": "Remover",
           "renameState": "Renombrar",
           "savedStates": "Guardar Estado",
           "stateRestore": "Restaurar %d",
           "updateState": "Actualizar",
           "csv": "CSV",
           "excel": "Excel",
           "pdf": "PDF"
         },
         "datetime": {
           "hours": "hora",
           "minutes": "minuto",
           "months": {
             "0": "Enero",
             "1": "Febrero",
             "10": "Noviembre",
             "11": "Diciembre",
             "2": "Marzo",
             "3": "Abril",
             "4": "Mayo",
             "5": "Junio",
             "6": "Julio",
             "7": "Agosto",
             "8": "Septiembre",
             "9": "Octubre"
           },
           "next": "siguiente",
           "previous": "anterior",
           "seconds": "segundo",
           "weekdays": [
             "Dom",
             "Lun",
             "Mar",
             "Mir",
             "Jue",
             "Vie",
             "sab"
           ],
           "unknown": "desconocido",
           "amPm": [
             "am",
             "pm"
           ]
         },
         "editor": {
           "close": "Cerrar",
           "create": {
             "button": "Nuevo",
             "submit": "Crear",
             "title": "Crerar nueva entrada"
           },
           "edit": {
             "button": "Editar",
             "submit": "Actualizar",
             "title": "Editar Registro"
           },
           "error": {
             "system": "a ocurrido un error "
           },
           "multi": {
             "restore": "revertir cambios",
             "info": "Los elementos seleccionados contienen diferentes valores para esta entrada. Para editar y configurar todos los elementos de esta entrada en el mismo valor, haga clic o toque aquí, de lo contrario, conservar sus valores individuales.",
             "noMulti": "Múltiples valores"
           },
           "remove": {
             "button": "Borrar",
             "confirm": {
               "_": "esta seguro de eliminar %d los registros",
               "1": "esta seguro de eliminar el registro"
             },
             "submit": "Borrar",
             "title": "Borrar"
           }
         },
         "emptyTable": "Tabla Vacia",
         "info": "informacion",
         "infoEmpty": "Sin informacion",
         "lengthMenu": "Entradas",
         "loadingRecords": "Cargando...",
         "paginate": {
           "first": "primero",
           "last": "ultimo",
           "next": "siguiente",
           "previous": "anterior"
         },
         "processing": "Procesando",
         "search": "Productos",
         "searchBuilder": {
           "add": "agragar condicion",
           "button": {
             "_": "Creador de búsquedas (%d)",
             "0": "Creador de búsquedas"
           },
           "clearAll": "Quitar filtro",
           "condition": "Condicion",
           "data": "Datos",
           "deleteTitle": "eliminar regla",
           "logicAnd": "Y",
           "logicOr": "O",
           "value": "Valor"
         },
         "searchPanes": {
           "clearMessage": "Borrar Filtro",
           "collapseMessage": "desplegar todo",
           "emptyPanes": "No hay informacion",
           "loadMessage": "Cargando informacion",
           "showMessage": "Mostrar todos",
           "title": "Filtros Activos - %d"
         },
         "searchPlaceholder": "Buscar Productos",
         "select": {
           "cells": {
             "_": "%d celdas seleccionadas",
             "1": "1 celda seleccionada"
           },
           "columns": {
             "_": "%d columnas seleccionadas",
             "1": "1 columna seleccionada"
           }
         },
         "zeroRecords": "No se encontro informacion"
       }

     });
   });
 </script>
 <script>
   $(document).ready(function() {
     $('#usuarios').DataTable({

       language: {

         "autoFill": {
           "cancel": "Cancelar"
         },
         "buttons": {
           "collection": "Coleccion",
           "colvis": "Columna Visible",
           "colvisRestore": "Restaurar Columnas Visibles",
           "copy": "Copiar",
           "copyKeys": "presiones inicio + c para copiar ka infrocion de la tabla.  click en este mensaje para salir o esc.",
           "copySuccess": {
             "_": "Copiado con exito",
             "1": "Fila copiada con exito"
           },
           "copyTitle": "Tabla Copiada",
           "createState": "Crear estado",
           "pageLength": {
             "_": "ver %d filas",
             "-1": "Ver todas las Filas",
             "1": "Ver solo una fila"
           },
           "print": "Impresion",
           "removeAllStates": "Remover todos los estados",
           "removeState": "Remover",
           "renameState": "Renombrar",
           "savedStates": "Guardar Estado",
           "stateRestore": "Restaurar %d",
           "updateState": "Actualizar",
           "csv": "CSV",
           "excel": "Excel",
           "pdf": "PDF"
         },
         "datetime": {
           "hours": "hora",
           "minutes": "minuto",
           "months": {
             "0": "Enero",
             "1": "Febrero",
             "10": "Noviembre",
             "11": "Diciembre",
             "2": "Marzo",
             "3": "Abril",
             "4": "Mayo",
             "5": "Junio",
             "6": "Julio",
             "7": "Agosto",
             "8": "Septiembre",
             "9": "Octubre"
           },
           "next": "siguiente",
           "previous": "anterior",
           "seconds": "segundo",
           "weekdays": [
             "Dom",
             "Lun",
             "Mar",
             "Mir",
             "Jue",
             "Vie",
             "sab"
           ],
           "unknown": "desconocido",
           "amPm": [
             "am",
             "pm"
           ]
         },
         "editor": {
           "close": "Cerrar",
           "create": {
             "button": "Nuevo",
             "submit": "Crear",
             "title": "Crerar nueva entrada"
           },
           "edit": {
             "button": "Editar",
             "submit": "Actualizar",
             "title": "Editar Registro"
           },
           "error": {
             "system": "a ocurrido un error "
           },
           "multi": {
             "restore": "revertir cambios",
             "info": "Los elementos seleccionados contienen diferentes valores para esta entrada. Para editar y configurar todos los elementos de esta entrada en el mismo valor, haga clic o toque aquí, de lo contrario, conservar sus valores individuales.",
             "noMulti": "Múltiples valores"
           },
           "remove": {
             "button": "Borrar",
             "confirm": {
               "_": "esta seguro de eliminar %d los registros",
               "1": "esta seguro de eliminar el registro"
             },
             "submit": "Borrar",
             "title": "Borrar"
           }
         },
         "emptyTable": "Tabla Vacia",
         "info": "informacion",
         "infoEmpty": "Sin informacion",
         "lengthMenu": "Entradas",
         "loadingRecords": "Cargando...",
         "paginate": {
           "first": "primero",
           "last": "ultimo",
           "next": "siguiente",
           "previous": "anterior"
         },
         "processing": "Procesando",
         "search": "Usuarios",
         "searchBuilder": {
           "add": "agragar condicion",
           "button": {
             "_": "Creador de búsquedas (%d)",
             "0": "Creador de búsquedas"
           },
           "clearAll": "Quitar filtro",
           "condition": "Condicion",
           "data": "Datos",
           "deleteTitle": "eliminar regla",
           "logicAnd": "Y",
           "logicOr": "O",
           "value": "Valor"
         },
         "searchPanes": {
           "clearMessage": "Borrar Filtro",
           "collapseMessage": "desplegar todo",
           "emptyPanes": "No hay informacion",
           "loadMessage": "Cargando informacion",
           "showMessage": "Mostrar todos",
           "title": "Filtros Activos - %d"
         },
         "searchPlaceholder": "Buscar Usuarios",
         "select": {
           "cells": {
             "_": "%d celdas seleccionadas",
             "1": "1 celda seleccionada"
           },
           "columns": {
             "_": "%d columnas seleccionadas",
             "1": "1 columna seleccionada"
           }
         },
         "zeroRecords": "No se encontro informacion"
       }
     })

   })
 </script>



 </body>

 </html>
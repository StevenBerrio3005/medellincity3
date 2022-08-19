<?php
    
    class ControllerUsuario{
                        /* funcion para insertar el usuario */
        public function crtInsertarUsuario($usuario,$contraseña,$nombre,$apellido,$cedula,$correo,$celular,$rol){

            $objDtoUsuario = new Usuario(null,$usuario,$contraseña,$nombre,$apellido,$cedula,$correo,$celular,$rol);
            $objDaoUsuario = new ModelUsuario($objDtoUsuario);
            if ($objDaoUsuario -> mldInsertarUsuario()){
                echo"
                <script>
                Swal.fire({
                    title: 'USUARIO CREADO CON EXITO',
                    text: ' Usuario creado en la base de datos',
                    icon: 'success',
                    timerProgressBar:true,
                    timer:4000,
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location='index.php?ruta=tablaUsarios';
                    }else{
                        window.location='index.php?ruta=tablaUsarios';
                    }
                  })
                </script>
                ";

            }else{
                echo "cliente no insertado";
            }
            


        }/* fin de la funcion */
                /* funcion para mostrar el rol */
        public function ctrMostrarRol(){ 
              $lista = false;
              try {
                  $objDtoUsuario = new Usuario(null,null,null,NULL,NULL,NULL,NULL,NULL,null);
                  $objDaoUsuario = new ModelUsuario( $objDtoUsuario );
                 $lista = $objDaoUsuario -> mdlMostrarRol() -> fetchAll();
        
              } catch (PDOException $e) {
                  echo "error al mostrar los Roles de usuarios" . $e -> getMessage();
              }
              return $lista;
        }/* fin de la funcion */
        public function ctrListarUsuario(){
            $array = false; 
            try {
                $objDtoUsuario = new Usuario(null,null,null,NULL,NULL,NULL,NULL,NULL,null);
                $objDaoUsuario = new ModelUsuario($objDtoUsuario);
                $array =  $objDaoUsuario -> mdlListarUsuario() -> fetchALL();
            } catch (\Throwable $e) {
                echo"Error en el controlador $e";
            }
            return $array;

        }/* fin de la funcion */

        public function ctrModificarUsuario(){
            $ojbDtoUsuario = new Usuario(
                $_POST['MtxtId'],
                $_POST['MtxtUsuario'],
                $_POST['MtxtContraseña'],
                $_POST['MtxtNombre'],
                $_POST['MtxtApellido'],
                $_POST['MtxtCedula'],
                $_POST['MtxtEmail'],
                $_POST['MtxtCelular'],
                $_POST['MtxtRol']
                

            );
    

            $ojbDaoUsuario = new ModelUsuario($ojbDtoUsuario);
            if ($ojbDaoUsuario -> mdlModificarUsuario()==  true){

                echo"
                    <script>
                    Swal.fire({
                        title: 'USUARIO MODIFICADO CON EXITO',
                        text: 'Cambios en la base de datos',
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, deseo modificar!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                            window.location='index.php?ruta=tablaUsarios';
                        }else{
                            window.location='index.php?ruta=tablaUsarios';
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
        }/* fin de la funcion */
        public function ctrEliminarUsuario(){
            $ojbDtoUsuario = new Usuario(
                $_GET['eliminarU'],
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                null


            );

            $ojbDaoUsuario = new ModelUsuario($ojbDtoUsuario);
            ($ojbDaoUsuario -> mdlEliminarUsuarios());
            echo"<script>
                window.location='index.php?ruta=tablaUsarios';
            </script>";

      
        }/* fin de la funcion */

    }
?>
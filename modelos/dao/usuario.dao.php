<?php
    class ModelUsuario{

        private $id;
        private $usuario;
        private $contraseña;
        private $nombre;
        private $apellido;
        private $cedula;
        private $correo;
        private $celular;
        private $rol;
        private $estado;

        public function __construct($objUsuarios){

            $this->id = $objUsuarios-> getId();
            $this->usuario = $objUsuarios-> getUsuario();
            $this->contraseña = $objUsuarios->getContraseña();
            $this->nombre = $objUsuarios->getNombre();
            $this->apellido = $objUsuarios->getApellido();
            $this->cedula = $objUsuarios->getCedula();
            $this->correo = $objUsuarios->getCorreo();
            $this->celular = $objUsuarios->getCelular();
            $this->rol = $objUsuarios->getRol();

        }
        public function mldInsertarUsuario(){
            /* creamos la sentecia */
            $sql="CALL `splRegistroUsuario`(?,?,?,?,?,?,?,?);";
            $this -> estado = false;
            /* creamos el try catch  */
            try {
                /* llamamos a la conexion */
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this->usuario, PDO::PARAM_STR );
                $stmt -> bindParam(2, $this->contraseña, PDO::PARAM_STR );
                $stmt -> bindParam(3, $this->nombre, PDO::PARAM_STR );
                $stmt -> bindParam(4, $this->apellido, PDO::PARAM_STR );
                $stmt -> bindParam(5, $this->cedula, PDO::PARAM_INT );
                $stmt -> bindParam(6, $this->correo, PDO::PARAM_STR );
                $stmt -> bindParam(7, $this->celular, PDO::PARAM_INT );
                $stmt -> bindParam(8, $this->rol, PDO::PARAM_INT );
                $stmt -> execute();
                $this -> estado = true;
                


            } catch (PDOException $ex) {
                echo "Hay un error al insertar usuario " . $ex -> getMessage();
            }
            return $this -> estado;


        }/* fin de insertar usuario */
        public function mdlModificarUsuario(){
            $sql="CALL `splModificarUsuario`(?,?,?,?,?,?,?,?,?);";
            $this -> estado = false;
            /* creamos el try catch  */
            try {
                /* llamamos a la conexion */
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this->id, PDO::PARAM_INT );
                $stmt -> bindParam(2, $this->usuario, PDO::PARAM_STR );
                $stmt -> bindParam(3, $this->contraseña, PDO::PARAM_STR );
                $stmt -> bindParam(4, $this->nombre, PDO::PARAM_STR );
                $stmt -> bindParam(5, $this->apellido, PDO::PARAM_STR );
                $stmt -> bindParam(6, $this->cedula, PDO::PARAM_INT );
                $stmt -> bindParam(7, $this->correo, PDO::PARAM_STR );
                $stmt -> bindParam(8, $this->celular, PDO::PARAM_INT );
                $stmt -> bindParam(9, $this->rol, PDO::PARAM_INT );
                $stmt -> execute();
                $this -> estado = true;
            } catch (PDOException $ex) {
                echo "Hay un error en el dao de usuario " . $ex -> getMessage();
            }
            return $this -> estado;

        }
        public function mdlListarUsuario(){
            $sql="CALL `splListarUsuario`( );";
            $resultset= false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resultset = $stmt;
     
            } catch (PDOException $ex) {
                echo "Hay un error en el DAO al listar usuario " . $ex -> getMessage();
            }
            return $resultset;  
        
        }
        public function mdlMostrarRol(){             #Funcion utilizada para visualizar a todos los tipos de rol registrados
            $sql = "CALL spListarRol()";  //Procedimiento almacenado
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resulset = $stmt;
                
            } catch (PDOException $e) {
                echo "Error en el metodo consultar usuario " . $e -> getMessage();
            }
            return $resulset;
        }
        public function mdlEliminarUsuarios(){
            $sql="CALL `splEliminarUsuario`(?);";
            $this -> estado = false;

            try {
                /* llamamos a la conexion  */
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this->id, PDO::PARAM_INT );
                $stmt -> execute();
                $this -> estado = true;
                


            } catch (PDOException $ex) {
                echo "Hay un error en el dao al eliminar el cliente " . $ex -> getMessage();
            }
            return $this -> estado;


        } 
        
    }
?>
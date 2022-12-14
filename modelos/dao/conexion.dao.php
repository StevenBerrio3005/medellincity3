<?php
    class ModelConexion{

        private $user;
        private $pass;

        public function __construct($user, $pass){
            $this -> user = $user;
            $this -> pass = md5($pass,false);
        }//END CONSTRUCT

        public function getLogin(){
            
            $resultSet = false;

            $sql = "CALL `splogin`(?, ?)";

            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this -> user, PDO::PARAM_STR);
                $stmt -> bindParam(2, $this -> pass, PDO::PARAM_STR);
               

                $stmt -> execute();
                $resultSet = $stmt;                
                
            } catch (PDOException $e) {
                echo "Error en el metodo buscar password " . $e->getMessage();
                
            }
            return $resultSet;
        }
    }
?>
<?php
    class ModelProducto{
        private $codigo;
        private $nombre;
        private $talla;
        private $cantidad;
        private $descripcion;
        private $valor;
        private $imagen;
        private $estado;

        public function __construct($objProductos){
            $this-> codigo = $objProductos -> getCodigo();
            $this-> nombre = $objProductos -> getNombre();
            $this-> talla  = $objProductos -> getTalla();
            $this->cantidad = $objProductos -> getCantidad();
            $this->descripcion = $objProductos ->getDescripcion();
            $this->valor   = $objProductos -> getValor();
            $this->imagen = $objProductos -> getImagen();

        }
        public function mldInsertarProducto(){
            $sql = "CALL spInsrtarProducto (?,?,?,?,?,?)";
            $this -> estado = false;
            
            /* preparamos la conexion y llamamos al try cath */
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this -> nombre,PDO::PARAM_STR);
                $stmt -> bindParam(2, $this -> talla,PDO::PARAM_STR);
                $stmt -> bindParam(3, $this -> cantidad,PDO::PARAM_INT);
                $stmt -> bindParam(4, $this -> descripcion,PDO::PARAM_STR);
                $stmt -> bindParam(5, $this -> valor,PDO::PARAM_STR);
                $stmt -> bindParam(6, $this -> imagen,PDO::PARAM_LOB);
                $stmt -> execute();
                $this -> estado = true;
            
            }catch (PDOException $e) {
                echo "Error en el modelo mldInsertarProducto " . $e->getMessage();
            }
            return $this-> estado;

        }//FIN DE LA FUNCION mldInsertarProducto

        public function mdlListarproductos(){
            $sql="CALL `splListarProductos`( );";
            $resultset= false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resultset = $stmt;
     
            } catch (PDOException $ex) {
                echo "Hay un error en el dao al al listar Productos " . $ex -> getMessage();
            }
            return $resultset;  
        
        }
        public function mdlModificarProductos(){
            $sql="CALL `splModificarProductos`(?,?,?,?,?,?,?);";
            $this -> estado = false;
            /* creamos el try catch  */
            try {
                /* llamamos a la conexion */
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this -> codigo,PDO::PARAM_INT);
                $stmt -> bindParam(2, $this -> nombre,PDO::PARAM_STR);
                $stmt -> bindParam(3, $this -> talla,PDO::PARAM_STR);
                $stmt -> bindParam(4, $this -> cantidad,PDO::PARAM_INT);
                $stmt -> bindParam(5, $this -> descripcion,PDO::PARAM_STR);
                $stmt -> bindParam(6, $this -> valor,PDO::PARAM_STR);
                $stmt -> bindParam(7, $this -> imagen,PDO::PARAM_LOB);
                $stmt -> execute();
                $this -> estado = true;
                


            } catch (PDOException $ex) {
                echo "Hay un error en el dao al modificar Productos " . $ex -> getMessage();
            }
            return $this -> estado;

        }
        public function mdlEliminarProductos(){
            $sql="CALL `splEliminarProductos`(?);";
            $this -> estado = false;

            try {
                /* llamamos a la conexion  */
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this->codigo, PDO::PARAM_INT );
                $stmt -> execute();
                $this -> estado = true;
                


            } catch (PDOException $ex) {
                echo "Hay un error en el dao al eliminar el cliente " . $ex -> getMessage();
            }
            return $this -> estado;

        } 






                
            
        
    }
?>
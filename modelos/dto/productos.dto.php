<?php
    class Productos{
        private $codigo;
        private $nombre;
        private $talla;
        private $cantidad;
        private $descripcion;
        private $valor;
        private $imagen;
        public function  __construct($codigo,$nombre,$talla,$cantidad,$descripcion,$valor,$imagen){
            $this-> codigo = $codigo;
            $this-> nombre = $nombre;
            $this-> talla = $talla;
            $this-> cantidad = $cantidad;
            $this-> descripcion = $descripcion;
            $this-> valor = $valor;
            $this-> imagen = $imagen;
            

        }
        /* set */

        public function setCodigo($codigo) {
            $this->codigo = $codigo;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        public function setLotla($talla) {
            $this->talla = $talla;
        }
        public function setCantidad($cantidad) {
            $this-> cantidad = $cantidad;
        }
        public function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }
        public function setValor($valor) {
            $this->valor = $valor;
        }
        public function setImagen($imagen) {
            $this-> imagen = $imagen;
        }
        /* get */
        public function getCodigo() {
            return $this->codigo;
        }
        public function getNombre() {
            return $this->nombre;
        }
        public function getTalla() {
            return $this-> talla;
        }
        public function getCantidad() {
            return $this->cantidad;
        }
        public function getDescripcion() {
            return $this->descripcion;
        }
        public function getValor() {
            return $this-> valor;
        }
        public function getImagen() {
            return $this->imagen;
        }
    }


?>
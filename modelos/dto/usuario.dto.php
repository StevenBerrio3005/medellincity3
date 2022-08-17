<?php
    class Usuario{

        private $id;
        private $usuario;
        private $contraseña;
        private $nombre;
        private $apellido;
        private $cedula;
        private $correo;
        private $celular;
        private $rol;

        public function __construct($id,$usuario, $contraseña, $nombre, $apellido, $cedula, $correo, $celular, $rol){
            $this->id = $id;
            $this->usuario = $usuario;
            $this->contraseña = $contraseña;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->cedula = $cedula;
            $this->correo = $correo;
            $this->celular = $celular;
            $this->rol = $rol;


        }
        /* get */
        
        public function getId(){
            return $this->id;
            
        }
        public function getUsuario(){
            return $this->usuario; 
            
         }
        public function getContraseña(){
            return $this->contraseña;
            
        }
        public function getNombre(){
            return $this->nombre;
            
        }
        public function getApellido(){
            return $this->apellido;
            
        }
        public function getCedula(){
            return $this->cedula;
            
        }
        public function getCorreo(){
            return $this->correo;
            
        }
        public function getCelular(){
            return $this->celular;
            
        }
        public function getRol(){
            return $this->rol;
            
        }
        /* set */
        public function setId($id){
            $this->id = $id;
        }
        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }
        public function setContraseña($contraseña){
            $this->contraseña = $contraseña;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setApellidos($apellido){
            $this->apellido = $apellido;
        }
        public function setCedula($cedula){
            $this->cedula = $cedula;
        }
        public function setCorreo($correo){
            $this->correo = $correo;
        }
        public function setCelular($celular){
            $this->celular = $celular;
        }
        public function setRol($rol){
            $this->rol = $rol;
        }
        
        





    }
?>
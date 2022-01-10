<?php
    class conexion{
        private $servidor;
        private $usuario;
        private $contrasena;
        private $basedatos;
        public $conexion;
        public function_construct(){
            $this->servidor = "localhost";
            $this->usuario = "root"
            $this->contrasena = "";
            $this->basedatos = "try";
        }
        function conectar(){
            $this->conexion = new msqli($this->servidor, $this->usuario, $this->contrasena,
            $this->basedatos);
            $this->conexion->set_charset("utf8");
        }
        function cerrar(){
            $this->conexion->close();
        }
    }




?>
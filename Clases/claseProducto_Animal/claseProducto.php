<?php

    class Producto{
        private $nombre;
        private $precio;
        private $categoria;

        public function __construct($nombre, $precio, $categoria){
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->categoria = $categoria;
        
        }

        public function setPrecio($precio){
            $this->precio = $precio;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }
        public function getCategoria(){
            return $this->categoria;
        }
    }

?>
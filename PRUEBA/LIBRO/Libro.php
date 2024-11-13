<?php
    class Libro{
        private $nombre;
        private $autor;
        private $paginas;

        public function __construct($nombre, $autor, $paginas){
            $this->nombre= $nombre;
            $this->autor= $autor;
            $this->paginas= $paginas;
        }
        public function setNombre($nombre){
            $this->nombre= $nombre;
        }
        public function getNombre(){
            return $htis->nombre;
        }
        public function setAutor($autor){
            $this->autor=$autor;
        }
        public function getAutor(){
            return $this->autor;
        }
        public function setPaginas($paginas){
            $this->paginas=$paginas;
        }
        public function getPaginas(){
            return $this->paginas;
        }

        public function mostrarLibro(){
            echo" Datos del Libro:<br>
                Nombre: $this->nombre<br>
                Autor= $this->autor<br>
                Número de páginas: $this->paginas .<br>";
        }
    }
   // $l=new Libro("El Principito", "Pierre de Saint", 305);
    //$l->mostrarLibro();
?>
<?php
    class PersonajeY{
        private $nombre;
        private $fechaN;

        public function __construct($nombre, $fechaN){
            $this->nombre= $nombre;
            $this->fechaN= $fechaN;
        }
        public function setNombre($nombre){
            $this->nombre= $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setFecha($fechaN){
            $this->fechaN= $fechaN;
        }
        public function getFecha(){
            return $this->fechaN;
        }

    }

?>
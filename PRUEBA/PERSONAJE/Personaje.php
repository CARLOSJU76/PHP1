<?php
    class Personaje{
        private $nombre;
        private $birthday;

        public function __construct($nombre, $birthday) {
            $this->nombre= $nombre;
            $this->birthday= $birthday;
        }

        public function setNombre($nombre){
            $this->nombre= $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setBirthday($birthday){
            $this->birthday= $birthday;
        }
        public function getBirthday(){
            return $this->birthday;
        }
    }
?>
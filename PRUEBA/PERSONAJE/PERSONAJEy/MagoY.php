<?php
    include_once('Personaje.php');

    class MagoY extends PersonajeY{
        private $poder;
        private $elemento;

        public function __construct($nombre, $fechaN, $poder, $elemento){
            parent::__construct($nombre, $fechaN);
                $this->poder= $poder;
                $this->elememto= $elemento;
        }
        public function setPoder($poder){
            $this->poder= $poder;
        }
        public function getPoder(){
            return $this->poder;
        }
        public function setElemento($elemento){
            $this->elemento= $elemento;
        }
        public function getElemento(){
            return $this->elemento;
        }
        public function mostrarMago(){
            echo "Se trata del Mago " .$this->getNombre(). ".<br>".
                "Su fecha de nacimiento es: " .$this->getFecha() . ".<br>".
                "Su poder es: " .$this->poder . ".<br>".
                "Su elemento es: " $this->elemento . ".<br>";
        }
    }
?>
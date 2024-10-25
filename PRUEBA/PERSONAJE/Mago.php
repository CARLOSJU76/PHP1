<?php
    include_once('Personaje.php');



    class Mago extends Personaje{
        private $poder;
        private $elemento;

        public function __construct($nombre,$birthday,$poder,$elemento){
            parent:: __construct($nombre, $birthday);
            $this->poder= $poder;
            $this->elemento= $elemento;
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
            return $this->elemento= $elemento;
        }
        public function mostrarPersonaje(){
            echo "El  Mago ".$this->getNombre(). ": <br>".
            " Nació : el " .$this->getBirthday().". <br>".
            " Su poder es: ".$this->poder.".<br>".
            " Su elemento es: ".$this->elemento.".<br><br>";
        
        }
    }

    //$Cabrini= new Mago("Cabrini", "20 de octubre de 1999", "adivinación", "fuego");
    //$Cabrini->mostrarPersonaje();
?>
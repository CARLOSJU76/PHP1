<?php
    class Circulo{
        private $radio;

        public function __construct($radio){
            $this->radio=$radio;
        }
        public function setRadio($radio){
            $this->radio=$radio;
        }
        public function getRadio(){
            return $this->radio;
        }
        public function Perimetro(){
            $perimetro= 2*M_PI * $this->radio;
            return $perimetro;
        }
        public function Area(){
            $area= M_PI * pow($this->radio,2);
            return $area;
        }
        
        public function mostrarDatos(){
            echo "El perímetro de círculo es: ".$this->Perimetro(). "<br>".
                "El área del círculo es: " .$this->Area();
        }
    }

    

?>
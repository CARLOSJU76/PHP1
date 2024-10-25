<?php
    class Rectangulo{
        private $ancho;
        private $largo;

        public  function __construct($ancho, $largo){
            $this->ancho= $ancho;
            $this->largo= $largo;
        }
        public function setAncho($ancho){
            $this->ancho= $ancho;
        }
        public function getAncho(){
            return $this->ancho;
        }
        public function setLargo($largo){
            $this->largo= $largo;
        }
        public function getLargo(){
            return $this->largo;
        }

        public function Perimetro(){
            $perimetro= 2* $this->ancho + (2*$this->largo);
            return $perimetro;
        }
        public function Area(){
            $area= $this->ancho * $this->largo;
            return $area;
        }

        function mostrarRectangulo(){
            echo"Atributos del Rectángulo:  <br>".
                "Ancho: $this->ancho <br>".
                "Largo: $this->largo <br>".
                "Perimetro: ".$this->Perimetro()." Unidades lineales <br>".
                "Area: ".$this->Area(). " Unidades Cuadradas";

                echo "<br><a href='FormRectangulo.html'>Volver</a>";
        }

    }

    //$rec1= new Rectangulo(5, 7);
    //$rec1->mostrarRectangulo();
?>
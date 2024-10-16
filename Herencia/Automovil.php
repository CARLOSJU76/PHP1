<?php

    include_once("Vehiculo.php");
    class Automovil extends Vehiculo{
        private $combustible;

        public function __construct($placa, $marca, $combustible){
            parent:: __construct($placa, $marca);
                $this->combustible= $combustible;
        }
        public function setCombustible($combustible){
            $this->combustibe= $combustible;
        }
        public function getCombustible(){
            return $this->combustible;
        }
        public function mostrar(){
            echo "Datos del AUTOMOVIL: <br>".
                 "Placa: " .$this->getPlaca(). "<br>".
                 "Marca: " .$this->getMarca(). "<br>".
                 "Combustible: ".$this->combustible ."<br><br>";
                 
                 ;
        
        }
    }
?>
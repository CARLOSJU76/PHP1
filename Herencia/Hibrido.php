<?php

    include_once('Automovil.php');
    class Hibrido extends Automovil{
        private $carga;

        public function __construct($placa, $marca, $combustible, $carga){
            parent:: __construct($placa, $marca, $combustible);
                $this->carga= $carga;
        }
        public function setCarga($carga){
            $this->carga= $carga;
        }
        public function getCarga(){
            return $this->carga;
        }
        public function mostrar(){
            echo "Datos del Hibrido: <br>".
                "Placa: ".$this->getPlaca()."<br>".
                "Marca: ".$this->getMarca(). "<br>".
                "Combustible: ".$this->getCombustible()."<br>".
                "Carga: ".$this->carga. " % <br><br>";
        
            }
    }
?>
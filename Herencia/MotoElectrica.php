<?php
include_once('Moto.php');

/*
Iones de Litio
Polimeros de Litio
Ácido de Plomo
Niquel -Metal Hidruro
Estado Sólido

*/

class MotoElectrica extends Moto{
    private $tipo_bateria;

    public function __construct($placa, $marca, $tipo_chasis, $tipo_bateria){
        parent:: __construct($placa,$marca, $tipo_chasis);
            $this->tipo_bateria= $tipo_bateria;
        }
        public function setTipoBateria($tipo_bateria){
            $this->tipo_baterira= $tipo_bateria;
        }
        public function getTipoBateria(){
            return $this->tipo_bateria;
        }
        public function mostrar(){
            echo "Características de la Motocicleta: <br> ".
                "Placa: ".$this->getPlaca()."<br>".
                "Marca: ".$this->getMarca()."<br>".
                "Tipo de Chasis: ".$this->getTipoChasis() . "<br>".
                "Tipo de Bateria: ".$this->tipo_bateria ."<br><br>";
        
            }
    }

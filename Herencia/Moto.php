<?php
    include_once('Vehiculo.php');

    class Moto extends Vehiculo{
        private $tipo_chasis;

        public function __construct($placa, $marca, $tipo_chasis){
            parent:: __construct($placa,$marca);
                $this->tipo_chasis=$tipo_chasis;
        }
        public function setTipoChasis($tipo_chasis){
            $this->tipo_chasis=$tipo_chasis;
        }
        public function getTipoChasis(){
            return $this->tipo_chasis;
        }
        public function mostrar(){
            echo "Datos de la MOTOCILETA: <br>".
                "Placa: ".$this->getPlaca(). "<br>".
                "Marca: ". $this->getMarca()."<br>".
                "Tipo de Chasis: ".$this->tipo_chasis . "<br><br>";

        }

    }



?>
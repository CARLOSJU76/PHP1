<?php
    class Vehiculo{
        private $placa;
        private $marca;
     
        public function __construct($placa, $marca){
            $this->placa= $placa;
            $this->marca=$marca;
        }
        public function setPlaca($placa){
            $this->placa= $placa;
        }
        public function getPlaca(){
            return $this->placa;
        }
        public function setMarca($marca){
            $this->marca= $marca;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function mostrar(){
            echo "Datos del Vehículo: <br>
                    Placa: $this->placa <br>
                    Marca: $this->marca <br><br>";
        }
    }
?>
<?php
    
    enum Marcas: string{
        case Toyota="Toyota";
        case Chevrolet="Chevrolet";
        case Renault="Renault";
        case Ford="Ford";
    }
        
    class Transporte {
        private $placa, $modelo;
        private Marcas $marca;

        public function __construct($placa, $marca, $modelo){
            $this->placa= $placa;
            $this->marca= $marca;
            $this->modelo= $modelo;
        }
        public function setPlaca($placa){
            $this->placa=$placa;
        }
        public function getPlaca(){
            return $this->placa;
        }
        public function setMarca($marca){
            $this->marca= $marca;
        }

        public function setModelo($modelo){
            $this->modelo=$modelo;
        }
        public function getModelo(){
            return $this->modelo;
        }

        public function mostrarTransporte(){

           // return`${$this->marca->name}`;


            echo "Placa: $this->placa <br>".
                    "Marca:" . $this->marca->name."<br>".
                    "Modelo: $this->modelo <br>";
        }

    }
   

    if (isset($_POST['Enviar'])){

        $placa=  $_POST['placa'];
        $marca=  $_POST['marca'];
        $modelo= $_POST['modelo'];

        $marcaE= Marcas::tryFrom($marca);

        $vehiculo1= new Transporte($placa, $marcaE, $modelo);

        $vehiculo1->mostrarTransporte();
    }


?>
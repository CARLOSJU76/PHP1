<?php
    include_once("claseAnimal.php");

    class Ave extends Animal{
        public $tipo_vuelo;

        public function __construct($nombre, $edad, $tipo, $tipo_vuelo){
            parent::__construct($nombre, $edad, $tipo);
            $this->tipo_vuelo=$tipo_vuelo;

        }
        public function setTipoVuelo($tipo_vuelo){
            $this->tipo_vuelo=$tipo_vuelo;
        }
        public function getTipoVuelo(){
            return $this->tipo_vuelo;
        }
        public function mostrarAnimal(){
            echo "Nombre: ". $this->getNombre() ."<br>".
                 "Edad: ". $this->getEdad() ." años <br>".
                 "Tipo de ave: ". $this->getTipo() ."<br>".
                 "Tipo de vuelo: ". $this->tipo_vuelo ."<br>";        
        }
    }

    $animal4= new Ave("Piolin", 2, "Canario", "Corto");
    $animal4->mostrarAnimal();
    
?>
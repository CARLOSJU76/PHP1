<?php
    class Animal{
        private $nombre;
        private $edad;
        private $tipo;

        public function __construct($nombre, $edad, $tipo) {
            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->tipo=$tipo;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function getEdad(){
            return $this->edad;
        }
        public function setEdad($edad){
            $this->edad=$edad;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($tipo){
            $this->tipo=$tipo;
        }
        public function mostrarAnimal(){
            echo "Nombre del animal: ". $this->nombre ."<br>".
                "Edad del animal: ". $this->edad ."<br>".
                "Tipo de animal: ". $this->tipo ."<br><br><br>";
        
        }
    }
    $animal1= new Animal("Karen",2,"Vaca");
    $animal1->mostrarAnimal();

?>
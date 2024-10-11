<?php
    include_once("claseAnimal.php");
    class Mamifero extends Animal{

        private $tipo_pelo;

        public function __construct($nombre, $edad, $tipo, $tipo_pelo){
            parent::__construct($nombre, $edad, $tipo);
            $this->tipo_pelo = $tipo_pelo;
        }
        public function setTipoPelo($tipo_pelo){
            $this->tipo_pelo = $tipo_pelo;
        }
        public function getTipoPelo(){
            return $this->tipo_pelo;
        }
        public function mostrarAnimal(){
            echo "Nombre: ". $this->getNombre() ."<br>".
                 "Edad: ". $this->getEdad() ." años.. <br>".
                 "Tipo: ". $this->getTipo() ."<br>".
                 "Tipo de pelo: ". $this->tipo_pelo ."<br><br><br>";
        
        }
    }
    $animal3= new Mamifero("Felix", 2, "Gato", "Corto");
    $animal3->mostrarAnimal();
    

?>
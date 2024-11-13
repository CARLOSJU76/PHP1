<?php

    include_once('Persona.php');

    class Empleado extends Persona{
        private $salario;

        public function __construct($nombre, $salario){
            parent:: __construct($nombre);
                $this->salario= $salario;
        }
        public function setSalario($salario){
            $this->salario=$salario;
        }
        public function getSalario(){
            return $this->salario;
        }
        public function mostrarSalario(){
            $total= $this->salario *1.1;
                if($this->salario<2000000){
                    echo "El salario de ".$this->getNombre().
                    " este mes fue de: ".$total ." pesos";
                }else{
                    echo "El salario de ".$this->getNombre().
                    " este mes fue de: ".$this->salario ." pesos";
                }
        }


    }
    //$empleado1= new Empleado("Juanito", 1500000);
    //empleado1->mostrarSalario();
?>
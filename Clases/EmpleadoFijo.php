<?php
    include_once('claseEmpleado.php');

    enum Cargo{
        case OBREO;
        case ADMINISTRATIVO;
        case GERENCIAL;
    }

    class EmpleadoFijo extends Empleado{
        private Cargo $cargo;

        public function __construct($nombre, $salario, Cargo $cargo ){

            parent:: __construct($nombre, $salario);            
            $this->cargo=$cargo;       
            $this->calcularSalario();      
        }

        function calcularSalario(){
            $salarioF=0;
            if($this->cargo === Cargo::OBRERO){
                $salarioF=1500000;
            }else if($this->cargo === Cargo::ADMINISTRATIVO){
                $salarioF=2000000;
            }else{
                $salarioF=4000000;
            }
            $this->setSalario($salarioF);

        }
        function mostrarSalario(){
            
            echo "El empleado ". $this->getNom(). " obtuvo un salario de: ". $this->getSalario() .' pesos.';

        }
    }
    $emp2= new Empleadofijo('Peppito', 0, Cargo::ADMINISTRATIVO);
    $emp2->mostrarSalario();

?>
<?php
    include_once('claseEmpleado.php');

    class EmpleadoXhora extends Empleado{
        private $horas;
        

        public function __construct($nombre, $salario, $horas){

            parent::__construct($nombre, $salario);
            $this->horas=$horas;
            
        }
        function calcularSalario(){
            $horas=$this->horas;
            $salario=$this->getSalario();
            $salarioTotal= $horas * $salario;
            return $salarioTotal;
        }

        function mostrarSalario(){
            $salarioTotal=$this->calcularSalario();
            echo "El empleado ". $this->getNom(). " obtuvo un salario de: ". $salarioTotal .' pesos.';
        }

    }
    $emp2= new EmpleadoXhora('Pedro', 150000, 100);
    $emp2->mostrarSalario();


?>
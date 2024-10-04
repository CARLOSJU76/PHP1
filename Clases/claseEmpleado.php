<?php
    class Empleado{
       
        public function __construct(
            private $nombre,
            private $salario
        ){}

        function setNom($nombre){
            return $this->nombre=$nombre;
        }

        function getNom(){
            return $this->nombre;
        }
         function setSalario($salario){
            return $this->salario=$salario;
         }
         function getSalario(){
            return $this->salario;
         }
         function mostrarSalario(){
            echo 'El salario del empleado es: '.$this->salario;
         }

    }
   /* $emp1=new Empleado('Felipe', 1200000);
    $emp1->mostrarSalario();*/



?>
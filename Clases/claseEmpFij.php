<?php
    include("claseEmpleado.php");


    enum Cargos{
        case OBRERO;
        case ADMINISTRATIVO;
        case GERENCIAL;
    }
    class EmpFij extends Empleado{
        private Cargos $cargo;
       /* private const SALARIO_OBRERO=1800000;
        private const SALARIO_ADMINISTRATIVO=2700000;
        private const SALARIO_GERENCIAL=4000000;*/

        public function __construct($nombre, $salario, Cargos $cargo){
            parent::__construct($nombre, $salario);
            $this->cargo = $cargo;
        }
        public function getCargo(){
            return $this->cargo;
        }
        public function setCargo($cargo){
            $this->cargo= $cargo;
        }
        public function calcularSalario(){
            $salarioF= match($this->cargo){
                Cargos::OBRERO=>1800000,
                Cargos::ADMINISTRATIVO=>2700000,
                Cargos::GERENCIAL=>4000000
            };

            $this->setSalario($salarioF);
    }
        public function mostrarSalario(){
            $this->calcularSalario();
            echo "Datos del trabajador: <br>".
                 "Nombre: ".$this->getNom(). "<br>".
                 "Cargo: ".$this->cargo->name."<br>".
                 "Salario: ".$this->getSalario()."<br>";
        }
    }

$empleadoX= new EmpFij("Domiciano Pataquiva", 0, Cargos::OBRERO);
$empleadoX->mostrarSalario();

?>

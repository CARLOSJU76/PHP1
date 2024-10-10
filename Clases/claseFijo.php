
<?php

include_once('claseEmpleado.php');
//En esta clase empleamos un dato tipo num en un match. En la clase "EmpleadoFijo" se hizo con switch.
enum Cargo {
    case OBRERO;
    case ADMINISTRATIVO;
    case GERENCIAL;
}

class Fijo extends Empleado {
    private Cargo $cargo;

   // private const SALARIO_OBRERO = 1500000;
    private const SALARIO_ADMINISTRATIVO = 2000000;
    private const SALARIO_GERENCIAL = 4000000;

    public function __construct($nombre, $salario, Cargo $cargo) {
        parent::__construct($nombre, $salario);
        $this->cargo = $cargo;
        $this->calcularSalario();
    }

    function calcularSalario() {
        $salarioF = match($this->cargo){
            Cargo::OBRERO=>1800000,
            Cargo::ADMINISTRATIVO => 3200000,
            Cargo::GERENCIAL => 5100000
        };


       /* switch ($this->cargo) {
            case Cargo::OBRERO:
                $salarioF = 1800000;
                break;
            case Cargo::ADMINISTRATIVO:
                $salarioF = self::SALARIO_ADMINISTRATIVO;
                break;
            case Cargo::GERENCIAL:
                $salarioF = self::SALARIO_GERENCIAL;
                break;
        }*/
        $this->setSalario($salarioF);
    }

    function mostrarSalario() {
        //$this->calcularSalario();
        echo "El empleado " . $this->getNom() . " obtuvo un salario de: " . $this->getSalario() . ' pesos. <br><br>';
    }
}

//Instanciar el objeto correctamente
$emp2 = new Fijo('Peppito', 0, Cargo::OBRERO);
$emp2->mostrarSalario();
$emp3= new Fijo('Domitila',0, Cargo::GERENCIAL);
$emp3->mostrarSalario();
$emp4= new Fijo('Willington Chayanne', 0, Cargo::ADMINISTRATIVO);
$emp4->mostrarSalario();
?>
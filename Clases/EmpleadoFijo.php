<?php
include_once('claseEmpleado.php');

enum Cargo {
    case OBRERO;
    case ADMINISTRATIVO;
    case GERENCIAL;
}

class EmpleadoFijo extends Empleado {
    private Cargo $cargo;

    //private const SALARIO_OBRERO = 1500000;
    //private const SALARIO_ADMINISTRATIVO = 2000000;
    private const SALARIO_GERENCIAL = 4000000;

    public function __construct($nombre, $salario, Cargo $cargo) {
        parent::__construct($nombre, $salario);
        $this->cargo = $cargo;
        $this->calcularSalario();
    }

    function calcularSalario() {
        $salarioF = 0;
        switch ($this->cargo) {
            case Cargo::OBRERO:
                $salarioF = 1800000;
                break;
            case Cargo::ADMINISTRATIVO:
                $salarioF = 2700000;
                break;
            case Cargo::GERENCIAL:
                $salarioF = self::SALARIO_GERENCIAL;
                break;
        }
        $this->setSalario($salarioF);
    }

    function mostrarSalario() {
        echo "El empleado " . $this->getNom() . " obtuvo un salario de: " . $this->getSalario() . ' pesos.';
    }
}

//Instanciar el objeto correctamente
$emp2 = new EmpleadoFijo('Peppito', 0, Cargo::OBRERO);
$emp2->mostrarSalario();
?>

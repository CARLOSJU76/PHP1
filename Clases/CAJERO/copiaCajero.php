<?php

class Cajero {
    private $valor;
    private $saldoFile = 'saldo.txt'; // Archivo para almacenar el saldo

    public function __construct($valor) {
        $this->valor = $valor;
        $this->saldo = $this->cargarSaldo();
    }

    private function cargarSaldo() {
        // Cargar el saldo desde el archivo
        if (file_exists($this->saldoFile)) {
            return (float)file_get_contents($this->saldoFile);
        }
        return 0; // Si el archivo no existe, inicializar el saldo en 0
    }

    private function guardarSaldo() {
        // Guardar el saldo en el archivo
        file_put_contents($this->saldoFile, $this->saldo);
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function getValor() {
        return $this->valor;
    }

    function retirar() {
        if ($this->saldo >= $this->valor) {
            $this->saldo -= $this->valor;
            $this->guardarSaldo();
            echo "Retiro exitoso: " . $this->valor . " pesos. <br><br>";
            echo "El nuevo saldo es: " . $this->saldo;
        } else {
            echo "Fondos insuficientes. <br><br>";
        }
    }

    function consignar() {
        $this->saldo += $this->valor;  
        $this->guardarSaldo();
        echo "Consignación exitosa: " . $this->valor . " pesos<br><br>";
        echo "El nuevo saldo es: " . $this->saldo;
    }

    function consultarSaldo() {
        echo "El saldo es: " . $this->saldo . " pesos<br><br>";
    }
}

// Ejemplo de uso:
$cajero = new Cajero(0); // Inicializamos el cajero
$cajero->consultarSaldo(); // Consultar saldo inicial
$cajero->setValor(1000); // Establecer el valor a retirar o consignar
$cajero->consignar(); // Hacer una consignación
$cajero->retirar(); // Hacer un retiro
$cajero->consultarSaldo(); // Consultar el saldo final
?>

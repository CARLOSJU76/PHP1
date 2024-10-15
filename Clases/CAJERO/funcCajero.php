<?php
class Cajero{
    public function __construct(
        private $valor,
        private $saldo,
       
    ){}

    function setValor($valor){
        $this->valor= $valor;
    }
    function getValor(){
        return $this->valor;
    }
    function setSaldo($saldo){
        $this->saldo= $saldo;
    }
    function getSaldo(){
        return $this->saldo;
    }
    function retirar(){
        $this->saldo-=$this->valor;
        echo "Retiro exitoso: ".$this->valor. " pesos. <br><br>";
        echo "El nuevo saldo es: ". $this->saldo;
       
    }
    function consignar(){
        $this->saldo+=$this->valor;  
        echo "Consignación exitosa: ". $this->valor. " pesos<br><br>";
        echo "El nuevo saldo es: ". $this->saldo;
       
    }
   function consultarSaldo(){
    echo "El saldo es: " .$this->saldo . " pesos<br><br>";
   }

    }


?>
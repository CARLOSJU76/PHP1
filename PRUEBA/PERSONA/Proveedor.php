<?php
    include_once('Persona.php');
    class Proveedor extends Persona{
        private $compra;

        public function __construct($nombre, $compra){
            parent:: __construct($nombre);
                $this->compra=$compra;
        }
        public function setCompra($compra){
            $this->compra=compra;
        }
        public function getCompra(){
            return $this->compra;
        }
        public function mostrarCompra(){
            if($this->compra>=500000){
                $descuento= $this->compra*0.15;                
            }else{
                $descuento=$this->compra*0.05;
            }

            echo "El descuento de " .$this->getNombre().
                " por esta compra es de: ". $descuento;

        }
    }

    //$proveedor1= new Proveedor("Ramón Elías", 1500000);
   //proveedor1->mostrarCompra();
?>
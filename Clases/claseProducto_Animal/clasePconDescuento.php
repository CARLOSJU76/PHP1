<?php
    include_once("claseProducto.php");
    class PconDescuento extends Producto{
        private $descuento;

        public function __construct($nombre, $precio, $categoria,  $descuento){
            parent::__construct($nombre, $precio, $categoria);
            $this->descuento= $descuento;
            $this->precioFinal();

    }
    public function setDescuento($descuento){
        $this->descuento=$descuento;
    }
    public function getDescuento(){
        return $this->descuento;

    }
    public function precioFinal(){
        $pre= $this->getPrecio();
        $pre-= ($pre * $this->descuento)/100;
        $this->setPrecio($pre);
    }
    public function mostrarProducto(){

        echo "Nombre del producto: ". $this->getNombre()."<br>".
            "Precio con descuento: ". $this->getPrecio() ."<br>".
            "Categoría: ". $this->getCategoria() ."<br>".
            "Descuento: ". $this->descuento ." por ciento de descuento!! . <br>";
    
    }
    
}
$prod1= new PconDescuento("Lavadora 24lbs", 1000000, "Electrodomésticos", 5);
$prod1->mostrarProducto();


?>
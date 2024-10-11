<?php

    include_once("claseProducto.php");
    class PconImpuesto extends Producto{
        private $impuesto;

        public function __construct($nombre, $precio, $categoria, $impuesto) {
            parent::__construct($nombre, $precio, $categoria);  
            $this->impuesto=$impuesto;
            //$this->precioFinal();
        }
        public function setImpuesto($impuesto) {
            $this->impuesto=$impuesto;
        }
        public function getImpuesto() {
            return $this->impuesto;
        }
        public function precioFinal() {
            $pre=$this->getPrecio();
            $pre+= ($pre*$this->impuesto)/100;
            $this->setPrecio($pre);
        }
        public function mostrarProducto(){
            $this->precioFinal();
            echo "El producto: " .$this->getNombre()."<br>".
                "Precio: " .$this->getPrecio()." <br>".
                "Categoría: " .$this->getCategoria()." <br>".
                "Impuesto: ". $this->impuesto. " <br>";
        }

    }
    $pr1= new PconImpuesto("Cadena de oro", 100000, "artículos de lujo", 19);
    $pr1->mostrarProducto() ;

?>
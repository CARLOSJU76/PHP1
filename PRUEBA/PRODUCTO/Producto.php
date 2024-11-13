<?php
    class Producto{
        private $nombre;
        private $precio;
        private $stock;

        public function __construct($nombre, $precio, $stock){
            $this->nombre=$nombre;
            $this->precio= $precio;
            $this->stock=$stock;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setPrecio($precio){
            $this->precio=$precio;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function setStock($stock){
            $this->stock= $stock;
        }
        public function getStock(){
            return $this->stock;
        }
        public function calcularStock(){
            $total= $this->precio * $this->stock;
            return $total;
        }
        public function mostrarStock(){
            echo "El valor total en stock del producto" .$this->nombre.
                " es de: ". $this->calcularStock();        
        }
    }
   // $producto= new Producto("Atún x 500grms", 7000, 100);
   // $producto->mostrarStock();
?>
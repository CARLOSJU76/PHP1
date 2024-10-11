<?php
    include_once("claseFiguras.php");

    class Triangulo extends FigurasG{

        public function __construct($base, $altura, $area){

            parent::__construct($base, $altura,$area);
        }

        function calcularArea(){
            $areaT=0;
            $areaT= ($this->getBase() * $this->getAltura())/2;
            $this->setArea($areaT);
        }
        function mostrarArea(){
            $this->calcularArea();
            echo "El área del triángulo es: ".$this->getArea();
        }
        
    } 
//===========================================================================================================================================================
    class Cuadrado extends FigurasG{

        public function __construct($base, $altura, $area){
            parent::__construct($base, $altura,$area);

        }
        function calcularArea(){
            $areaC=0;
            $areaC= $this->getBase()*$this->getBase();
            $this->setArea($areaC);
        }
        function mostrarArea(){
            $this->calcularArea();
            echo("El área del cuaadrado es: ".$this->getArea());
        }

    }
    //===============================================================================================================

    class Rectangulo extends FigurasG{
        public function __construct($base, $altura, $area){
            parent::__construct($base, $altura,$area);
        }
        function calcularArea(){
            $areaR=0;
            $areaR= $this->getBase() * $this->getAltura();
            $this->setArea($areaR);
        }
        function mostrarArea(){
            $this->calcularArea();
            echo"El área del Rectángulo es: ".$this->getArea();
        }

    }
    //==================================================================================================================
//Instanciando Clases: 

    //$rectangulo1= new Rectangulo(20, 20, 0);
    //$rectangulo1->mostrarArea();

    //$cuadrado1= new Cuadrado( 10, 0, 0 );
    //$cuadrado1->mostrarArea();  
   
   $triangulo1=new Triangulo(5, 4, 0);
    $triangulo1->mostrarArea();




    
?>
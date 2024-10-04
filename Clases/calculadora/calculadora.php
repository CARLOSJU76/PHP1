<?php
    class Calculadora{
        public function __construct(
            private $numero1,
            private $numero2,
            private $resultado
        ){}
        //Funciones getters y setters
        function setNumero1($x){
            return $this->numero1= $x;
        }
        function getNumero1(){
            return $this->numero1;
        }
        function setNumero2($x){
            return $this->numero1= $x;
        }
        function getNumero2(){
            return $this->numero1;
        }
        function setResultado($x){
            return $this->resultado= $x;
        }
        function getResultado(){
            return $this->resultado;
        }
        //Funciones de operaciones
        //SUMAR
        function sumar(){
           $this->resultado= $this->numero1 + $this->numero2;
           return $this->resultado;
        } 
        //RESTAR       
        function restar(){
            $this->resultado= $this->numero1 - $this->numero2;
            return $this->resultado;
         }
         //MULTIPLICAR         
        function multiplicar(){
            $this->resultado= $this->numero1 * $this->numero2;
            return $this->resultado;
         }
         //DIVIDIR        
         function dividir(){
            if ($this->numero2!=0){
                    $this->resultado= $this->numero1 / $this->numero2;
            }else{
                    echo "Resultado indeterminado. El denominador es Cero.";
            }
            return $this->resultado;
            
         }
    }


    

   /* $calculadora1= new Calculadora(24, 12, 0);
    echo "El resultado de la suma es: " .$calculadora1->sumar(). "<br><br>";
    echo "El resultado de la resta es: " .$calculadora1->restar(). "<br><br>";
    echo "El resultado de la multiplicación es: ". $calculadora1->multiplicar(). "<br><br>";
    echo "El resultado de la división es: " .$calculadora1->dividir(). "<br><br>";

    */


    
    

?>
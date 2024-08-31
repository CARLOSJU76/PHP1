<?php
    $num1= abs($_POST["num1"]);
    $num2= abs($_POST["num2"]);
    $Array_primos=[];

  operacion($num1,$num2,$Array_primos);
  imprimir($Array_primos); 

//función para imprimir la matriz de números primos:

  function imprimir(&$Array_primos){        

    if(count($Array_primos)==0){
        echo "No hay números primos entre los dígitos.";
    }else if(count($Array_primos)==1){
        echo "Existe un número primo entre los dígitos, es el: ";
        
    }else{
        echo "Los números primos entre los dos números son: ";
         
    }

    for($i=0; $i<=count($Array_primos)-1;$i++){

        if ($i==count($Array_primos)-1){
            echo $Array_primos[$i] .".";
        }else if($i==count($Array_primos)-2){
            echo $Array_primos[$i] . " y ";
        }else{
        echo $Array_primos[$i]. ", ";
        }
    }

}
   
    //función que realiza la operación principal:

    function operacion($x,$y, &$Array_primos){

        $aux=0;
        if($x>$y){
            $aux=$x; $x=$y; $y=$aux;            
        }           
        for($i=$x; $i<=$y; $i++ ){
            imprimirPrimos($i,$Array_primos);
            
        }
        
    }

   
    //Función para ingresar los números primos a la matriz:
    function imprimirPrimos($x, &$Array_primos){
        $contador=0;
        for($i=1; $i<=$x;$i++){
            
            if($x%$i==0){
                $contador++;
            }
        }

        if($contador==2){
            array_push($Array_primos,$x);
           
        }
    } 



?>
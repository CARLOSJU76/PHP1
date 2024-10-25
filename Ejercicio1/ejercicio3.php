<?php
   $num1=$_POST["numero1"];
   $num2=$_POST["numero2"];

   $numero1=(float)$num1;
   $numero2=(float)$num2;

   $diferencia= abs($numero1-$numero2);
   $menor= mayorMenor($numero1, $numero2);
   
   $resultado= operacion($diferencia, $menor, $numero1, $numero2);

   echo $resultado;
   

//Realizando operaciones:
    function operacion($x,$y,$u,$v){
        echo "<h3> El resultado de la función es: </h3>";
        echo "<br><br>";

        if($x<=10 && $y==1){
            $resultado= deUnoADos($u,$v);
            echo $resultado;
         }elseif($x<=10 && $y==2){
            $resultado= deDosAUno($u,$v);
            echo $resultado;
         }else{
             echo "La diferencia entre los números es mayor a diez.";
         }
        

    }
   
    //Determinando el menor de los números:

    function mayorMenor($x,$y){
        $menor=0;

        if ($x>$y){
            $menor=2;
       }else{
            $menor=1;
       } 
       return $menor;
    }

    //Ciclo numeros del primero al segundo número:

    function deUnoADos($x,$y){
        for($i=$x+1; $i<$y; $i++){
            if ($i==$y-1){
                echo $i .".";
            }else if($i==$y-2){
                echo $i . " y ";
            }else{
                echo $i . ", ";
            }
        }
    }
   
    //Ciclo numeros del segundo al primero: 
    function deDosAUno($x,$y){
        for($i=$y+1; $i<$x; $i++){
            if ($i==$x-1){
                echo $i .".";
            }else if($i==$x-2){
                echo $i . " y ";
            }else{
                echo $i . ", ";
            }
        }
    }
?>
<?php

    $numero1=$_POST["numero1"];
    $numero2=$_POST["numero2"];
    $resultado=0;
    $diferencia=0;
    $diferencia=$numero1-$numero2;
    echo "La diferencia es : ".$diferencia;
    echo"<br><br>";

      //Realizando operaciones:
      if($diferencia%2==0){

        $resultado=sumaDigitos($numero1, $numero2);
       
        echo "La diferencia es número par.<br>La suma de los dígitos es: " .$resultado;
        
    }else if($diferencia<10 && esPrimo($diferencia)==1){
        $resultado=($numero1*$numero2);
        echo "<h3> <br><br> El numero es primo menor que 10 por lo que el resultado es: $resultado<h3>";
    }else if(terminaEn7($diferencia)==7){

        echo "La diferencia es un número terminado en 7 mayor que 10. <br><br>";

        $resultado= descomponerNumeros($numero1, $numero2);
        
    }else{
       echo "Los números no cumplen los requerimientos para emitir un resultado.";
    }

   

    //función para sumar digitos  de numero1 y numero2:
    function sumaDigitos($num1, $num2){
        $num1 = abs($num1);
        $num2 = abs($num2);
       
    $suma1=0;
    $suma2=0;
    $sumat=0;
    do{
        $suma1+=$num1%10;
        $num1=floor($num1/10);
        
    }while($num1>0);
    

    do{
        $suma2+=$num2%10;
        $num2=floor($num2/10);
    }while($num2>0);

   $sumat=$suma1+$suma2;
    return $sumat;

    }   
       
       

    //función para determinar si la diferencia de los números es número primo:

        function esPrimo($x){
            $contador=0;

            for ($i=1; $i<=$x; $i++){
                if($x%$i==0){
                    $contador++;
                }
            }
            if ($contador>2){
                $primo=0;
                echo "La diferencia no es un número primo.";
                echo"<br><br>";
            }else{
                $primo=1;
                echo "La diferencia es un número primo.";
                echo"<br><br>";
                return $primo;
            }
    

        }
       
    //Verificando si la diferencia es un número que termina en 7:
       function terminaEn7($x){
        $dig_dife=0;
        $dig_dife=$x%10;
        return $dig_dife;
        }

      

        //Descomponiendo los dos números en sus dígitos:
        
        function descomponerNumeros($x, $y){
            $i=0;
             //Numero1:

             $Array_num1=[];
        $dig=0;
        do{
            $dig=$x%10;
            array_push($Array_num1, $dig);
            $x=floor($x/10);
            $i++;
        }while($x>0);

       echo "Numero 1: <br>";       

        for ($i = count($Array_num1) - 1; $i >= 0; $i--) {
                 
            if($i==0){
                echo  $Array_num1[$i] . ".";
                echo"<br><br>";

            }else{
                echo $Array_num1[$i] . "-";
            }
            
        }

        
        //numero2:

        $Array_num2=[];
        $i=0;
        echo "Número2: <br>";

        do{
            $dig=$y%10;
            array_push($Array_num2, $dig);
            $y=floor($y/10);
            $i++;
        }while($y>0);

        for ($i = count($Array_num2) - 1; $i >= 0; $i--) {
            if($i==0){
                echo  $Array_num2[$i] . ".";
                echo"<br><br>";

            }else{
                echo $Array_num2[$i] . "-";
            }            
        }

    } 
    
    
   
?>
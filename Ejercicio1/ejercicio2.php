<?php

$numero1=$_POST["numero1"];
     $resultado=0;

      $resultado= operacion($numero1, $numero1);

      echo $resultado;

   //Realizando operaciones: 

   function operacion($x, $y){
      echo "<h3> El resultado de la función es: <h3>";
      echo "<br><br>";
      $x=abs($x);
      $termina=terminaEn($y);

      if($x>99){
         echo "El número no cumple los parámetros.";
      }else{
         if($termina==1){
            echo primerDigito($y);
         }else if($termina==2){
            echo sumaDigitos($y);
         }else if($termina==3){
            echo multiDigitos($y);
         }else{
            echo "El número no termina en 1, 2 o 3.";
         }

      }
   }


   //Determinando el último dígito:

     function terminaEn($x){
        $dig=$x%10;
        return $dig;
     }
     //Determinando el primer dígito:

     function primerDigito($x){
        do{
            $dig=$x%10;
            $x=floor($x/10);            
        }while($x>0);
        return $dig;

     }

      //Realizando suma de los dígitos:
     function sumaDigitos($x){
      $suma=0;
      $posit=abs($x);
         do{            
            $suma= $suma+($posit%10);
            $posit=floor($posit/10);
         }while($posit>0);
         return $suma;
      }
    
      //Realizando la multiplicación de los dígitos: 
     function multiDigitos($x){
      $multi=1;
      $posit=abs($x);
         do{            
            $multi*=($posit%10);
            $posit=floor($posit/10);
         }while($posit>0);
         return $multi;
      }
      

     
     ?>
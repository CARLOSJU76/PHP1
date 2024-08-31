<?php
     $numero1=$_POST["numero1"];
     $numero2=$_POST["numero2"];
     $numero3=$_POST["numero3"];
     $resultado=0;

     $resultado= penulDig($numero1, $numero2, $numero3);

     echo $resultado;


     function penulDig($x,$y, $z){

        echo "<h3>Resultado de la función : <h3>";
        echo "<br><br>";

        $x=floor($x/10);
        $y=floor($y/10);
        $z=floor($z/10);

        $x%=10;
        $y%=10;
        $z%=10;

        if($x!=$y){
            echo "Los penúltimos dígitos no son iguales: $x , $y , $z";
        }else if($x!=$z){
            echo "Los penúltimos dígitos no son iguales: $x , $y , $z";
        }else{
            echo "Los penúltimos dígitos son iguales: ". $x;
        }
     }
?>
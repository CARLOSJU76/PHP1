<?php
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$opcion=$_POST['opcion'];
$resultado=0;

if($opcion=='+'){
    $resultado=$num1+$num2;
}else if($opcion=='-'){
    $resultado=$num1-$num2;
}else if($opcion=='*'){
    $resultado=$num1*$num2;
}else{
    if($num2!=0){
        $resultado=$num1/$num2;  
    }else{
        echo "El divisor es Cero. Resultado indetermninado!!";
        $resultado="indeterminado";
    }
     
}
echo "<h3 > El resultado de la operación es: $resultado <h2>";

?>
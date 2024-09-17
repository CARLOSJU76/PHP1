<?php
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$opcion=$_POST['opcion'];
$resultado=0;


if ($opcion==4 && $num2==0){
    echo "El cociente es indeterminado. El divisor es 0.";
} else{
    echo nombreOp($opcion) .operaciones($opcion,$num1,$num2);
}

    //Determinando la operación a ejecutar mediant una función con match:
 function operaciones($opcion,$num1,$num2){
    $resultado= match ($opcion) {
        "1"=> $num1+$num2,
        "2"=> $num1-$num2,
        "3"=> $num1*$num2,
        "4"=> $num1/$num2
    };
    return $resultado;
 }
    
    //Determinando el nombre a imprimir para la operación mediante una función con switch: 
 function nombreOp($opcion){
        $nombreOp="";
        switch($opcion){
        case 1: $nombreOp="El total de la suma es: "; break;
        case 2: $nombreOp="El resultado de la resta es: "; break;
        case 3: $nombreOp="El producto de la multiplicación es: "; break;
        case 4: $nombreOp= "El cociente de la división es: "; break;
    }
    return $nombreOp;
 }
?>
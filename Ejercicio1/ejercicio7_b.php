<?php

$opcion=$_POST['opcion'];


    echo rol($opcion);

    //Determinando la operación a ejecutar mediante una función con match:
 function rol($opcion){
    $resultado= match ($opcion) {
        "1"=> "Tienes una calificación entre 90 y 100.",
        "2"=> "Tienes una calificación entre 80 y 89.",
        "3"=> "Tienes una calificación entre 70 y 79.",
        "4"=> "Tienes una calificación entre 60 y 69.",
        "5"=> "Has reprobado.Tienes una calificación menor que 60."
    };
    return $resultado;
 }    
    
?>

<?php

$puntuacion=$_POST['puntuacion'];


if($puntuacion<0 ||$puntuacion>100){
    echo "<h4> ¡¡La puntuación no se encuentra dentro del rango!!</h4>";
}else{
    $opcion=definirOpciones($puntuacion);

    echo "<h3>Tu puntuación de $puntuacion, corresponde a la calificación:  <h3>" .calificar($opcion);
}

    //Definiendo las opciones a tener cuenta en el match:
function definirOpciones($y){
    $x=floor($y/10);
    if($y<60){
        $x=5.0;
    }else if($y==100){
        $x=9.0;
    }
    return $x;
}


    //Determinando la operación a ejecutar mediante una función con match:
 function calificar($x){
    $resultado= match ($x) {
        9.0=> "A... Felicitaciones!!",
        8.0=> "B",
        7.0=> "C",
        6.0=> "D",
        5.0=> "F...Has rebrobado!!"
    };
    return $resultado;
 }    
    
?>
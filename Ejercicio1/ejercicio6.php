
<?php

$opcion=$_POST['opcion'];


    echo rol($opcion);

    //Determinando el nivel de acceso mediante una función con match:
 function rol($opcion){
    $resultado= match ($opcion) {
        "1"=> "Tienes acceso total.",
        "2"=> "Tienes acceso limitado a edición de contenido.",
        "3"=> "Tienes acceso exclusivamente para visualización.",
        "4"=> "No tienes acceso. Acceso denegado."
    };
    return $resultado;
 }    
    
?>
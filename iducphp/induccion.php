<?php
    echo "<h2> Hola Mundo </h2>";

    //información de php : phpinfo();

    //variables
    $nombre="CarlosJ";
    $Edad=48;
    $bulean=true;
    $peso=76.5;

    echo "$nombre su edad es: $Edad su peso es:  $peso falso o verdadero: $bulean";

    echo gettype($bulean);

    define("iva", 0.19);

    echo "Valor del Iva: ".iva ."<br>"."<br>";

    echo $Edad + $Edad ."<br><br>";
    echo $peso + $Edad. "<br><br>";  
?>
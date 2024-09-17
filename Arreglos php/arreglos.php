<?php

    $arreglo=[1,2,3,4,5];

    //imprimiendo arreglo: 
    for ($i=0; $i<=4; $i++){
        echo "$arreglo[$i] -";
    }
    echo "<br><br>";

    foreach($arreglo as $key => $value){
        echo $key . ": " . $value , "<br>" ;
    }

    $edades=[
        "Juan"=>25,
        "Pedro"=>33,
        "Pablo"=>44,
        "Manuel"=>18
    ];

    foreach ($edades as $nombre =>$edad){
        echo "Nombre: ".$nombre ."=> Edad: ". $edad ."<br>";
    }
?>
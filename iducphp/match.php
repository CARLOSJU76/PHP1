<?php
    $Opcion="4";
    
    $elija= match ($Opcion) {
        "1"=>"retiro de efectivo",
        "2"=>"consulta saldo" ,
        "3"=>"realizar una transferencia" ,
        "4"=>"Pago de servicios"
    };

    echo "Elegiste: $elija";
?>
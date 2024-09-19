<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Funciones</title>
</head>
<body>
    
    <form method="POST">
        <input type="text" name="numero" placeholder="Escribe el número">
        <input type="submit" value="Enviar">

    </form>
    

</body>
</html>

<?php


    $numero=recibirNumero();

     echo "El último dígito del número es: " .ultimoDig($numero);
    

    function recibirNumero(){
            if(isset($_POST['numero'])){
                $x=gmp_init($_POST['numero']);//método gmp_init ----> para manejar valores númericos grandes.
                return $x;
            }
    }



    function ultimoDig($x){
        $Digito= $x%10;
        return $Digito;
    }
    
?>



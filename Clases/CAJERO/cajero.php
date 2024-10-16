<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cajero</title>
</head>
<body>
    
    <form action="" method="post">
        <div id="Saludo">Bienvenido a su Cajero!!</div>
        <select name="operacion" required>
            <option value= "">Selecciona una operación</option>
            <option value="1">Retirar</option>
            <option value="2">Consignar</option>
            <option value="3">Ver Saldo</option>
            <option value="4">Salir</option>
        </select>
        <input type="submit" name="Enviar" value="Anotación">

    </form>
</body>
</html>

<?php
     include_once('funcCajero.php');

     session_start();
     if (!isset($_SESSION['saldo'])) {
        $_SESSION['saldo'] = 2000000; // Guardar un valor que no es un array
    }
    $saldo= $_SESSION['saldo'];

  

    if(isset($_POST["Enviar"])){

        $operacion=$_POST['operacion'];
       
        $nuevaOperacion= new Cajero(0, $saldo);

        if($operacion==="1"||$operacion==="2"){
            echo "<form method='post'>";
            echo "<input type='text' name='Dinero' placeholder='Digite el monto'> <br><br>";
            if($operacion==="1"){
                echo "<input type='submit' name='retirar' value='Retirar'>";
            }else {
                echo "<input type='submit' name='consignar' value='Consignar'>";
            }
            echo "<input type='hidden' name='operacion' value='$operacion'>";
            echo "</form>";
        }else if($operacion==="3"){
           $nuevaOperacion->consultarSaldo();
        }

    }

    if(isset($_POST['retirar'])){
        
        $nuevaOperacion= new Cajero(0, $saldo);
        $valor=$_POST['Dinero'];
        $nuevaOperacion->setValor($valor);
        $nuevaOperacion->retirar();
        $_SESSION['saldo']=$saldo;
        
    }

    if(isset($_POST['consignar'])){
        $nuevaOperacion= new Cajero(0, $saldo);
        $valor=$_POST['Dinero'];
        $nuevaOperacion->setValor($valor);
        $nuevaOperacion->consignar();
        $_SESSION['saldo']=$saldo;
    }


        

    


?>
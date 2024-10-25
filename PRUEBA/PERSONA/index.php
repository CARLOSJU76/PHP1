<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <input type="text" name="nombreE" placeholder="Nombre del Empleado">
        <input type="text" name="salario" placeholder="Salario">
        <input type="submit" name="empleado" value="Enviar">
    </form>

    <form  method="post">
        <input type="text" name="nombreP" placeholder="Nombre del Proveedor">
        <input type="text" name="montoCompra" placeholder="Monto de la compra">
        <input type="submit" name='proveedor' placeholder="Enviar">
    </form>
    
</body>
</html>
<?php
        if(isset($_POST['empleado'])){
            $nombre= $_POST['nombreE'];
            $salario= $_POST['salario'];

            include_once('Empleado.php');
            $e1=new Empleado($nombre,$salario);
            $e1->mostrarSalario();
        }
        if(isset($_POST['proveedor'])){
            $nombre= $_POST['nombreP'];
            $salario= $_POST['montoCompra'];

            include_once('Proveedor.php');
            $p1=new Proveedor($nombre,$salario);
            $p1->mostrarCompra();
        }
?>
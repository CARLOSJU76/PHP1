<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <input type= "text" name="numero1" placeholder="Primer número">
        <input type= "text" name="numero2" placeholder="Segundo número">
        <select name="operacion" required>
            <option value= "">Selecciona una operación</option>
            <option value="1">Suma</option>
            <option value="2">Resta</option>
            <option value="3">Multiplicación</option>
            <option value="4">División</option>
        </select>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    
</body>
</html>
<?php
    if(isset($_POST['enviar'])){
        $num1=$_POST['numero1'];
        $num2=$_POST['numero2'];
        $operacion=$_POST['operacion'];
        $resultado=0;

        include_once('calculadora.php');

        $cal= new Calculadora($num1, $num2, $resultado);

        $operando= match ($operacion) {
            "1"=>  $cal->sumar(),
            "2"=>  $cal->restar(),
            "3"=>  $cal->multiplicar(),
            "4"=>  $cal->dividir()
        };
        echo "El resultado de la operación es: " .$operando;       
    }

?>

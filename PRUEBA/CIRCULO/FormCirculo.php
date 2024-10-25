<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="radio" placeholder="Radio del círculo">
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>

<?php
    if(isset($_POST['enviar'])){
        $radio= $_POST['radio'];

        include_once('Circulo.php');

        $c1= new Circulo($radio);
        $c1->mostrarDatos();
        
    }
?>

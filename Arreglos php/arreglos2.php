<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrglos iterando inputs</title>
</head>
<body>
    <form method="post">
        <label for="cant">Cuantos input</label>
        <input type="number" name="cant" id="cant required">
        <input type="submit" value="Enviar">

    </form>
    
</body>
</html>
<?php

require_once 'funcion1.php';

campos();
mostrar();

?>
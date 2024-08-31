<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ejer2_2.css">
    <title>Ejercicio2.2</title>
</head>
<body>
    <form method="POST">
        <input type="text"  name="num1">
        <button type="submit">Enviar</button>
    </form>
    
    <?php
        $numero=$_POST["num1"];
        

        $conteo=strlen($numero);

        if($conteo<=2){
            echo '<p class= "hastaDos">' .$numero.'<p>';
        }else if($conteo>=3 && $conteo <=5){
            echo '<p class= "hasta5">' .$numero .'<p>';
        }else{
            echo '<p class= "masDe5">' .$numero .'<p>';
        }        
    ?>
    
</body>
</html>
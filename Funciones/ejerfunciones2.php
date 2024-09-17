<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2 Funciones</title>
</head>
<body>
    

    <form method="POST">
        <input type="text" name="texto" placeholder="Escribe aquí tu texto">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>

<?php
     if (isset($_POST['texto'])){
        $texto=$_POST['texto'];

    }

       $text_Array= convertir($texto);
       mostrar($text_Array);


    function convertir($x){
        return str_split($x);
    }
   
    function mostrar($x){
         
        foreach ($x as $i => $letra){
            if($letra!=" "){
                echo ($i + 1) . '.- "' . $letra . '"<br>';
            }
    }

    
    }


     /*   if(isset($_POST['texto'])){
            $texto=($_POST['texto']);
            $textoArray= str_split($texto);
            
           foreach ($textoArray as $i => $letra){
            if($letra!=" "){
                echo ($i + 1) . '.- "' . $letra . '"<br>';
            }

            
           }

   */

    

?>
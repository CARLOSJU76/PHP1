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
        <input type="submit" name="Enviar" value="Enviar">
        <input type="submit" name= "vocales" value="vocales">
        <input type="submit" name="palindroma" value="palindroma">
        <input type="text" name="numero1" placeholder="numero1">
        <input type="text" name="numero2" placeholder="numero2">
        <input type="submit" name="multiplo" value="multiplo">       
    </form>

</body>
</html>

<?php

     if (isset($_POST['Enviar'])){        
        $text_Array= convertir();
        mostrar($text_Array);
    }


     if (isset($_POST['vocales'])){       
        $text_Array=convertir();
        contarVocales($text_Array);        
     }

     if (isset($_POST['palindroma'])){
        $text_Array=convertir();
        esPalindroma($text_Array);
     }

     if (isset($_POST['multiplo'])){
        $num1=$_POST['numero1'];
        $num2=$_POST['numero2'];
        esMultiplo($num1, $num2);
     }



     //función para convertir el tecto en un array: 
     function convertir(){        
        $texto=$_POST['texto'];
        return str_split($texto);
    }
   
    //función que toma el array de caractéres y los muestra verticalmente:
    function mostrar($x){
        $contador=0;
       foreach ($x as $i => $letra){
           if($letra!=" "){
              // echo ($i + 1) . '.- " ' . $letra . ' "<br>';
              echo " ' $letra ' <br>";
              $contador++;
           }
   }

   echo "El texto contiene:" .($contador) . " caracteres. <br>";
   
   }

   //Función para contar las vocales:
   function contarVocales($x){
    $vocales=['a','e','i','o','u','A','E','I','O','U'];
    $contador=0;
        foreach($x as $i=> $letra){
           if(in_array($letra, $vocales)){
                $contador++;
            }
        }
        echo "El texto contiene $contador vocales.";
  }
    //Función que compara los textos normales e invertidos: 
    function esPalindroma($x){
        $array_inver= array_reverse($x);
        $i=0;
        $contador=0;
        foreach($x as $index => $letra){
            if($letra!=$array_inver[$i]){
                $contador++;
            }
            $i++;
        }
            if($contador==0){
                echo "El texto es palidromo.";
            }else{
                echo "El texto no es palindromo.";
            }
    }
    //Función que determina si el primer número es múltiplo del segundo:
    function esMultiplo($x, $y){

        if ($x%$y==0){
            echo   '<p style="color: green; font-size: 20px;"><i>Resultado: 1</i></p>';
        }else{
            echo '<p style="color: red; font-size: 20px;"><i>Resultado: 0</i></p>';
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
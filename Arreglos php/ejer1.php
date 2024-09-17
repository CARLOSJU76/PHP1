<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1 Vectores</title>
</head>
<body>
    <form  method="post">
        <input type="text" name="numero" placeholder="Escribe un  número aquí.">
        <input type="submit" name="agregar" value="agregar">
        <input type="submit" name="borrar" value="borrar los elementos">
        <input type="submit" name="ver" value="Ver Array">
        <input type="submit" name="funcion1" value="Digitos Pares">
        <input type="submit" name="funcion2" value="Digitos Primos">
        <input type="submit" name="funcion3" value="Cuántos Dos">
        <input type="submit" name="funcion4" value="Terminan en...">
        <input type="submit" name="funcion5" value="Entre Uno y los dígitos.">


    </form>
</body>
</html>

<?php

    session_start();
     if (!isset($_SESSION['numeros'])) {
        $_SESSION['numeros'] = array();
    }
    // Si se presionó el botón "Agregar"
    if (isset($_POST['agregar'])) {

        $numero = $_POST['numero'];

        if ($numero!=null){
            array_push($_SESSION['numeros'], $numero);
            echo "<p>Número $numero agregado al array.</p>";
        }else{
            echo "Agrega un número al array.";
        }
       
    }
    
    if(isset($_POST['borrar'])){
        $_SESSION['numeros'] = array();
    }
    

    //Botón para caso 1:
    if (isset($_POST['funcion1'])) {
        caso1();      
    }
    //Botón para caso 2:
    if(isset($_POST['funcion2'])){
        caso2();
    }
    //Botón para caso 3: 
    if (isset($_POST['funcion3'])){
        caso3();
     }
     //Botón para caso 4:
     if (isset($_POST['funcion4'])){
        caso4();
     }
     //Botón para caso 5:
     if (isset($_POST['funcion5'])){
        caso5();
     }
    //función para caso 1:
    function caso1(){       
        foreach ($_SESSION['numeros'] as $indice=> $elemento){
            $primo=esPrimo($elemento);
            $mayor=0;    
            $contadorPares=0;
            if($primo==1){                
                $cuantos= digitosPares($elemento);
                $contadorPares+=$cuantos;
                if($cuantos>=$mayor){
                    $mayor=$cuantos;
                    $elMayor=$indice;
                }
            }
        }
        if($contadorPares>0){
            echo "El n+umero se encuentra en la posición:  $elMayor";
        }else{
            echo "No existen números con las características";
        }
    }
    //función caso 2: 
    function caso2(){
        $mayor=0;
        foreach($_SESSION['numeros']as $indice => $elemento){

            if(digitosPrimos($elemento)>$mayor){
                $mayor=digitosPrimos($elemento);
                $elMayor=$indice;
                echo "$elemento ". digitosPrimos($elemento).$mayor . "<br>";
            }
        }
        echo "El numero se encuentra en la posición:  $elMayor";
    }
    //función para caso 3:
    function caso3(){
        $suma=0;
        foreach($_SESSION['numeros']as $indice => $elemento){
            $suma+= encuentraElDos($elemento);
        }
        echo "El dos se encontró : $suma veces.";
    }
    //funcion para caso 4: 
    function caso4(){
        $contador=0;
        
        foreach($_SESSION['numeros']as $indice=>$elemento){
          $end=$elemento;
        }
        $dig=$end%10;
        foreach($_SESSION['numeros']as $indice=>$elemento){
            if(ultimoD($elemento)== ultimoD($end)){
                $contador++;
            }
        }
        echo "Existen $contador números que terminan en $dig";
    }
    //función para el caso 5:
    function caso5(){
        foreach($_SESSION['numeros']as $indice=>$elemento){
            echo "Para $elemento: <br>";
            porCadaD($elemento);
            echo"<br>";
        }
    }

//Ver el array de números incluidos:
    if (isset($_POST['ver'])) {
        echo "<h3>Array de Números:</h3>";
        echo "<ul>";
        foreach ($_SESSION['numeros'] as $num) {
            echo "<li>$num</li>";
        }
        echo "</ul>";
    }

    function esPrimo($x){
        $primo=0;
        $contador=0;
        for($i=1; $i<=$x; $i++){
            if($x%$i==0 && $x!=0 && $x!=1){
                $contador++;
            }
        }
        if($contador==2){
            $primo=1;
        }
        return $primo;
    }

    function digitosPares($x){
        $contador=0;

        do{
            $dig=$x%10;
            if($dig%2==0 && $dig!=0){
                $contador++;                
            }
            $x=floor($x/10);
        }while($x>0);
        return $contador;
    }

    function digitosPrimos($x){
        $contador=0;

        do{
            $dig=$x%10;
            if(esPrimo($dig)==1){
                $contador++;
            }
            $x=floor($x/10);
        }while($x>0);
        return $contador;
    }

    function encuentraElDos($x){
        $contador=0;
        do{
            $dig=$x%10;
            if($dig==2){
                $contador++;
            }
            $x=floor($x/10);
        }while($x>0);
        return $contador;
    }

    function ultimoD($x){
        $ultimo= $x%10;
        return $ultimo;
    }
    function porCadaD($x){
        $digitos=[];
    
        do{
            $dig=$x%10;
            array_unshift($digitos, $dig);            
            $x=floor($x/10);
        }while($x>0);
        for($i=0; $i< count($digitos); $i++){
            echo "Entre 1 y $digitos[$i]: ";
            entreUnoY($digitos[$i]);
        }

    }

    function entreUnoY($x){

        if($x==2 || $x==1 || $x==0){
            echo "No hay números.";
        }
        for($i=2; $i<$x; $i++){
            if($i==$x-1){
                echo " $i.";
            }else if($i==$x-2){
                echo " $i y ";
            }else{
                echo " $i,";
            }
        }
        echo "<br>";
    }

?>
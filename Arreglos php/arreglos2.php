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
    if(isset ($_POST['cant'])){
        $cant=$_POST['cant'];

        echo '<form action="" method="post">';
        for ($i=0; $i <$cant ; $i++){
            echo '<label for="inp'.$i.' ">Campo '.$i.' </label>';
            echo '<input type="number" id="inp '.$i.' " name="datos[]" require><br>'; 
        };
        echo '<input type= "submit" value= "Enviar" >';
        echo '</form>';
    }

    if (isset($_POST["datos"])){
        $arreglo= $_POST["datos"];

        echo '<ul>'; 

        $tabulado="%8d";
    
    foreach ($arreglo as $indice =>$dato){
        echo "<li>".($indice+1). "= " . $dato ."<br>" ."</li>";

       
       
    }
}



?>
<?php

function campos(){

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
    
}

function mostrar(){

    if (isset($_POST["datos"])){
        $arreglo= $_POST["datos"];

        echo '<ul>'; 

        $tabulado="%8d";
    
    foreach ($arreglo as $indice =>$dato){
        echo "<li>".($indice+1). "= " . $dato ."<br>" ."</li>";       
       
    }
}

}


?>
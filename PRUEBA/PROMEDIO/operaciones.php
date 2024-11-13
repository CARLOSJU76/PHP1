<?php
session_start();
if (!isset($_SESSION['notas'])) {
   $_SESSION['notas'] = array();
}
if(!isset($_SESSION['nomEst'])){
    $_SESSION['nomEst']="";
}

if(isset($_POST['estudiante'])){
    $nombre= $_POST['nombre'];  
    if($_SESSION['nomEst']===""||$_SESSION===null){
        $_SESSION['nomEst']=$nombre;
    }

    echo "<form method='post'><input type= 'text' name='nota' placeholder='Escribe la calificación' required><br>
        <input type= 'submit' name='agregar' value= 'Agregar nota'>";
}

if(isset($_POST['agregar'])){
    $nota=$_POST['nota'];
    $nom= $_SESSION['nomEst'];
    array_push($_SESSION['notas'],$nota);
    foreach ($_SESSION['notas'] as $num) {
        echo "$num - ";
    }
    echo "<form method='post'><input type= 'text' name='nota' placeholder='Agrega una nueva calificación' required><br>
        <input type= 'submit' name='agregar' value= 'Agregar nota'></form>
        <form method='post'><input type= 'submit' name='calcular' value= 'Calcular Promedio'></form>";
}
if(isset($_POST['calcular'])){

    include_once('Estudiante.php');
    $nombre= $_SESSION['nomEst'];
    $est1=new Estudiante($nombre);
    foreach( $_SESSION['notas'] as $nota){
        $est1->agregarNota($nota);
    }
    $est1->mostrarPromedio();
    echo"<form   method='post'><button  type='submit'  name='volver'  >Volver</button></form>
    ";

    foreach ($_SESSION['notas'] as $num) {
        echo "$num - ";
    }
}
if(isset($_POST['volver'])){
    $_SESSION['notas']=array();
    $_SESSION['nomEst']="";
    echo"<button><a href='FormPromedio' style='text-decoration:none;'>Iniciar con otros datos</a></button>";
    
}

      


?>
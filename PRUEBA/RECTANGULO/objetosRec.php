<?php
    include_once('Rectangulo.php');
    if(isset($_POST['rectangulo'])){
        $ancho=$_POST['ancho'];
        $largo=$_POST['largo'];

        $rectangulo1= new Rectangulo($ancho, $largo);
        $rectangulo1->mostrarRectangulo();
    }
?>
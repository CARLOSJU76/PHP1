<?php
    if(isset($_POST['enviar'])){
        $nombre= $_POST['nombre'];
        $precio= $_POST['precio'];
        $stock= $_POST['stock'];

        include_once('Producto.php');

        $pr1= new Producto($nombre, $precio, $stock);
        $pr1->mostrarStock();

    }
?>
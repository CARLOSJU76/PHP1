<?php
        if(isset($_POST['enviar'])){
            $nombre=$_POST['nombre'];
            $autor=$_POST['autor'];
            $paginas= $_POST['paginas'];

            include_once('Libro.php');
            $libro1= new Libro($nombre, $autor, $paginas);
            $libro1->mostrarLibro();
        }
?>
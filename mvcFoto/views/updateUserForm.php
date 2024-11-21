<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formato actualización de Usuario</title>
</head>
<body>
    <form action="index.php? action=updateUser" method="post" enctype="multipart/form-data">

        <input type="text" nane="num_docum" placeholder="Número de documento"><br>
        <!-- <input type="text" name="id_tipoD" placeholder="tipo de Documento"><br> -->
         <select name="id_tipoD">
            <option value="">Seleccione un tipo de documento</option>
                <?php
                    include_once('./controllers/UserController.php');
                    $tipoD= new UserController();
                    $arrayTipoD= $tipoD->getTipoD();

                    foreach($arrayTipoD as $tipo){
                        echo    "<option value='". htmlspecialchars($tipo['id'])."'>".
                                htmlspecialchars($tipo['tipo_documento']) . "</option>" ;                      
                    }
                ?>
         </select><br>
        <input type="text" name="nombre" placeholder="Nombre del Usuario"><br>
        <input type="text" name="telefono" placeholder="Teléfoono"><br>
        <input type="file" name="foto" placeholder="Elija una imagen"><br>

                    <input type="submit" value="actualizar Usuario"><br>       

    </form>
</body>
</html>
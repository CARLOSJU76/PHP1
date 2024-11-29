<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando Datos de Usuario x NumDocum</title>
</head>
<body>
    
    
    <form action="index.php?action=updateUser" method="post" enctype="multipart/form-data">

        <div>Editando Datos de Usuario por Número de Documento</div><br>
        
        <input type="hidden" name="num_docum" value="<?= $_GET['num_docum'] ?? '' ?>">
        <label for="num_docum1">Número de Documento:</label>
        <input type="text" name="num_docum1" value="<?= $userData[0]['num_docum'] ?? ''?>" placeholder="Número de documento"><br>
        <!-- <input type="text" name="id_tipoD" placeholder="tipo de Documento"><br> -->
        <label for="Tipo de Documento">Tipo de Documento</label>
        <select name="id_tipoD">
            <option value="">Seleccione un tipo de documento:</option>
                <?php
                    include_once('./controllers/UserController.php');
                    $tipoD= new UserController();
                    $arrayTipoD= $tipoD->getTipoD();

                    foreach($arrayTipoD as $tipo){
                        $selected = ($tipo['id'] == $userData[0]['id_tipoD']) ? 'selected' : '';
                        echo    "<option value='". htmlspecialchars($tipo['id'])."' $selected>".
                                htmlspecialchars($tipo['tipo_documento']) . "</option>" ;                      
                    }
                ?>
         </select><br>
        <label for="nombre">Nombre de Usuario: </label>
        <input type="text" name="nombre" value="<?= $userData[0]['nombre'] ?? ''?>" placeholder="Nombre del Usuario"><br>
        <label for="telefono">Teléfono de Usuario:</label>
        <input type="text" name="telefono" value="<?= $userData[0]['telefono'] ?? ''?>" placeholder="Teléfono"><br>
        <img src="photo/<?= $userData[0]['foto'] ?? '' ?>" width="100px" alt="Foto actual"><br>
        <input type="file" name="foto" placeholder="Elija una imagen"><br>

                    <input type="submit" value="actualizar Usuario"><br> 
        

    </form>
</body>
</html>

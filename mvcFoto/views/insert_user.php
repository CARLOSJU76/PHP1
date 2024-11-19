<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Usuarios</title>
</head>
<body>
    <h1>Insertar Usuario</h1>
    <form action="index.php?action=insertUser"  method="post" enctype="multipart/form-data">
        
        <label for="numero_documento">Numero de Documento</label>
        <input type="text" name="numero_documento" required><br>

        <label for="tipo_documento">Tipo de Documento</label>
        <!-- <input type="text" name="tipo_documento" required><br> -->
         <select name="tipo_documento" id="tipo_documento">
            <option value="">Elija el tipo de documento</option>
            <?php
                include_once('./controllers/UserController.php');
                    $tipoD= new $userController();
                    $arrayTipoD= $tipoD->getTipoD();
                
                foreach($arrayTipoD as $tipo){
                    echo "<option value='".htmlspecialchars($tipo['id'])."'>"
                    .htmlspecialchars($tipo['tipo_documento'])."</option>";
                }
            ?>
         </select><br>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required><br>

        
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" required><br>

        <label for="foto">Fotografía</label>
        <input type="file" name="foto" required><br>

        <input type="submit" value="Guardar"><br>

        <form action="index.php?action=dashboard" method="post"><br>
            <button type="submit" name="action" value=" dashboard">Dashboard</button>
        </form>

    </form>
</body>
</html>
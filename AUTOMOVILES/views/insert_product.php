<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Productos</title>
</head>
<body>
    <h1>Insertar Producto</h1>
    <form action="index.php?action=insertProduct"  method="post" enctype="multipart/form-data">
        
       
        <input type="text" name="nombre" placeholder="Nombre del producto"><br>

        
        <input type="text" name="marca" placeholder="Marca del producto" required><br>

        <!-- <input type="text" name="id_tipoP" placeholder="id del producto"><br> -->

        <select name="id_tipoP" id="id_tipoP">
            <option value="">Seleccione tipo de Producto</option>
            <?php
                include_once('./controllers/UserController.php');

                $tipoP= new UserController();
                $arrayTipoP= $tipoP->getTipoP();

                foreach($arrayTipoP as $tipo){
                    echo "<option value='" .htmlspecialchars($tipo['id']) . " '>".($tipo['id']) .htmlspecialchars($tipo['tipo_producto']) . "</option>";
                }
            ?>
        </select><br>
       
        <input type="text" name="precio" placeholder="Precio del producto" required><br>

        <label for="foto">Fotografía</label>
        <input type="file" name="foto" required><br>

        <input type="submit" value="Guardar"><br>

        <form action="index.php?action=dashboard" method="post"><br>
            <button type="submit" name="action" value=" dashboard">Dashboard</button>
        </form>
    </form>

</body>
</html>
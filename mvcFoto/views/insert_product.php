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

       
        <input type="text" name="precio" placeholder="Precio del producto" required><br>

        <label for="foto">Fotografía</label>
        <input type="file" name="foto" required><br>

        <input type="submit" value="Guardar"><br>

        <form action="index.php?action=dashboard" method="post"><br>
            <button type="submit" name="action" value=" dashboard">Dashboard</button>
        </form>

</body>
</html>
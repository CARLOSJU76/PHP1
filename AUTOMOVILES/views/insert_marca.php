<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Marcas de vehículos</title>
</head>
<body>
    <h1>Insertar Marca</h1>
    <form action="index.php?action=insertMarca"  method="post" enctype="multipart/form-data">
        
        <label for="marca">Marca</label>
        <input type="text" name="marca" required><br>

        <input type="submit" value="Guardar"><br>

        <form action="index.php?action=dashboard" method="post"><br>
            <button type="submit" name="action" value="dashboard">Dashboard</button>
        </form>

    </form>
</body>
</html>
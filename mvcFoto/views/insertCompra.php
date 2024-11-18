<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Compra</title>
</head>
<body>
    <h1>Insertar Compra</h1>
    <form action="index.php?action=insertCompra"  method="post" enctype="multipart/form-data">
        
        <label for="num_docum">Número de documento</label>
        <input type="text" name="num_docum" required><br>

        <label for="id_producto">Id del producto</label>
        <input type="text" name="id_producto" required><br>

        <input type="submit" value="Guardar"><br>

        <form action="index.php?action=dashboard" method="post"><br>
            <button type="submit" name="action" value="dashboard">Dashboard</button>
        </form>

    </form>
</body>
</html>
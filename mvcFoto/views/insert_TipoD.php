<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Tipo de Documento</title>
</head>
<body>
    <h1>Insertar Tipo de Documento</h1>
    <form action="index.php?action=insertTipoD"  method="post" enctype="multipart/form-data">
        
        <label for="tipo_documento">Tipo de Documento</label>
        <input type="text" name="tipo_documento" required><br>

        <input type="submit" value="Guardar"><br>

        <form action="index.php?action=dashboard" method="post"><br>
            <button type="submit" name="action" value="dashboard">Dashboard</button>
        </form>

    </form>
</body>
</html>
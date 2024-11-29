<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de automóviles registrados</title>
</head>
<body>
    <h1>Lista de Automóviles</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Color</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Línea</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($autos as $auto): ?>
            <tr>
                <td><?=$auto['Placa']?></td>
                <td><?=$auto['Color']?></td>
                <td><?=$auto['Modelo']?></td>
                <td><?=$auto['Marca']?></td>
                <td><?=$auto['Línea']?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
                <form action="index.php?action=dashboard" method="post" enctype="multipart/form-data">
                    <button type="submit" name="action" value="dashboard">Dashboard</button>
                </form>
</body>
</html>
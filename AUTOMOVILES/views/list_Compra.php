<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Compras</title>
</head>
<body>
    <h1>Consultar Compras</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Nombre del Cliente</th>
                <th>Producto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($compras as $comp): ?>
            <tr>
                <td><?=$comp['Fecha']?></td>
                <td><?=$comp['Hora']?></td>
                <td><?=$comp['Usuario']?></td>
                <td><?=$comp['Producto']?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
                <form action="index.php?action=dashboard" method="post" enctype="multipart/form-data">
                    <button type="submit" name="action" value="dashboard">Dashboard</button>
                </form>
</body>
</html>
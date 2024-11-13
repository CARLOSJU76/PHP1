<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Número de documento</th>
                <th>Tipo de documento</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?=$user['num_docum']?></td>
                <td><?=$user['tipo_docum']?></td>
                <td><?=$user['nombre']?></td>
                <td><?=$user['telefono']?></td>
                <td><img src="photo/<?= $user['foto']; ?>" width="100" alt="Foto"></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
                <form action="index.php?action=dashboard" method="post" enctype="multipart/form-data">
                    <button type="submit" name="action" value="dashboard">Dashboard</button>
                </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buscar Usuario por Nombre</h1>
    <form action="index.php?action=searchUserByName" method="get">
        <input type="hidden" name="action" value="searchUserByName">
        <label fro="name">Nombre</label>
        <input type="text" name="name" required>
        <input type="submit" value="Buscar">
    </form>

    <?php if(isset($users) && count($users)>0):?>
        <h2>Resultados de la búsqueda</h2>
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
                <?php foreach ($users as $user):?>
                    <tr>
                        <td><?= $user['num_docum']; ?></td>
                        <td><?= $user['tipo_docum']; ?></td>
                        <td><?= $user['nombre']; ?></td>
                        <td><?= $user['telefono']; ?></td>
                        <td><img src= "photo/<?= $user['foto']; ?>" width='100px' alt="Foto"></td>
                    </tr>
                    <?php endforeach;?>                    
            </tbody>
        </table>
        <?php elseif(isset($users)):?>
            <p>No se encontraron usuarios con ese nombre</p>

            <?php endif;?>
            <form action="index.php?action=dashboard" method='post' enctype="multipart/form-data">
                <button type="submit" name="action" value="dashboard">Dashboard</button>
        </form>

    
</body>
</html>
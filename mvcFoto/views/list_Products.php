<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del producto</th>
                <th>Marca</th>
                <th>Precio</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
            <tr>
                <td><?=$product['id']?></td>
                <td><?=$product['nombre']?></td>
                <td><?=$product['marca']?></td>
                <td><?=$product['precio']?></td>
                <td><img src="photo/<?= $product['foto']; ?>" width="100" alt="Foto"></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
                <form action="index.php?action=dashboard" method="post" enctype="multipart/form-data">
                    <button type="submit" name="action" value="dashboard">Dashboard</button>
                </form>
</body>
</html>
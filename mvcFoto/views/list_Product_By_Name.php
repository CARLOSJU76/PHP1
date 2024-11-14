<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buscar Producto por Nombre</h1>
    <form action="index.php?action=searchProductByName" method="get">
        <input type="hidden" name="action" value="searchProductByName">
        <label for="name">Nombre</label>
        <input type="text" name="name" required>
        <input type="submit" value="Buscar">
    </form>

    <?php if(isset($products) && count($products)>0):?>
        <h2>Resultados de la búsqueda</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Producto</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product):?>
                    <tr>
                        <td><?= $product['id']; ?></td>
                        <td><?= $product['nombre']; ?></td>
                        <td><?= $product['marca']; ?></td>
                        <td><?= $product['precio']; ?></td>
                        <td><img src= "photo/<?= $product['foto']; ?>" width='100px' alt="Foto"></td>
                    </tr>
                    <?php endforeach;?>                    
            </tbody>
        </table>
        <?php elseif(isset($products)):?>
            <p>No se encontraron productos con ese nombre</p>

            <?php endif;?>
            <form action="index.php?action=dashboard" method='post' enctype="multipart/form-data">
                <button type="submit" name="action" value="dashboard">Dashboard</button>
        </form>

    
</body>
</html>
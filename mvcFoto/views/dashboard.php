<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <h2>DASHBOARD</h2>
    <form action="index.php?action=insertUser" method="GET">
        <button type="submit" name="action" value="insertUser">Insertar Usuario</button>
    </form>

    <form action="index.php?action=updateUser" method="GET">
        <button type="submit" name="action" value="updateUser">Actualizar Usuario</button>
    </form>

    <form action="index.php?action=insertProduct" method="GET">
        <button type="submit" name="action" value="insertProduct">Insertar Producto</button>
    </form>

    <form action="index.php?action=listUsers" method="GET">
        <button type="submit" name="action" value="listUsers">Consultar Usuario</button>
    </form>

    <form action="index.php?action=searchUserByName" method="GET">
        <button type="submit" name="action" value="searchUserByName">Consular Usuario por Nombre</button>
    </form>

    <form action="index.php?action=searchProducts" method='post'>
        <button type="submit" name="action" value="searchProducts">Consultar Productos</button>
    </form>

    <form action="index.php?action=searchProductByName" method="post">
        <button type="submit" name="action" value="searchProductByName">Consultar producto por nombre</button>
</form>

    <form action="index.php?action=insertTipoD" method="GET">
        <button type="submit" name="action" value="insertTipoD">Insertar tipo de documento</button>
    </form>

    <form action="index.php?action=insertTipoP" method="GET">
        <button type="submit" name="action" value="insertTipoP">Insertar tipo de producto</button>
    </form>

    <form action="index.php?action=insertCompra" method="GET">
        <button type="submit" name="action" value="insertCompra">Insertar Compra</button>
    </form>

    
</body>
</html>
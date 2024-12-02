<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <h2>DASHBOARD</h2>

    <!-- Formulario para seleccionar la opción de usuarios -->
    <form action="index.php" method="GET">
        <label for="automovil">Automoviles:</label><br>
        <select name="action" id="automovil">
            <option value="insertAutomovil">Insertar automovil</option>
            <option value="insertColor">Insertar Color</option>
            <option value="insertMarca">Insertar Marca</option>
            <option value="insertLinea">Insertar Línea</option>
            <option value="listAutomovil">Consultar Automóviles</option>
            <option value="searchAutoByPlaca">Consultar Automóvli por Placa</option>
            <option value="openForm">Actualizar Vehículo por Placa</option>
            <option value="deleteCar">Quitar Automovil</option>
        </select>
        <button type="submit">Seleccionar</button>
    </form>

    <br>

    <!-- Formulario para seleccionar la opción de productos -->
    <!-- <form action="index.php" method="GET">
        <label for="productos">Producto:</label>
        <select name="action" id="productos">
            <option value="insertProduct">Insertar Producto</option>
            <option value="searchProducts">Consultar Productos</option>
            <option value="searchProductByName">Consultar Producto por Nombre</option>
            <option value="insertTipoP">Insertar Tipo de Producto</option>
        </select>
        <button type="submit">Seleccionar</button>
    </form>

    <br> -->

    <!-- Formulario para seleccionar la opción de compras -->
    <!-- <form action="index.php" method="GET">
        <label for="compras">Compra:</label>
        <select name="action" id="compras">
            <option value="insertCompra">Insertar Compra</option>
            <option value="listCompra">Consultar Compras</option>
            <option value="listCompraByND">Consultar Compras por Número de Documento</option>
        </select>
        <button type="submit">Seleccionar</button>
    </form> -->

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJx3W1m9vW8zLKG5odMpgqj75y5y2auKZG2K5REs5tPujVgR0w9r6fO4k5PQ" crossorigin="anonymous">

    <style>
        body{
            width: 100%;
            height: 100%;
            background-color: #f7ff88;
        }

        /* Personalizar el color verde militar para el select */
        .form-select {
            background-color: #4b5320; /* Verde militar */
            color: white;
        }

        .container{
            position: absolute;
            top: 40%;
            right: 0;
            width: 100%;
            height: 15%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ff963e;
            padding: 0;
        }

        /* Personalizar el formulario */
        #formulario {
            margin: 0;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Estilos para la tabla */
        .table {
            width: 60%;
            background-color: white;
            border-radius: 10px;
            border: 1px solid #ddd;
        }

        .table th, .table td {
            text-align: center;
            padding: 15px;
        }

        .table th {
            background-color: #4b5320; /* Verde militar */
            color: white;
        }

        /* Input y select con bordes redondeados */
        .form-control, .form-select {
            border-radius: 5px;
        }
        
        /* Botón */
        .btn-custom {
            background-color: #4b5320;
            color: white;
            border-radius: 5px;
        }

        .btn-custom:hover {
            background-color: #3c421c;
        }
    </style>
</head>
<body>
    <h2 class="text-center mb-4">DASHBOARD</h2>

    <div class="container mt-4">
        <!-- Formulario dentro de una tabla centrada -->
        <form action="index.php" method="GET" id="formulario">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Formulario de Inserción de Vehículo</th>
                    </tr>
                </thead>
                <tbody>
                    <td>
                        <tr><label for="placa">Placa:</label></tr>
                        <tr><input type="text" name="placa" id="placa" class="form-control" required></tr>
                    </td>
                    <td>
                        <tr><label for="id-color">Color:</label></tr>
                        <tr> <select name="id_color" id="id_color">
                                <option value="">Elija el Color</option>
                                <?php include_once('./controllers/UserController.php');
                                    $color1= new $userController();
                                    $arrayColor= $color1->getColor();
                
                                    foreach($arrayColor as $col){
                                    echo "<option value='".htmlspecialchars($col['id'])."'>"
                                    .htmlspecialchars($col['color'])."</option>";
                                    }
                                ?>
                            </select></tr>
                    </td>
                    <td>
                        <tr><label for="color">Color:</label></tr>
                        <tr><input type="text" name="color" id="color" class="form-control" required></tr>
                    </td>
                    <td>
                        <tr><label for="modelo">Modelo:</label></tr>
                        <tr><input type="number" name="modelo" id="modelo" class="form-control" required></tr>
                    </td>
                    <td>
                        <tr><label for="marca">Marca:</label></tr>
                        <tr><select name="id_marca" id="id_marca">
                                <option value="">Elija la marca</option>
                                    <?php include_once('./controllers/UserController.php');
                                        $marca1= new $userController();
                                        $arrayMarca= $marca1->getMarca();
                
                                        foreach($arrayMarca as $mar){
                                        echo "<option value='".htmlspecialchars($mar['id'])."'>"
                                        .htmlspecialchars($mar['marca'])."</option>";
                                        }
                                    ?>
                            </select></tr>
                    </td>
                    <td>
                        <tr>
                        <select name="id_linea" id="id_linea">
                            <option value="">Elija la línea</option>
                                <?php include_once('./controllers/UserController.php');
                                    $linea1= new $userController();
                                    $arrayLinea= $linea1->getLinea();
                
                                    foreach($arrayLinea as $lin){
                                    echo "<option value='".htmlspecialchars($lin['id'])."'>"
                                    .htmlspecialchars($lin['linea'])."</option>";
                                    }
                                ?>
                        </select>
                        </tr>
                    </td>
                    <!-- <td>
                        <tr><label for="tipo">Tipo de vehículo:</label></tr>
                        <tr>
                            <select name="tipo" id="tipo" class="form-select" required>
                                <option value="" disabled selected>Seleccionar tipo</option>
                                <option value="sedan">Sedan</option>
                                <option value="suv">SUV</option>
                                <option value="pickup">Pickup</option>
                                <option value="deportivo">Deportivo</option>
                            </select>
                        </tr>
                    </td> -->
                    <tr>
                        <td colspan="2" class="text-center">
                            <button type="submit" class="btn btn-custom">Guardar Vehículo</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

    <!-- Incluir Bootstrap JS y Popper (para componentes interactivos) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb1gU5CHyXc7D6T2t5fSfaFz0GvL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Yz0u0g3P69VJ3xJkpQig2hFfoIF61h1iRIyR38uL9a5NwGo" crossorigin="anonymous"></script>

</body>
</html>

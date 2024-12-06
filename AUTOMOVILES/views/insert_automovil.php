<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserción de Vehículos</title>

    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJx3W1m9vW8zLKG5odMpgqj75y5y2auKZG2K5REs5tPujVgR0w9r6fO4k5PQ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <style>
         .container, .form-select{
            border: 3px solid white ;
        }
    </style>
    
</head>
<body>
    <h2 class="text-center mb-4">Inserción de vehículos</h2>
    <form action="index.php?action=dashboard" method="post">
            <button type="submit" name="action" value="dashboard">Dashboard</button>
    </form>

    <div class="container mt-4">
        <!-- Formulario dentro de una tabla centrada -->
        <form action="index.php?action=insertAutomovil" method="post" id="formulario">
            <table class="table">
                <!-- Primera fila: Encabezado -->
                <thead>
                    <tr>
                        <th colspan="5">Formulario de Inserción de Vehículo</th>
                    </tr>           
                </thead>
                <tbody>
                    <!-- Segunda fila: Campos del formulario -->
                    <tr>
                        <td><input type="text" name="placa" id="placa" placeholder="Ingrese la Placa" class="form-control" required></td>
                        <td>
                            <select name="id_color" id="id_color" class="form-select" required>
                                <option value="">Elija el Color</option>
                                <?php 
                                    include_once('./controllers/UserController.php');
                                    $color1 = new $userController();
                                    $arrayColor = $color1->getColor();
                                    foreach($arrayColor as $col){
                                        echo "<option value='".htmlspecialchars($col['id'])."'>"
                                        .htmlspecialchars($col['color'])."</option>";
                                    }
                                ?>
                            </select>
                        </td>
                        <td><input type="number" name="modelo" id="modelo" placeholder="Ingrese el modelo" class="form-control" required></td>
                        <td>
                            <select name="id_marca" id="id_marca" class="form-select" required>
                                <option value="">Elija la Marca</option>
                                <?php 
                                    $marca1 = new $userController();
                                    $arrayMarca = $marca1->getMarca();
                                    foreach($arrayMarca as $mar){
                                        echo "<option value='".htmlspecialchars($mar['id'])."'>"
                                        .htmlspecialchars($mar['marca'])."</option>";
                                    }
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name="id_linea" id="id_linea" class="form-select" required>
                                <option value="">Elija la Línea</option>
                                <?php 
                                    $linea1 = new $userController();
                                    $arrayLinea = $linea1->getLinea();
                                    foreach($arrayLinea as $lin){
                                        echo "<option value='".htmlspecialchars($lin['id'])."'>"
                                        .htmlspecialchars($lin['linea'])."</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <!-- Tercera fila: Botón de submit -->
                    <tr>
                        <td colspan="5" class="text-center">
                            <button type="submit" class="btn btn-custom">Guardar Vehículo</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

    <!-- Incluir Bootstrap JS y Popper (para componentes interactivos) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb1gU5CHyXc7D6T2t5fSfaFz0GvL" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Yz0u0g3P69VJ3xJkpQig2hFfoIF61h1iRIyR38uL9a5NwGo" crossorigin="anonymous"></script> -->

</body>
</html>

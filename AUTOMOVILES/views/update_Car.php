<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando Datos de Vehículo</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJx3W1m9vW8zLKG5odMpgqj75y5y2auKZG2K5REs5tPujVgR0w9r6fO4k5PQ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Editando Datos de Vehículo</h1>
        <form action="index.php?action=updateVehi" method="post" enctype="multipart/form-data">
            <input type="hidden" name="placa" value="<?= $_GET['placa'] ?? '' ?>">
            
            <div class="mb-3">
                <label for="placa1" class="form-label">Digite la nueva placa:</label>
                <input type="text" name="placa1" value="<?= $carData[0]['Placa'] ?? '' ?>" class="form-control" placeholder="Placa">
            </div>
            
            <div class="mb-3">
                <label for="id_color" class="form-label">Color</label>
                <select name="id_color" class="form-select">
                    <option value="">Seleccione el nuevo color:</option>
                    <?php
                        include_once('./controllers/UserController.php');
                        $color = new UserController();
                        $arrayColor = $color->getColor();

                        foreach($arrayColor as $col) {
                            $selected = ($col['id'] == $carData[0]['Color']) ? 'selected' : '';
                            echo "<option value='" . htmlspecialchars($col['id']) . "' $selected>" . htmlspecialchars($col['color']) . "</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" name="modelo" value="<?= $carData[0]['Modelo'] ?? '' ?>" class="form-control" placeholder="Modelo">
            </div>

            <div class="mb-3">
                <label for="id_marca" class="form-label">Marca</label>
                <select name="id_marca" class="form-select">
                    <option value="">Seleccione la marca:</option>
                    <?php
                        $marca = new UserController();
                        $arrayMarca = $marca->getMarca();

                        foreach($arrayMarca as $mar) {
                            $selected = ($mar['id'] == $carData[0]['Marca']) ? 'selected' : '';
                            echo "<option value='" . htmlspecialchars($mar['id']) . "' $selected>" . htmlspecialchars($mar['marca']) . "</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="id_linea" class="form-label">Línea</label>
                <select name="id_linea" class="form-select">
                    <option value="">Seleccione la línea:</option>
                    <?php
                        $linea = new UserController();
                        $arrayLinea = $linea->getLinea();

                        foreach($arrayLinea as $line) {
                            $selected = ($line['id'] == $carData[0]['Línea']) ? 'selected' : '';
                            echo "<option value='" . htmlspecialchars($line['id']) . "' $selected>" . htmlspecialchars($line['linea']) . "</option>";
                        }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn-custom">Actualizar Vehículo</button>
        </form>
    </div>
</body>
</html>

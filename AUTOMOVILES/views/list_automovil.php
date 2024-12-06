<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Automóviles Registrados</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJx3W1m9vW8zLKG5odMpgqj75y5y2auKZG2K5REs5tPujVgR0w9r6fO4k5PQ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css"> <!-- Asegúrate de tener este archivo -->
</head>
<body>
<h1 class="text-center mb-4">Lista de Automóviles Registrados</h1>
<div class="text-center mt-4">
            <form action="index.php?action=dashboard" method="post" enctype="multipart/form-data">
                <button type="submit" name="action" value="dashboard" class="btn btn-custom">Dashboard</button>
            </form>
        </div>

    <div class="container mt-4">
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Color</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Línea</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($autos as $auto): ?>
                <tr>
                    <td><?=$auto['Placa']?></td>
                    <td><?=$auto['Color']?></td>
                    <td><?=$auto['Modelo']?></td>
                    <td><?=$auto['Marca']?></td>
                    <td><?=$auto['Línea']?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
       
    </div>
</body>
</html>

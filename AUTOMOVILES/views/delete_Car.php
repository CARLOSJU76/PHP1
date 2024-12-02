<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Usuario por Número de Documento</title>
</head>
<body>
    <form action="index.php?action=deleteCar" method="get">
    <input type="hidden" name="action" value="deleteCar">
        <label for="placa">Placa del vehículo</label>
        
        <select name="placa" id="placa">
            <option value="">Elija la placa</option>
            <?php
                include_once('./controllers/UserController.php');
                $placas= new UserController();
                $arrayPlaca= $placas->getPlaca();
                
                foreach($arrayPlaca as $plac){
                    echo"<option value='" .htmlspecialchars($plac['placa'])."'>".
                        htmlspecialchars($plac['placa'])."</option>";
                }
            ?>
        </select><br>

        <input type="submit" value="Buscar">
        
    </form>

    <form action="index.php?action=deleteCar" method="GET">
        <input type="hidden" name="placa" value="<?= $_GET['placa'] ?? '' ?>">
        <button type="submit" name="action" value="deleteCar">Quitar Vehículo</button>
    </form><br>

    <?php if(isset($autos) && count($autos)>0):?>
        <h2>Resultados de la búsqueda</h2>
        <table border="1">
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
                <?php foreach ($autos as $auto):?>
                    <tr>
                        <td><?= $auto['Placa']; ?></td>
                        <td><?= $auto['Color']; ?></td>
                        <td><?= $auto['Modelo']; ?></td>
                        <td><?= $auto['Marca']; ?></td>
                        <td><?= $auto['Línea']; ?></td>
                        
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
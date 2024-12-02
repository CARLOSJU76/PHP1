<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización de Vehículos</title>
</head>
<body>
    <form action="index.php?action=openForm" method="get">
    <input type="hidden" name="action" value="openForm">
        <label for="placa">Placa</label>
        
        <select name="placa" id="placa">
            <option value="">Elija la placa</option>
            <?php
                include_once('./controllers/UserController.php');
                $placas= new UserController();
                $arrayPlaca= $placas->getPlaca();
                
                foreach($arrayPlaca as $pla){
                    echo"<option value='" .htmlspecialchars($pla['placa'])."'>".
                        htmlspecialchars($pla['placa'])."</option>";
                }
            ?>
        </select><br>

        <input type="submit" value="Buscar">
        
    </form>

    <form action="index.php?action=updateVehi" method="get">
        <input type="hidden" name="placa" value="<?= $_GET['placa'] ?? '' ?>">
        <button type="submit" name="action" value="updateVehi">Actualizar datos</button>
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
                <?php foreach ($autos as $aut):?>
                    <tr>
                        <td><?= $aut['Placa']; ?></td>
                        <td><?= $aut['Color']; ?></td>
                        <td><?= $aut['Modelo']; ?></td>
                        <td><?= $aut['Marca']; ?></td>
                        <td><?= $aut['Línea']; ?></td>
                    </tr>
                    <?php endforeach;?>                    
            </tbody>
        </table>
        <?php elseif(isset($autos)):?>
            <p>No se encontraron usuarios con ese nombre</p>

            <?php endif;?>
            

           
            <form action="index.php?action=dashboard" method='post' enctype="multipart/form-data">
                <button type="submit" name="action" value="dashboard">Dashboard</button>
        </form>
</body>
</html>
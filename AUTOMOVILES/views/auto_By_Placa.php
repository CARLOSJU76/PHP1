<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Automóviles por Placa</title>
</head>
<body>
    <h1>Buscar automóvil</h1>
    <form action="index.php?action=searchAutoByPlaca" method="get">
        <input type="hidden" name="action" value="searchAutoByPlaca">
        <label for="num_docum">Placa</label>
        <!-- <input type="text" name="num_docum"> -->
        <select name="placa" id="placa">
            <option value="">Elija la placa</option>
            <?php
                include_once('./controllers/UserController.php');
                $placas= new UserController();
                $arrayPlacas= $placas->getPlaca();
                
                foreach($arrayPlacas as $pla){
                    echo"<option value='" .htmlspecialchars($pla['placa'])."'>".
                        htmlspecialchars($pla['placa'])."</option>";
                }
            ?>
        </select><br>
        <input type="submit" value="Buscar">
    </form>

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
        <?php elseif(isset($compras)):?>
            <p>No se encontraron productos con ese nombre</p>

            <?php endif;?>
            <form action="index.php?action=dashboard" method='post' enctype="multipart/form-data">
                <button type="submit" name="action" value="dashboard">Dashboard</button>
        </form>

    
</body>
</html>
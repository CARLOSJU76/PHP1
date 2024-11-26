<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Compras por Número de documento</title>
</head>
<body>
    <h1>Buscar compra</h1>
    <form action="index.php?action=searchProductByName" method="get">
        <input type="hidden" name="action" value="searchProductByName">
        <label for="num_docum">Número de Documento</label>
        <!-- <input type="text" name="num_docum"> -->
        <select name="num_docum" id="num_docum">
            <option value="">Elija un número de Documento</option>
            <?php
                include_once('./controllers/UserController.php');
                $usuarios= new UserController();
                $arrayUser= $usuarios->getNumD();
                
                foreach($arrayUser as $user){
                    echo"<option value='" .htmlspecialchars($user['num_docum'])."'>".
                        htmlspecialchars($user['num_docum'])."</option>";
                }
            ?>
        </select><br>
        <input type="submit" value="Buscar">
    </form>

    <?php if(isset($compras) && count($compras)>0):?>
        <h2>Resultados de la búsqueda</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Producto</th>
                    <th>Fecha</th>                    
                    <th>Hora</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($compras as $comp):?>
                    <tr>
                        <td><?= $comp['Cliente']; ?></td>
                        <td><?= $comp['Producto']; ?></td>
                        <td><?= $comp['Fecha']; ?></td>
                        <td><?= $comp['Hora']; ?></td>
                        
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
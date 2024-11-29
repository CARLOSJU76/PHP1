<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Usuarios</title>
</head>
<body>
    <h1>Insertar Automivil</h1>
    <form action="index.php?action=insertAutomovil"  method="post" enctype="multipart/form-data">
        
        <label for="placa">Placa</label>
        <input type="text" name="placa" required><br>

        <label for="id_color">Color</label>
        <!-- <input type="text" name="tipo_documento" required><br> -->
         <select name="id_color" id="id_color">
            <option value="">Elija el Color</option>
            <?php
                include_once('./controllers/UserController.php');
                    $color1= new $userController();
                    $arrayColor= $color1->getColor();
                
                foreach($arrayColor as $col){
                    echo "<option value='".htmlspecialchars($col['id'])."'>"
                    .htmlspecialchars($col['color'])."</option>";
                }
            ?>
         </select><br>

        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" required><br>

        
        <label for="id_marca">Marca</label>
        <!-- <input type="text" name="id_marca" required><br> -->
            <select name="id_marca" id="id_marca">
            <option value="">Elija la marca</option>
            <?php
                include_once('./controllers/UserController.php');
                    $marca1= new $userController();
                    $arrayMarca= $marca1->getMarca();
                
                foreach($arrayMarca as $mar){
                    echo "<option value='".htmlspecialchars($mar['id'])."'>"
                    .htmlspecialchars($mar['marca'])."</option>";
                }
            ?>
         </select><br>

        <label for="id_linea">Línea</label>
        <!-- <input type="text" name="id_linea" required><br> -->
        <select name="id_linea" id="id_linea">
            <option value="">Elija la LÍNEA</option>
            <?php
                include_once('./controllers/UserController.php');
                    $linea1= new $userController();
                    $arrayLinea= $linea1->getLinea();
                
                foreach($arrayLinea as $lin){
                    echo "<option value='".htmlspecialchars($lin['id'])."'>"
                    .htmlspecialchars($lin['linea'])."</option>";
                }
            ?>
         </select><br>

        <input type="submit" value="Guardar"><br>

        <form action="index.php?action=dashboard" method="post"><br>
            <button type="submit" name="action" value=" dashboard">Dashboard</button>
        </form>

    </form>
</body>
</html>
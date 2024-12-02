<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando Datos de Usuario x NumDocum</title>
</head>
<body>
    
    
    <form action="index.php?action=updateVehi" method="post" enctype="multipart/form-data">

        <div>Editando Datos de Vehículo por Placa</div><br>
        
        <input type="hidden" name="placa" value="<?= $_GET['placa'] ?? '' ?>">
        <label for="placa1">Digite la nueva placa:</label>
        <input type="text" name="placa1" value="<?= $carData[0]['Placa'] ?? ''?>" placeholder="Placa"><br>
        <!-- <input type="text" name="id_tipoD" placeholder="tipo de Documento"><br> -->
        <label for="id_color">Color</label>
        <select name="id_color">
            <option value="">Seleccione el nuevo color:</option>
                <?php
                    include_once('./controllers/UserController.php');
                    $color= new UserController();
                    $arrayColor= $color->getColor();

                    foreach($arrayColor as $col){
                        $selected = ($col['id'] == $carData[0]['Color']) ? 'selected' : '';
                        echo    "<option value='". htmlspecialchars($col['id'])."' $selected>".
                                htmlspecialchars($col['color']) . "</option>" ;                      
                    }
                ?>
         </select><br>
        <label for="nombre">Modelo: </label>
        <input type="text" name="modelo" value="<?= $carData[0]['Modelo'] ?? ''?>" placeholder="Marca"><br>
        <label for="id_marca">Marca:</label>
        <!-- <input type="text" name="marca" value="<?= $carData[0]['Marca'] ?? ''?>" placeholder="Marca"><br> -->
        <select name="id_marca">
            <option value="">Seleccione la marca:</option>
                <?php
                    include_once('./controllers/UserController.php');
                    $marca= new UserController();
                    $arrayMarca= $marca->getMarca();

                    foreach($arrayMarca as $mar){
                        $selected = ($mar['id'] == $carData[0]['Marca']) ? 'selected' : '';
                        echo    "<option value='". htmlspecialchars($mar['id'])."' $selected>".
                                htmlspecialchars($mar['marca']) . "</option>" ;                      
                    }
                ?>
         </select><br>
         <label for="id_linea">Línea:</label>
        <!-- <input type="text" name="linea" value="<?= $carData[0]['Línea'] ?? ''?>" placeholder="Línea"><br> -->
        <select name="id_linea">
            <option value="">Seleccione la línea:</option>
                <?php
                    include_once('./controllers/UserController.php');
                    $linea= new UserController();
                    $arrayLinea= $marca->getLinea();

                    foreach($arrayLinea as $line){
                        $selected = ($line['id'] == $carData[0]['Línea']) ? 'selected' : '';
                        echo    "<option value='". htmlspecialchars($line['id'])."' $selected>".
                                htmlspecialchars($line['linea']) . "</option>" ;                      
                    }
                ?>
         </select><br>
                    <input type="submit" value="actualizar Usuario"><br> 
        

    </form>
</body>
</html>

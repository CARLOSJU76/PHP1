<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Compra</title>
</head>
<body>
    <h1>Insertar Compra</h1>
    <form action="index.php?action=insertCompra"  method="post" enctype="multipart/form-data">
        
        <label for="num_docum">Número de documento</label>
        <!-- <input type="text" name="num_docum" required><br> -->
         <select name="num_docum" id="num_docum">
            <option value="">Elija el número de Documento</option>
            <?php
                include_once('UserController.php');
                $numD= new $userController();
                $arrayNumD= $numD->getNumD();
            foreach($arrayNumD as $numDocum){
                echo    "<option value='". htmlspecialchars($numDocum['num_docum'])."'>".
                        htmlspecialchars($numDocum['nombre'])."</option>";
            
            }
            ?>

         </select><br>

        <label for="id_producto">Id del producto</label>
        <!-- <input type="text" name="id_producto" required><br> -->
         <select name="id_producto" id="id_producto">
            <option value="">Elija un producto de la lista</option>
        <?php
            include_once('./controllers.UserControllers.php');
            $Producto= new $userController();
            $arrayProducto= $Producto->getProducto();
        foreach($arrayProducto as $item){
            echo    "<option value='".htmlspecialchars($item['id'])."'>".
                    htmlspecialchars($item['nombre'])."</option>";
        }
        ?>

         </select><br>
         <input type="date" name="fecha" placeholder="Elija la fecha">
         <input type="time" name="hora"placeholder="Elija la hora">

        <input type="submit" value="Guardar"><br>

        <form action="index.php?action=dashboard" method="post"><br>
            <button type="submit" name="action" value="dashboard">Dashboard</button>
        </form>

    </form>
</body>
</html>
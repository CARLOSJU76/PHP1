<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Línea</title>
</head>
<body>
    <h1>Insertar Línea de automóviles</h1>
    <form action="index.php?action=insertLinea"  method="post" enctype="multipart/form-data">
        
       
        <input type="text" name="linea" placeholder="nombre de la línea"><br>
      
        

        <input type="submit" value="Guardar"><br>

        <form action="index.php?action=dashboard" method="post"><br>
            <button type="submit" name="action" value=" dashboard">Dashboard</button>
        </form>
    </form>

</body>
</html>
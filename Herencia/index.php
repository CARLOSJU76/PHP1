<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylos.css">
    
    <title>Document</title>
</head>
<body>
    
        <form id="contenedor" action="isset.php" method="post">
            <select name="opcion" required>
                <option value= "">Selecciona tipo de vehículo</option>
                <option value="1">Datos estándar</option>
                <option value="2">Automóvil</option>
                <option value="3">Híbrido</option>
                <option value="4">Motocicleta</option>
                <option value="5">Motocicleta Eléctrica</option>
            </select>
            <button type="submit" onclick="ocultarElemento()" name="enviar" >Enviar</button>
            <!-- <input type="submit" onclick="ocultarElemento()" name="enviar" value="Enviar"> -->
    
        </form>
    
    <script src="javascript.js"></script>
</body>
</html>




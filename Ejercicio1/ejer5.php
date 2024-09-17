<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>   

</head>
<body>

<form action="./ejercicio5.php" method="POST"> <!-- Hay dos métodos: Post y Get -->
        <label for="num1">Numero1</label>
        <input type="text" name="num1" id="num1"/>

        <label for="num2">Numero2</label>
        <input type="text" name="num2" id="num2"/>

        <select name="opcion" id="opcion">
            <option value="1">Sumar</option>
            <option value="2">Restar</option>
            <option value="3">Multiplicar</option>
            <option value="4">Dividir</option>

        </select>

        <button type="submit">Resultado</button> <!--El botón siempre debe ser tipo submit -->        

    </form>
    
</body>
</html>
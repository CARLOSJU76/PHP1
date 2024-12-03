<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJx3W1m9vW8zLKG5odMpgqj75y5y2auKZG2K5REs5tPujVgR0w9r6fO4k5PQ" crossorigin="anonymous">

    <style>
        body{
            width: 100%;
            height: 100%;
            background-color: #f7ff88;
        }
        /* Personalizar el color verde militar para el select */
        .form-select {
            background-color: #4b5320; /* Verde militar */
            color: white;
        }
        
        .container{

            position: absolute;
            top: 40%;
            right:0;
            width: 100%;
            height:15%;
            display:flex;
            justify-content: center;
            align-items:center;
            background-color: #ff963e;
            padding:0;
        }
        #formulario{
           margin:0;
            height: 100%;
            display:flex;
            justify-content:center;
            align-items:center;
           
        }
        #automovil{
            height:50;
            border-radius:5px;  
            text-align:center;       
        }
    </style>
</head>
<body>
<h2 class="text-center mb-4">DASHBOARD</h2>

    <div class="container mt-4">
        

        <!-- Formulario -->
        <form action="index.php" method="GET" id="formulario">
            <div class="mb-3">
                <select name="action" id="automovil" class="form-select form-select-lg" onchange="this.form.submit()">
                    <option value="" disabled selected>Automóviles</option> <!-- Opción predeterminada -->
                    <option value="insertAutomovil">Insertar Automóvil</option>
                    <option value="insertColor">Insertar Color</option>
                    <option value="insertMarca">Insertar Marca</option>
                    <option value="insertLinea">Insertar Línea</option>
                    <option value="listAutomovil">Consultar Automóviles</option>
                    <option value="searchAutoByPlaca">Consultar Automóvil por Placa</option>
                    <option value="openForm">Actualizar Vehículo por Placa</option>
                    <option value="deleteCar">Quitar Automóvil</option>
                </select>
            </div>
        </form>
    </div>

    <!-- Incluir Bootstrap JS y Popper (para componentes interactivos) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb1gU5CHyXc7D6T2t5fSfaFz0GvL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0Yz0u0g3P69VJ3xJkpQig2hFfoIF61h1iRIyR38uL9a5NwGo" crossorigin="anonymous"></script>

</body>
</html>

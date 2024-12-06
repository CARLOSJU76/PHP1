<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Color</title>
        <style>
            body{
            width: 100%;
            height: 100%;
            background-color: #f7ff88;
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
            button, #guardar {
                background-color: #4b5320;
                color: white;
                border-radius: 5px;
                font-size: 1rem; /* Aumentar tamaño de la fuente del botón */
                padding: 0.5rem 1.5rem; /* Aumentar padding para hacerlo más grande */
            }
                    input[type="text"], .form-select, button, th, h2{
                font-family: 'calibri', sans-serif; /* Puedes reemplazar 'Arial' con cualquier fuente */
                border-radius: 6px;
                font-size: 1rem;
                margin-bottom: 3%;                
                padding: 0.5rem; /* Aumentar el padding para hacer el input más grande */
           
            }
            #formulario{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

        </style>
    
</head>
<body>

    <h1>Insertar Color</h1>
    <form action="index.php?action=dashboard" method="post">
            <button type="submit" name="action" value="dashboard">Dashboard</button>
    </form>
    <div id="container" class="container">
    <form action="index.php?action=insertColor"  method="post">
        <div id="formulario">
            <div>
                <input type="text" name="color" placeholder="Ingrese aquí el color" required>
            </div>
            <div>
                <input type="submit" value="Guardar" id="guardar">
                
            </div>
        </div>
        
    </form>
    
    </div>
    
    
</body>
</html>
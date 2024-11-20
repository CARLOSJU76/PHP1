<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Usuario por Número de Documento</title>
</head>
<body>
    <form action="index.php?action=list_user_By_Num_Docum" method="get">
        <!-- <input type="hidden" name="action" value="list_user_By_Num_Docum"> -->
        <label for="num_docum">Número de Documento</label>
        <!-- <input type="text" name="name" required> -->
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

    <?php if(isset($users) && count($users)>0):?>
        <h2>Resultados de la búsqueda</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Número de documento</th>
                    <th>Tipo de documento</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user):?>
                    <tr>
                        <td><?= $user['num_docum']; ?></td>
                        <td><?= $user['id_tipoD']; ?></td>
                        <td><?= $user['nombre']; ?></td>
                        <td><?= $user['telefono']; ?></td>
                        <td><img src= "photo/<?= $user['foto']; ?>" width='100px' alt="Foto"></td>
                    </tr>
                    <?php endforeach;?>                    
            </tbody>
        </table>
        <?php elseif(isset($users)):?>
            <p>No se encontraron usuarios con ese nombre</p>

            <?php endif;?>
            <form action="index.php?action=dashboard" method='post' enctype="multipart/form-data">
                <button type="submit" name="action" value="dashboard">Dashboard</button>
        </form>
</body>
</html>
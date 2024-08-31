<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root"; // Usuario por defecto en WampServer
$password = ""; // Contraseña por defecto en WampServer (vacía si no se ha cambiado)
$port= 3307;
$dbname = "usuarios";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recoger datos del formulario
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$password = $_POST['password'];


//Verificando si existen registros con el mismo usuario:
$veriUs = $conn->prepare("SELECT COUNT(*) FROM lista_registro WHERE user = ?");
$veriUs->bind_param("s", $usuario);
$veriUs->execute();
$veriUs->bind_result($conteo);
$veriUs->fetch();
echo "Numero de usuarios: $conteo";
$veriUs->close();

//Verificando si existen registros con el mismo email:
//Verificando si existen registros con el mismo usuario:
    $veriEm = $conn->prepare("SELECT COUNT(*) FROM lista_registro WHERE email = ?");
    $veriEm->bind_param("s", $email);
    $veriEm->execute();
    $veriEm->bind_result($conteo1);
    $veriEm->fetch();
    echo "Numero de correos: $conteo1";
    $veriEm->close();

if($conteo>0 || $conteo1>0){
    echo "Usuario o Correo ya han sido registrados. Intenta nuevamente.";

}else{
    // Encriptar la contraseña
$password_hashed = password_hash($password, PASSWORD_DEFAULT);

// Preparar y ejecutar la consulta
$sql = "INSERT INTO lista_registro (user, email, passw) VALUES ('$usuario', '$email', '$password_hashed')";

if ($conn->query($sql) === TRUE) {
    echo "Bienvenido, $usuario ha sido registrado exitosamente";
    echo"<br><br>";
    

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
    
}


?>
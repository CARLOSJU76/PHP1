<?php
$conexion= new mysqli("localhost", "root", "", "usuarios", 3307);

    $user=$_POST["user"];
    $passw=$_POST["passw"];

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
    $consulta= $conexion->prepare("SELECT passw, user from lista_registro where user=? or email=? ");
    $consulta->bind_param("ss", $user, $user);
    $consulta->execute();
    $consulta->bind_result($clave, $user1);
    $consulta->fetch();
    
    if (password_verify($passw, $clave)) {
        // La contraseña es correcta
        echo "Inicio de sesión exitoso. Bienvenido $user1";
    } else {
        // La contraseña es incorrecta
        echo "Contraseña incorrecta.";
    }

    $conexion->close();
?>
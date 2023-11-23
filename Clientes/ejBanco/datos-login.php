<?php
session_start(); 
include 'conexion.php'; 

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conexion->real_escape_string($_POST['email']);
    $password = $conexion->real_escape_string($_POST['password']);

    // Consulta para buscar el usuario
    $consulta = "SELECT id, nombre, password FROM usuarios WHERE email = '$email'";
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows > 0) {
        // Usuario encontrado
        $fila = $resultado->fetch_assoc();
        if (password_verify($password, $fila['password'])) {
            // La contraseña coincide
            $_SESSION['usuario_id'] = $fila['id']; // O cualquier otro dato que desees guardar en la sesión
            $_SESSION['nombre'] = $fila['nombre'];
            // Redireccionar al área de usuarios o a donde desees
        } else {
            // La contraseña no coincide
            echo "Contraseña incorrecta";
        }
    } else {
        // Usuario no encontrado
        echo "No se encontró una cuenta con ese email";
    }
    $conexion->close();
}
?>

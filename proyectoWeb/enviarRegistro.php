<?php
require "conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $carrera = mysqli_real_escape_string($conexion, $_POST['carrera']);
    $email = mysqli_real_escape_string($conexion, $_POST['email']);
    $no_cuenta = mysqli_real_escape_string($conexion, $_POST['no_cuenta']);
    $direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
    $password = mysqli_real_escape_string($conexion, $_POST['password']);

    // Comprobar si el usuario ya existe
    $buscar_usuario = "SELECT * FROM individuo WHERE no_cuenta = '$no_cuenta'";
    $resultado = $conexion->query($buscar_usuario);

    if ($resultado->num_rows > 0) {
        // Si el usuario ya existe, redirige a inicio.php
        header('Location: inicio.php');
        exit;
    } else {
        // Preparar la consulta SQL para insertar los datos
        $insertar = "INSERT INTO individuo (nombre, carrera, no_cuenta, direccion, telefono, email, password)
                     VALUES ('$nombre', '$carrera', '$no_cuenta', '$direccion', '$telefono', '$email', '$password')";

        // Ejecutar la consulta e informar al usuario
        if ($conexion->query($insertar) === TRUE) {
            // Redirige a Registro.php si el registro es exitoso
            header('Location: Registro.php');
            exit;
        } else {
            echo "Error al insertar el registro: " . $conexion->error;
        }
    }
    // Cerrar la conexión
    $conexion->close();
} else {
    echo "Método de solicitud inválido.";
}
?>

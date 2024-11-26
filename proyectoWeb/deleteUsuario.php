<?php
require "conexion.php";

$no_cuenta = $_POST['no_cuenta'];

if (!empty($no_cuenta)) {
    $consulta = "DELETE FROM individuo WHERE no_cuenta = '$no_cuenta'";
    if ($conexion->query($consulta) === TRUE) {
        header('Location:inicio.php');
    } else {
        echo "Error: " . $conexion->error;
    }
} else {
    echo "Por favor, ingresa un número de cuenta.";
}

?>
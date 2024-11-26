<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión a la Base de Datos</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <style>
        body {
            background-color: #fce4ec; /* Fondo rosa claro */
            margin: 0; /* Sin márgenes */
        }
        .message {
            margin-top: 20px; /* Subir el mensaje más arriba */
            text-align: center; /* Centrar el texto horizontalmente */
        }
        h2 {
            font-size: 2rem;
            color: #000; /* Color negro para el texto */
        }
    </style>
</head>
<body>
    <?php
    $host_db = "127.0.0.1:3306";
    $user_name = "root";
    $user_pass = "1234";
    $db_name = "andy";

    // Crear conexión
    $conexion = new mysqli($host_db, $user_name, $user_pass, $db_name);

    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    } else {
        echo '<div class="message"><h2>Hola</h2></div>';
    }
    ?>
</body>
</html>

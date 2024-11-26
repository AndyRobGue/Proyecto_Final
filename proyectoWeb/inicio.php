<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>

<!-- Barra rosa -->
<div>
        <nav class="purple lighten-5">
            <a href="IniciarSesion.php" class="btn red right" style="height: 65px; line-height: 70px; color:black"; >Salir</a>
            <a href="EliminarUsuario.php" class="btn purple lighten-5 right" style="height: 65px; line-height: 70px; color:black;">Eliminar Usuario</a>
            <a href="Registro.php" class="btn purple lighten-5 right" style="height: 65px; line-height: 70px; color:black;">Nuevo Registro</a>
    </div>
    <?php
require "conexion.php"; // Archivo para la conexión
mysqli_set_charset($conexion, 'utf8');

// Consulta SQL
$consulta_sql = "SELECT * FROM individuo";
$resultado = $conexion->query($consulta_sql);

if (!$resultado) {
    die("Error en la consulta: " . $conexion->error);
}

// Contar registros
$cuenta = mysqli_num_rows($resultado);

// Crear tabla

            echo "<table class='striped centered'>
                    <tr>
                        <th class='card-panel pink ligten-3'>Numero</th>
                        <th class='card-panel pink ligten-3'>Nombre</th>
                        <th class='card-panel pink ligten-3'>Carrera</th>
                        <th class='card-panel pink ligten-3'>No_Cuenta</th>
                        <th class='card-panel pink ligten-3'>Direccion</th>
                        <th class='card-panel pink ligten-3'>Telefono</th>
                        <th class='card-panel pink ligten-3'>Email</th>
                        <th class='card-panel pink ligten-3'>Contraseña</th>
                        <th class='card-panel pink ligten-3'>Fecha</th>
                        <th class='card-panel pink ligten-3'>Permisos</th>
                    </tr>";

            if ($cuenta > 0) {
                // Pintar registros
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $fila['numero'] . "</td>";
                    echo "<td>" . $fila['nombre'] . "</td>";
                    echo "<td>" . $fila['carrera'] . "</td>";
                    echo "<td>" . $fila['no_cuenta'] . "</td>";
                    echo "<td>" . $fila['direccion'] . "</td>";
                    echo "<td>" . $fila['telefono'] . "</td>";
                    echo "<td>" . $fila['email'] . "</td>";
                    echo "<td>" . $fila['password'] . "</td>";
                    echo "<td>" . $fila['fecha'] . "</td>";
                    echo "<td>" . $fila['permisos'] . "</td>";
                    echo "</tr>";
                }
    
            echo "</table>";
    
} else {
    echo "<h1 style='color:red'>Sin ningún registro</h1>";
}
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Registro</title>
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
            <a href="inicio.php" class="btn purple lighten-5 right" style="height: 65px; line-height:70px; color:black">Lista de alumnos</a>
    </div>
    <header>
        <h3>Registro en mi DB</h3>
    </header>
    <div>
        <form action="enviarRegistro.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required placeholder="Ingresa tu Nombre"><br><br>

            <label for="carrera">Carrera:</label>
            <input type="text" name="carrera" required placeholder="Ingresa tu Carrera"><br><br>

            <label for="email">Correo:</label>
            <input type="text" name="email" required placeholder="Ingresa tu Correo"><br><br>

            <label for="no_cuenta">Número de Cuenta:</label>
            <input type="text" name="no_cuenta" required placeholder="Ingresa tu Número de Cuenta"><br><br>

            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" required placeholder="Ingresa tu Dirección"><br><br>

            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" required placeholder="Ingresa tu Teléfono"><br><br>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" required placeholder="Ingresa tu Contraseña"><br><br>

            <button type="submit">Enviar registro</button>
        </form>
    </div>
</body>
</html>
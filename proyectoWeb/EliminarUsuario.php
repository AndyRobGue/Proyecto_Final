<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
    
    <!-- Compiled and minified CSS de Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript de Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <style>
        /* Fondo rosa claro para toda la página */
        body {
            background-color: #fce4ec;
        }

        /* Estilos para la barra de navegación */
        .nav-wrapper {
            padding: 0 20px;
        }
        .navbar-buttons a {
            margin-left: 10px;
            height: 65px;
            line-height: 65px;
            color: black;
        }

        /* Espaciado superior para el contenido principal */
        .form-container {
            margin-top: 50px;
        }

        /* Botón de eliminar usuario */
        .btn-delete {
            background-color: #ec407a !important;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación rosa claro -->
    <nav class="purple lighten-5">
        <div class="nav-wrapper">
            <div class="navbar-buttons right">
                <a href="IniciarSesion.php" class="btn red">Salir</a>
                <a href="EliminarUsuario.php" class="btn purple lighten-5">Eliminar Usuario</a>
                <a href="inicio.php" class="btn purple lighten-5">Lista de Alumnos</a>
            </div>
        </div>
    </nav>

    <!-- Contenedor principal -->
    <div class="container form-container">
        <!-- Título centrado -->
        <h1 class="center-align">Eliminar Usuario</h1>

        <!-- Formulario para eliminar usuario -->
        <div class="row">
            <form class="col s12" method="POST" action="deleteUsuario.php">
                <div class="input-field">
                    <input id="no_cuenta" type="text" name="no_cuenta" required>
                    <label for="no_cuenta">Número de Cuenta</label>
                </div>
                <div class="center-align">
                    <button type="submit" class="btn btn-delete">Eliminar Usuario</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

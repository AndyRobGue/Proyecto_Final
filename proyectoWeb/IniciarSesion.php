<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <style>
        body {
            background-color: #fce4ec; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            margin: 0;
        }
        .container {
            text-align: center; 
        }
        input::placeholder {
            color: black; 
        }
    </style>

    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Bienvenido</h1>
        <form method="POST" action="loguear.php">
            <input type="text" name="no_cuenta" placeholder="Número de Cuenta" class="input-field" />
            <br />
            <input type="password" name="clave" placeholder="Contraseña" class="input-field" />
            <br />
            <button type="submit" class="btn pink lighten-2">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAC Movie</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body class="contenedor fondo"> 
    <header class="header">
        <nav class="navegacion">
            <a class="animate__animated animate__bounce">
                <i class="fas fa-film" aria-hidden="true"></i>
                <img class="logo" src="cinema.png">
                <span>CAC-MOVIES</span>
            </a>
            <ul class="listaNav">
                <li class="listaItem"><a class="linkNav" href="index.html">Tendencias</a></li>
                <li class="listaItem"><a class="linkNav" href="registro.php">Registrarse</a></li>
                <li class="listaItem"><a class="linkNav iniciarSesion" href="iniciodesesion.html">Iniciar Sesión</a></li>
                <li class="listaItem"><a class="linkNav api" href="api.html">API</a></li>
            </ul>
        </nav>
    </header>
    <form class="formulario" action="login.php" method="POST">
        <div class="campo">
            <label for="nombre" class="form-label"></label>
            <input type="text" class="input" name="nombre" required placeholder="Tu Nombre">
        </div>
        <div class="campo">
            <input type="text" class="input" name="apellido" required placeholder="Tu Apellido">
        </div>
        <div class="campo">
            <input type="email" class="input" id="correo" name="correo" required placeholder="Tu Correo">
        </div>
        <div class="campo">
            <input type="password" class="input" name="password" required placeholder="Contraseña">
        </div>
        <div class="campo">
            <select class="input" id="pais" name="pais">
                <option class="input" selected disabled>-Seleccione País-</option>
                <option class="input" value="arg">Argentina</option>
                <option value="bra">Brasil</option>
                <option value="uru">Uruguay</option>
                <option value="par">Paraguay</option>
                <option value="españa">España</option>
            </select>
        </div>
        <button type="submit" class="boton" name="guardar">Registrarse</button>
    </form>
</body>
</html>

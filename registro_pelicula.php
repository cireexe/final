<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro de Películas</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>

<div id="formContainer">
    <form id="movieForm" action="cargar_pelicula.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="director">Director:</label><br>
        <input type="text" id="director" name="director" required><br><br>
        
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" maxlength="500" required></textarea><br><br>
        
        <label for="genero">Género:</label><br>
        <select id="genero" name="genero" required>
            <option value="accion">Acción</option>
            <option value="aventura">Aventura</option>
            <option value="comedia">Comedia</option>
            <option value="drama">Drama</option>
            <option value="cienciaFicción">Ciencia Ficción</option>
            <!-- Agrega más opciones de género según sea necesario -->
        </select><br><br>
        
        <label for="anio">Año de Estreno:</label><br>
        <input type="number" id="anio" name="anio" required><br><br>
        
        <label for="resena">Reseña:</label><br>
        <textarea id="resena" name="resena" rows="4" maxlength="500"></textarea><br><br>
        
        <input type="submit" value="Registrar">
    </form>
</div>

</body>
</html>

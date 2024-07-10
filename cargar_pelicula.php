<?php
$servername = "localhost";  // Cambia si tu servidor es diferente
$username = "root";         // Cambia si tu usuario es diferente
$password = "";             // Cambia si tu contraseña es diferente
$dbname = "cac_movies";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $director = $_POST['director'];
    $descripcion = $_POST['descripcion'];
    $genero = $_POST['genero'];
    $anio = $_POST['anio'];
    $resena = $_POST['resena'];

    $sql = "INSERT INTO peliculas (nombre, director, descripcion, genero, anio, resena) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssds", $nombre, $director, $descripcion, $genero, $anio, $resena);

    if ($stmt->execute()) {
        echo "Registro de película exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>

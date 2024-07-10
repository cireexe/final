<?php
$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "cac_movies";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $pais = $_POST['pais'];

    $sql = "INSERT INTO usuarios (nombre, apellido, correo, password, pais) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nombre, $apellido, $correo, $password, $pais);

    if ($stmt->execute()) {
        header("Location: registro_pelicula.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>

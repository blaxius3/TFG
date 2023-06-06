<?php

$servername = "localhost";
$username = "root";
$password = "Abcd1234.";
$dbname = "cybersafe";


$nombre = $_POST['nombre'];
$recomendacion = $_POST['recomendacion'];


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}


$sql = "INSERT INTO recomendaciones (nombre, recomendacion) VALUES ('$nombre', '$recomendacion')";


if ($conn->query($sql) === TRUE) {
    echo "Recomendaciones enviadas con éxito";
} else {
    echo "Error al enviar las recomendaciones: " . $conn->error;
}


$conn->close();
?>

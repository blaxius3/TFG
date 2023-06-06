<?php
$servername = "localhost";
$username = "root";
$password = "Abcd1234.";
$dbname = "cybersafe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

$planSeleccionado = $_POST['planSeleccionado'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$sql = "INSERT INTO suscriptores (planSeleccionado, usuario, contrasena) VALUES ('$planSeleccionado', '$usuario', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "Datos guardados exitosamente";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();
?>

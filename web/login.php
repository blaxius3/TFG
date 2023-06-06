<!DOCTYPE html>
<html>
<head>
  <title>Panel de administración</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f1f1f1;
    }
    
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 40px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
  
    h1 {
      text-align: center;
      color: #333;
    }
  
    h2 {
      margin-top: 20px;
      color: #333;
    }
  
    p {
      margin-bottom: 10px;
    }
    
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }
    
    .button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "Abcd1234.";
    $dbname = "cybersafe";


    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }


    $sql = "SELECT * FROM admins WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {

        echo "<h1>Bienvenido, $usuario</h1>";


        $sqlUsers = "SELECT planSeleccionado, COUNT(*) as total FROM suscriptores GROUP BY planSeleccionado";
        $resultUsers = $conn->query($sqlUsers);


        if ($resultUsers->num_rows > 0) {
            echo "<h2>Suscriptores registrados por plan:</h2>";
            while ($row = $resultUsers->fetch_assoc()) {
                $planSeleccionado = $row['planSeleccionado'];
                $totalSuscriptores = $row['total'];
                echo "<p>Plan $planSeleccionado: $totalSuscriptores suscriptores</p>";
            }
        } else {
            echo "<p>No hay suscriptores registrados.</p>";
        }
    } else {

        echo "<h1>Error de inicio de sesión</h1>";
        echo "<p>Las credenciales proporcionadas son incorrectas.</p>";
    }


    $conn->close();
    ?>
    
    <div style="text-align: center;">
      <a class="button" href="index.php">Volver al inicio</a>
    </div>
  </div>
</body>
</html>

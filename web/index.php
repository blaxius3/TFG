<!DOCTYPE html>
<html>
<head>
  <title>Planes de suscripción</title>
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
      text-align: center;
    }
  
    h1 {
      text-align: center;
      color: #333;
    }
  
    .plan {
      display: inline-block;
      width: 100%;
      max-width: 300px;
      padding: 20px;
      margin: 20px auto;
      text-align: center;
      background-color: #f9f9f9;
      border: 1px solid #ccc;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    
    .plan:hover {
      background-color: #ebebeb;
    }
  
    #formulario {
      display: none;
      text-align: center;
      margin-top: 40px;
    }
  
    input[type="text"],
    input[type="password"],
    input[type="submit"] {
      margin: 10px;
      padding: 10px;
      width: 100%;
      max-width: 300px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
    
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .menu {
      background-color: #333;
      padding: 10px;
    }

    .menu ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    .menu li {
      float: left;
    }

    .menu li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .menu li a:hover {
      background-color: #111;
    }
  </style>
</head>
<body>
  <div class="menu">
    <ul>
      <li><a href="sobrenosotros.html">Sobre nosotros</a></li>
      <li><a href="recomendaciones.html">Recomendaciones a la empresa</a></li>
    </ul>
  </div>
    <div class="container">
    <h1>Iniciar sesión</h1>
  
    <form method="post" action="login.php">
      <input type="text" name="usuario" placeholder="Usuario" required><br>
      <input type="password" name="contrasena" placeholder="Contraseña" required><br>
      <input type="submit" value="Iniciar sesión">
    </form>
  </div>

  <div class="container">
    <h1>Elige un plan de suscripción</h1>
  
    <div class="plan" onclick="mostrarFormulario(1)">
      <h2>Plan Básico</h2>
      <p>Precio: 10€/mes</p>
	  <p>Almacenamiento: 50GB</p>
    </div>
  
    <div class="plan" onclick="mostrarFormulario(2)">
      <h2>Plan Estándar</h2>
      <p>Precio: 20€/mes</p>
	  <p>Almacenamiento: 100GB</p>
    </div>
  
    <div class="plan" onclick="mostrarFormulario(3)">
      <h2>Plan Premium</h2>
      <p>Precio: 30€/mes</p>
	  <p>Almacenamiento: 200GB</p>
    </div>
  
    <div id="formulario">
      <h2>Introduce tus datos</h2>
      <form method="post" action="guardar.php">
        <input type="hidden" id="planSeleccionado" name="planSeleccionado" value="">
        <input type="text" name="usuario" placeholder="Usuario" required><br>
        <input type="password" name="contrasena" placeholder="Contraseña" required><br>
        <input type="submit" value="Enviar">
      </form>
    </div>
    
  </div>

  <script>
    function mostrarFormulario(plan) {
      var formulario = document.getElementById("formulario");
      formulario.style.display = "block";
      document.getElementById("planSeleccionado").value = plan;
    }
  </script>
</body>
</html>
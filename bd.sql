CREATE DATABASE cybersafe;
USE cybersafe;

CREATE TABLE suscriptores (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  planSeleccionado INT(1) NOT NULL,
  usuario VARCHAR(50) NOT NULL,
  contrasena VARCHAR(50) NOT NULL
);

CREATE TABLE recomendaciones (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  recomendacion TEXT NOT NULL
);

CREATE TABLE admins (
  id INT AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(50) NOT NULL,
  contrasena VARCHAR(50) NOT NULL
);

INSERT INTO admins (usuario, contrasena) VALUES ('admin1', 'contrasena1');
INSERT INTO admins (usuario, contrasena) VALUES ('admin2', 'contrasena2');

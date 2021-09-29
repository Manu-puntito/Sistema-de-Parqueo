<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=bdsisparqueo", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Error de conexión a la Base de Datos: " . $e->getMessage();
}

$URL = "http://localhost/www.sisparqueo.com";

?>
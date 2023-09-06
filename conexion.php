<?php
  // Credenciales
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "ejemplo_html";

  try {
    $conn = new PDO("mysql:host=$servername;port=33061;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>
<?php
$servername = "192.168.86.31";
$username = "emil";
$password = "cep2";

$dbname = "cep2";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->close();
?>
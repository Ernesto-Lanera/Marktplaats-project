<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "marktplaats_local";


// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// echo $servername, $username, $password, $database;

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
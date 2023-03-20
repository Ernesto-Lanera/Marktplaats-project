<?php
$servername = "20.224.252.175";
$username = "marktplaats4b";
$password = "password";
$database = "marktplaats";


// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
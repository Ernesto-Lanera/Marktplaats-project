<?php
$servername = "20.160.126.8";
$username = "marktplaats4";
$password = "marktplaats4@";
$database = "marktplaats";


// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// echo $servername, $username, $password, $database;

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

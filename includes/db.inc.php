<?php
$servername = "localhost";
$dbUsername = "root";
$password = "";
$dbname = "marktplaats";

// create connection
$conn = new mysqli($servername, $dbUsername, $password, $dbname);

// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
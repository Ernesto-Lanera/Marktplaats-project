-<?php
// Database configuration
$servername = "20.224.252.175";
$username = "marktplaats4b";
$password = "password";
$database = "marktplaats";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
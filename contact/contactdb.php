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
use LDAP\Result;
extract($_POST);
$sql = "INSERT INTO `contact-data`(`name`,`email`, `message`) VALUES ('".$name."','".$email."','".$message."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo '<p>Bedankt voor het invullen klik   <a href="contact.php">hier</a> om terug te gaan</p>';
$mysqli->close();
?>
<?php 
$servername = "20.224.252.175";
$username = "marktplaats4b";
$password = "password";
$database = "marktplaats";
$current_ID = $GLOBALS['article_ID'];

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// echo $servername, $username, $password, $database;

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE articles SET current_Bidding = $post_bidding WHERE article_ID = $current_ID ";

echo "Uw bod is geplaatst";
?>
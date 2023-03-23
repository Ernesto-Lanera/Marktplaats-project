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

$sql = "SELECT * FROM `articles`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $article_Name = $row["article_Name"];
    $article_Images = $row["article_Images"];
    $article_Description = $row["article_Description"];
    $verzending = $row["ophalen_Verzenden"];
    $articleCreationDate = $row["articleCreationDate"];
    $article_ID = $row["article_ID"];
    $article_Price = $row["article_Price"];
    global $verzending;
  }
} else {
  echo "0 results";
}

?>
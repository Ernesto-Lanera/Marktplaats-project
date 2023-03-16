<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "styles";


// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `styles`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $fonts = $row["fonts"];
    global $fonts;
  }
} else {
  echo "0 results";
}
?>
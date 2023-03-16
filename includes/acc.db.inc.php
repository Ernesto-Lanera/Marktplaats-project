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

$sql = "SELECT * FROM `accounts`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $user_ID = $row["user_ID"];
    $user_name = $row["user_name"];
    $email = $row["email"];
    $telephone = $row["telephone"];
    $postal_Code = $row["postal_Code"];
    $active_Since = $row["active_Since"];
    $user_Location = $row["user_Location"];
  }
} else {
  echo "0 results";
}

?>
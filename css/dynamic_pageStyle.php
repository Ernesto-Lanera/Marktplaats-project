<?php

header("Content-type: text/css; charset: UTF-8");

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
    $article_Images = $row["article_Images"];
}
}

?>

body {
    margin: 0; 
    padding: 0;
    background-color:white;
}

:root {
    --primary: #D2B88E;
    --secondairy: #F2DCC2;
    --primary_accent: #D1CCAF;
    --secondairy_accent:#DFD7B2;
    --hard: #6C786B;
  }

.row_container {
    display: flex;
    flex-direction: row;
    align-content: center;
    justify-content: center;
    align-items: center;
    position: relative;
    gap: 15px;
    margin-top: 15px;
}

.content_row {
    background-color: var(--primary);
    width: 40%;
    height: 500px;
    display: flex;
    position: relative;
    flex-direction: column;
    padding: 15px;
}

.data_row {
    background-color: var(--primary);
    width: 20%;
    display: flex;
    height: 500px;
    position: relative;
    padding: 15px;
}

.article_images img{
    height: 180px;
    width: 320px;
    background-size: cover;
    background-position: center;
}

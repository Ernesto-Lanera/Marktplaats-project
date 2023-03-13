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

$sql = "SELECT * FROM `articles`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $article_Name = $row["article_Name"];
    $article_Images = $row["article_Images"];
    $article_Description = $row["article_Description"];
    $verzending = $row["ophalen_Verzenden"];
    global $verzending;
  }
} else {
  echo "0 results";
}


function verzenden(){
  if ($GLOBALS['verzending'] == "3"){
    echo "Ophalen of Verzenden";
  }   if ($GLOBALS['verzending'] == "2"){
    echo "Alleen Ophalen";
  }   if ($GLOBALS['verzending'] == "1") {
    echo "Alleen verzenden";
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dynamic_pageStyle.php">
    <title><?php $SITE_TITLE ?></title>
</head>
<body>
<div class="row_container">
    <div class="back_button"></div>
    <div class="content_row">
    <div class="article_name"><?php echo $article_Name ?></div><br>
    <div class="article_images"><?php echo '<img src="data:image/jpeg;base64,'. base64_encode($article_Images) .'" />';
 ?></div><br>
    <div class="shipping_cost"><?php echo $article_Description ?></div><br>
    <div class="shipping_way"><?php verzenden() ?></div><br>
    <div class="article_creation_date">$article_creation_date</div><br>
    <div class="watch_counter"></div><br>
    <div class="total_saved_article"></div><br>
    <div class="article_description"></div><br>
    <div class="article_id"></div>
    </div>

    <div class="data_row">
        <div class="user_data">
            <div class="user_name">user_name</div>
            <div class="active_since">active_since</div>
            <div class="stars">stars</div>
            <div class="user_location">user_location</div>
        </div>
    </div>
    </div>
</body>
</html> 

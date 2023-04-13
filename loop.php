<!DOCTYPE html>
<html>

<head>
<?php
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "marktplaats";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";}?>
	<meta charset="utf-8">
	<title>Inloggen</title>
	<link href="login.css" rel="stylesheet" type="text/css">
    <?php
    include './includes/article.db.inc.php';
    ?>
</head>

<body>
    <?php 
    $sql = " SELECT * FROM articles";
    $result = $conn->query($sql);
    while($rows=$result->fetch_assoc())?>
                    {
                    <!-- FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN -->
                    <td><?php echo $rows['article_Price'];?></td>
                    <td><?php echo $rows['article_Price'];?></td>
                    <td><?php echo $rows['article_Name'];?></td>
                    <td><?php echo $rows['article_Name'];?></td>
    }
 
</html>
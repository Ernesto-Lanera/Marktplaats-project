<?php
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME","marktplaats");
$mysqli = new mysqli(DB_HOST,DB_USER, DB_PASSWORD,DB_NAME);
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
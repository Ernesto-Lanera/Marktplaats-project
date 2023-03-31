<?php
include './includes/db.inc.php';
include './includes/functions.inc.php';
?>

<?php
if (isset($_POST["submit"])) {
  $article_Name = $_POST["article_Name"];
  $article_Description = $_POST["article_Description"];
  $article_Price = $_POST["article_Price"];
  $ophalen_verzenden = $_POST["ophalen_Verzenden"];


  $sql = "INSERT INTO articles (article_Name, article_Description, article_Price, ophalen_verzenden) VALUES ('$article_Name', '$article_Description', '$article_Price', '$ophalen_verzenden')";

  //echo $sql;
  $result = $conn->query($sql);
}

?>
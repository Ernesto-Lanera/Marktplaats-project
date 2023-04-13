<?php
include 'db.inc.php';
include 'functions.inc.php';

?>

<?php
// Deze include post alle informatie van het formulier in paginas/postproduct.php in de database.
if (isset($_POST["submit"])) {
  $article_Name = $_POST["article_Name"];
  $article_Description = $_POST["article_Description"];
  $article_Price = $_POST["article_Price"];
  $ophalen_verzenden = $_POST["ophalen_Verzenden"];
  $image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));


  $sql = "INSERT INTO articles (article_Name, article_Description, article_Price, ophalen_verzenden, article_Images) VALUES ('$article_Name', '$article_Description', '$article_Price', '$ophalen_verzenden', '$image')";

  $result = $conn->query($sql);


}
// Redirect naar homepage
header("Location: ../home.php");	
?>

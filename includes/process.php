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
  $image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));


  $sql = "INSERT INTO articles (article_Name, article_Description, article_Price, ophalen_verzenden, article_Images) VALUES ('$article_Name', '$article_Description', '$article_Price', '$ophalen_verzenden', '$image')";

  //echo $sql;
  $result = $conn->query($sql);


}

?>
<?php 
include 'includes/db.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body onload="display()">

<script type="text/javascript">
    
    function display() {
        console.log("Ping");
        var element = document.getElementById('submit2');
        element.dispatchEvent(new Event('submit2', {bubbles:true}));
        console.log("Pong");
    }

</script>
<?php
/*
if(isset($_POST["submit1"])){

$image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
$sql = "INSERT INTO articles (article_Images) VALUES ('$image')";
$conn->query($sql);

}

if(isset($_POST["submit2"])){
    $res = $conn->query('select * from articles');
    echo "<table>";
    echo "<tr>";

    while($row=mysqli_fetch_array($res)){
        echo "<td>";
        echo $row["ID"];
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['article_Images'] ).'" height="100" width="100"/>';
        echo "<br>";
        ?><a href="delete.php?id=<?php echo $row["ID"]; ?>">Delete</a><?php
        echo "</td>";
    }
    
}
*/
?>

    </body>
</html>
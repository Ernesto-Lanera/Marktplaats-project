
<?php
  include './includes/db.inc.php';
  include './includes/functions.inc.php';
  ?>

<?php
if (isset($_POST["submit"])) {
    $prod_Title = $_POST["prod_Title"];
    $prod_Description = $_POST["prod_Description"];
    echo $prod_Title;
    echo $prod_Description;

 $sql = "INSERT INTO postproduct (prod_ID, prod_Title, prod_Description) VALUES (null, '$prod_Title', '$prod_Description',)";

//echo $sql;
 $result = $conn->query($sql);
}
//header("Location: postproduct.php");


     //   $stmt = $conn->prepare("INSERT INTO postproduct (prod_ID, prod_Title, prod_Description) VALUES (null, ?, ?)");

//            if (isset($_POST["submit"])) {
  //            $prod_Title = $_POST["prod_Title"];
    //          $prod_Description = $_POST["prod_Description"];
      //        echo $prod_Title;
        //      echo $prod_Description;

//              $stmt->bind_param('ss', $prod_Title, $prod_Description);
  //            createProduct($conn, $prod_Title, $prod_Description);
    //          $stmt->execute();




         //    header("Location: postproduct.php");
            
           //  if (isset($_GET["error"])) { 
             //  if ($_GET["error"] == "emptyinput") {
             //    echo "<p class='errormassage'>Vul alle velden in</p>";
            //   } else if ($_GET["error"] == "stmtfailed") {
            //     echo "<p class='errormassage'>Error</p>";
            //   } else if ($_GET["error"] == "none") {
            //     echo "<p>Uw product is geplaatst</p>";
            //   }
            // }
       // }

            ?>
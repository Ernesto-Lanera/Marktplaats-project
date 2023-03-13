<?php
  include './includes/db.inc.php';
  include './includes/functions.inc.php';
  ?>
  <form action="postproduct.php" method="POST"><br>
            <input type="text" name="prod_Title" placeholder="prod_Title van uw post" required><br>
            <textarea name="description" placeholder="Product beschrijving" required></textarea><br>
            <button type="submit" name="submit">Verzenden</button>
            <?php
            $stmt = $conn->prepare("INSERT INTO product (ID, prod_Title, description) VALUES (null, ?, ?, ?)");

            if (isset($_POST["submit"])) {
              $prod_Title = $_POST["prod_Title"];
              $description = $_POST["description"];

              $stmt->bind_param("sss", $prod_Title, $description);

              if (emptyInputProduct( $prod_Title, $description) !== false) {
                header("location: postproduct.php?error=emptyinput");
                exit();
              }

              createProduct($conn, $prod_Title, $description);

              $stmt->execute();
              header("Location: postproduct.php");
            }
            if (isset($_GET["error"])) {
              if ($_GET["error"] == "emptyinput") {
                echo "<p class='errormassage'>Vul alle velden in</p>";
              } else if ($_GET["error"] == "stmtfailed") {
                echo "<p class='errormassage'>Error</p>";
              } else if ($_GET["error"] == "none") {
                echo "<p>Uw product is geplaatst</p>";
              }
            }
            ?>
          </form>
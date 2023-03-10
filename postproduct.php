<?php
  include './includes/db.inc.php';
  include './includes/functions.inc.php';
  ?>
  <form action="postproduct.php" method="POST"><br>
            <input type="text" name="title" placeholder="title van uw post" required><br>
            <textarea name="description" placeholder="Product beschrijving" required></textarea><br>
            <button type="submit" name="submit">Verzenden</button>
            <?php
            $stmt = $conn->prepare("INSERT INTO product (ID, title, description) VALUES (null, ?, ?, ?)");

            if (isset($_POST["submit"])) {
              $title = $_POST["title"];
              $description = $_POST["description"];

              $stmt->bind_param("sss", $title, $description);

              if (emptyInputProduct( $title, $description) !== false) {
                header("location: postproduct.php?error=emptyinput");
                exit();
              }

              createProduct($conn, $title, $description);

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
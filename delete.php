<?php
// delete functie van images in postproduct.php
include 'includes/db.inc.php';

$ID = $_GET["id"];
$del = "DELETE FROM table1 WHERE ID=$ID";
$conn->query($del);
?>

<script type="text/javascript">
    window.location ="index.php";
</script>
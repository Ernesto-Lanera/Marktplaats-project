<?php 
include './includes/article.db.inc.php';
function update_bidding(){
  if (isset($_POST["submit"])) {
    $post_bidding = $_POST['post_bidding'];
  if ($post_bidding  >= $GLOBALS['current_bidding']){
    $current_ID = $GLOBALS['article_ID'];
    $post_bidding = $_POST['post_bidding'];
    $sql = "UPDATE articles SET current_Bidding = $post_bidding WHERE article_ID = $current_ID ";
    $conn = mysqli_connect("20.224.252.175", "marktplaats4b", "password", "marktplaats");
    mysqli_query($conn, $sql); 
    ?>
    <script>
      alert('🎉 Uw bod is geaccepteerd 🎉');
    </script>
    <?php
  } else {
    echo "Uw bod moet minimaal boven de €" . $GLOBALS['current_bidding'] . " euro zijn.";
}
  }
}
update_bidding();
?>

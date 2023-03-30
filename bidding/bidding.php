<?php 
function update_bidding(){
  if (isset($_POST["submit"])) {
    $post_bidding = $_POST['post_bidding'];
  if ($post_bidding  >= $GLOBALS['current_bidding']){
    include_once './bidding/post_bid.php';
  } else {
    echo "Hij is kleiner";
}
  }
}
update_bidding();
?>

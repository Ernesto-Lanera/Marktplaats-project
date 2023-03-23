<?php
require "bidding.php";
$iid = 1;
$uid = 999;
 
if (isset($_POST["bid"])) {
  $ok = $_BID->setBid($iid, $uid, $_POST["bid"]);
  echo "<div class='note'>". ($ok ? "Bieding opgeslagen" : $_BID->error) ."</div>";
}
$item = $_BID->getItem($iid); ?>
<form method="post" class="bidWrap">
  <img class="bidImg" src="<?=$item["item_img"]?>">
  <div class="bidName"><?=$item["item_name"]?></div>
  <div class="bidHigh">hoogste Bieding $<?=sprintf("%0.2f", $item["highest"])?></div>
  <div class="bidDesc"><?=$item["item_desc"]?></div>
 
  <div class="bidAmt">
    <input type="number" name="bid" min="<?=$item["min"]?>" step="<?=$item["bid_min"]?>" value="<?=$item["min"]?>">
    <input type="submit" value="Bied!">
  </div>
</form>
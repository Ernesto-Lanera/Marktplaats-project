<?php 

include './includes/article.db.inc.php';
include './includes/acc.db.inc.php';
include './includes/style.db.inc.php';

function verzenden(){ //checks if the checkbox is set to 1, 2 or 3. Then shows what shipping mehtod user chose.
  if ($GLOBALS['verzending'] == "3"){
    echo "Ophalen of Verzenden";
  }   if ($GLOBALS['verzending'] == "2"){
    echo "Alleen Ophalen";
  }   if ($GLOBALS['verzending'] == "1") {
    echo "Alleen verzenden";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dynamic_pageStyle.php">
    <title><?php echo $article_Name ?></title>
    <?php echo $fonts ?>
</head>
<body>
<div class="row_container">
    <div class="back_button"></div>
    <div class="content_row">
    <div class="name_container">
      <div class="article_name"><?php echo $article_Name ?></div><br>
      <div class="save_article">Bewaar</div>
    </div>
    <div class="creation_container">
    <div class="watch_counter"><i class="fa-sharp grey fa-regular fa-eye"></i>  40</div><br>
    <div class="total_saved_article"><i class="fa-sharp grey fa-regular fa-heart"></i>  10</div><br>
    <div class="article_creation_date"><i class="fa-sharp grey fa-regular fa-clock"></i>  <?php echo $articleCreationDate ?></div><br>
    </div>
    <div class="imageprice_container">
      <div class="article_images"><?php echo '<img src="data:image/jpeg;base64,'. base64_encode($article_Images) .'" />';
        ?></div><br>
      <div class="price_container">
        <div class="article_price">€ <?php echo $article_Price ?></div>
        <div class="shipping_way"><?php verzenden()?> <br> DUMMY $9,95</div>
      </div>
    </div>
    <div class="share_article">Deel dit artikel met al je maten!</div>
    <div class="article_description"><?php echo $article_Description ?></div><br>
    <div class="article_id">Artikel nummer: <?php echo $article_ID ?></div>
    </div>
    
    <div class="data_row">
        <div class="user_data">
          <div class="data user_name_container">
              <div class="user_name"><?php echo $user_name?></div>
              <div class="user_active_since"><?php echo "Gebruiker is actief vanaf: " . $active_Since?></div>
              <div class="see_more">Bekijk meer advertenties</div>
            </div>
            <div class="data contact_container">
              <div class="user_location"><i class="fa-sharp blue fa-solid fa-location-crosshairs"></i>  <?php echo $user_Location?></div>
              <div class="user_telephone"><?php echo $telephone ?></div>
            </div>
        <div class="data button_container">
          <div class="bericht_button"><i class="fa-sharp ico_button fa-regular fa-comments"></i>bericht </div>
          <div class="website_button"><i class="fa-sharp ico_button fa-solid fa-earth-europe"></i> website </div>
        </div>
          </div>
    </div>
    </div>

</body>
</html> 

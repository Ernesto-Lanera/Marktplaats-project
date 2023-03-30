<?php 

include './includes/article.db.inc.php';
include './includes/acc.db.inc.php';
include './bidding/bidding.php';


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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title><?php echo $article_Name ?></title>
    <?php include './includes/style.db.inc.php'; ?>
    <style>html, body { background-color: #F7F7F6; }</style>
</head>
<body>
<?php include './includes/navbar.php' ?>
<div class="directory">Hier komen de navigatie</div>
<div class="row_container">
    <div class="content_row">
    <div class="name_container">
      <div class="article_name"><?php echo $article_Name ?></div>
      <div class="save_article"><i class="fa-sharp ico-heart fa-solid fa-heart-circle-plus"></i> Bewaar</div>
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
        <div class="article_price">€ <?php echo $article_Price; ?></div>
        <div class="shipping_way"><?php verzenden()?> <br> DUMMY $9,95</div>
      </div>
    </div>
    <div class="share_article"><div class="share_header">Deel via:</div>
    <div class="share_ico"><img src="./Image/icons/whatsapp.png" alt="Deel met whatsapp"></div>
    <div class="share_ico"><img src="./Image/icons/facebook.png" alt="Deel met facebook"></div>
    <div class="share_ico"><img src="./Image/icons/twitter.png" alt="Deel met twitter"></div>  
    <div class="share_ico"><img src="./Image/icons/email.png" alt="Deel met email"></div>
  </div>
    <div class="article_description"><div class="bold">Beschrijving:</div><br><?php echo $article_Description ?></div><br>
    <div class="article_id">Advertentienummer: <?php echo $article_ID ?></div>
    </div>
    
    <div class="data_row">
        <div class="user_data">
          <div class="follow_user"><i class="fa-sharp blue fa-solid fa-user-plus"></i></div>
          <div class="data user_name_container">
              <div class="user_name"><?php echo $user_name?></div>
              <div class="user_active_since"><?php echo "Gebruiker is actief vanaf: " . $active_Since?></div>
              <div class="see_more">Bekijk meer advertenties</div>
            </div>
            <div class="data contact_container">
              <div class="user_location"><i class="fa-sharp ico_location fa-solid fa-location-crosshairs"></i>  <?php echo $user_Location?></div>
              <div class="user_telephone"><i class="fa-solid ico_location fa-phone"></i><?php echo $telephone ?></div>
            </div>
        <div class="data button_container">
          <div class="bericht_button"><i class="fa-sharp ico_button fa-regular fa-comments"></i>bericht </div>
          <div class="website_button"><i class="fa-sharp ico_button fa-solid fa-earth-europe"></i> website </div>
          <form action="dynamic_page.php" method="POST">
            <input type="text" name="post_bidding" placeholder="Hier uw bod" required><br>
            <button type="submit" name="submit">Bieding plaatsen</button>
          </form>
          <div class="current_Bidding"><?php echo $current_bidding ?></div>
        </div>
          </div>

    </div>
    </div>
    <?php include './includes/footer.php'; ?>
</body>
</html> 

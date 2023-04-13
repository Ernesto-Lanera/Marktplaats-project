
<link rel="stylesheet" href="../css/navbar.css">
<div class="navbar">
  <div class="orange_bar"></div>

  <div class="top_bar">
    <div class="user_info">
      <div class="logo"></div>
      <a href="">Help en info</a>
      <a href="">Voorwaarden</a>
      <a href="">Veiligheidscentrum</a>
    </div>

    <div class="user_navigation">
      <a href=""><i class="fa-regular nav_icon fa-comments"></i>Berichten</a>
      <a href=""><i class="fa-regular nav_icon fa-bell"></i>Meldingen</a><?php
      if (isset($_SESSION['login']) )  {
                 echo " <a role='button'  href='../login/logout.php'><i class='fa-regular nav_icon fa-user'></i>uitloggen</a> ";
              } else {
                 echo " <a role='button'  href='../login/login.php'><i class='fa-regular nav_icon fa-user'></i>Inloggen</a> ";
              }
           ?>
        </div>
      <div class="publish_article"><i class="fa-solid nav_icon_white fa-thumbtack"></i>Plaats advertentie</div>
    </div>
  </div>
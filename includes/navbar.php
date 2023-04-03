<?php include 'style.db.inc.php'; ?>
<link rel="stylesheet" href="./css/navbar.css">
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
      <a href=""><i class="fa-regular nav_icon fa-bell"></i>Meldingen</a>
      <a href="../marktplaats-project/login/login.php"><i class="fa-regular nav_icon fa-user"></i>Inloggen</a>
      <div class="publish_article"><i class="fa-solid nav_icon_white fa-thumbtack"></i>Plaats advertentie</div>
    </div>
  </div>
  <div class="filter_bar">
    <input type="search" placeholder="">
    <select name="categoryId" id="categorie">
    <option value="" disabled="">Kies categorie:</option>
      <option selected="" value="0">Alle categorieën…</option>
      <option value="1">Action</option>
      <option value="2">Sports</option>
      <option value="3">MMORPG</option>
      <option value="4">Fighting</option>
      <option value="5">Action-adventure</option>
      <option value="6">Simulation</option>
      <option value="7">Puzzels</option>
      <option value="8">Strategy</option>
      <option value="9">Platformers</option>
      <option value="10">Other</option>
    </select>
    <input type="text" placeholder="Postcode">
    <select id="afstand" name="afstand">
      <option value="10KM">10KM</option>
      <option value="15KM">15KM</option>
      <option value="20KM">20KM</option>
      <option value="20KM >">20KM ></option>
    </select>
    <button class="zoek_button" type="submit">zoek</button>
  </div>

  <div class="categories">
    <div class="categorie_main">Alle categorieën</div>
    <div class="categorie">Action</div>
    <div class="categorie">Sports</div>
    <div class="categorie">MMORPG</div>
    <div class="categorie">Fighting</div>
    <div class="categorie">Platformers</div>
    <div class="categorie">Action-adventure</div>
  </div>
</div>
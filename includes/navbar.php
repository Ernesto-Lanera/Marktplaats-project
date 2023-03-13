<!DOCTYPE html>
<html>

<style>
header {
  padding: 15px;
  text-align: center;
  background: #DEB887;
  color: white;
  font-size: 30px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #DEB887;
}

li {
    float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 12px 12px;
  text-decoration: none;
}

li a:hover {
  background-color: #AFEEEE;
}

form {
  font-size: 14px;
}

</style>

<header>

<ul>
<li><a class="active" href="Index.php">Homepagina</a></li>
  <li><a href="login/login.html">Inloggen</a></li>
  <li><a href="#">Chat</a></li>
</ul>

<form action="">                                                    <!--Ik heb hier hulp nodig-->
  <label for="fname">Zoeken:</label>
  <input type="text" id="fname" name="fname">

  <label for="fname">Categorie:</label>
  <input type="text" id="fname" name="fname">

  <label for="lname">Postcode:</label>
  <input type="text" id="lname" name="lname">

  <label for="lname">Afstand:</label>
  <input type="text" id="lname" name="lname">
  <input type="submit" value="Zoeken">
</form> 


</header>

</html>
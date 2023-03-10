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
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #AFEEEE;
}

</style>

<header>

<ul>
<li><a class="active" href="#">Thuispagina</a></li>
  <li><a href="#">Nieuw!</a></li>
  <li><a href="#">Aanbieding</a></li>
  <li><a href="#">Categorie</a></li>
</ul>

<form action="/action_page.php">                                                    <!--Ik heb hier hulp nodig-->
  <label for="fname">Zoeken:</label>
  <input type="text" id="fname" name="fname" value="Zoeken">
  
  <label for="lname">Postcode:</label>
  <input type="text" id="lname" name="lname" value="Postcode">

  <label for="lname">Afstand:</label>
  <input type="text" id="lname" name="lname" value="Afstand">
  <input type="submit" value="Submit">
</form> 


</header>

</html>
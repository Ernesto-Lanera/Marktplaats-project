<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Registreren</title>
	<link href="register.css" rel="stylesheet" type="text/css">
	<?php
  include("./nav.php");
  ?>
</head>

<body>
	
	<div class="register">
		<h1>Registreren</h1>
		<form action="register.php" method="post" autocomplete="off">
			<label for="user_name">
				<i class="user"></i>
			</label>
			<input type="text" name="user_name" placeholder="Gebruikersnaam" id="user_name" required>
			<label for="password">
				<i class="lock"></i>
			</label>
			<input type="password" name="password" placeholder="Wachtwoord" id="password" required>
			<label for="user_Email">
				<i class="envelope"></i>
			</label>
			<input type="user_Email" name="user_Email" placeholder="E-mail" id="user_Email" required>

			<label for="postalcode">
				<i class="postal_code"></i>
			</label><input id="postal_Code" name="postal_Code" placeholder="Postcode" type="text" pattern="^[1-9][0-9]{3} ?(?!sa|sd|ss|SA|SD|SS)([A-Z]{2}$|[a-z]{2}$)" required>
			<label for="user_Location">
				<i class="user_location"></i>
			</label>
			<input type="user_Location" name="user_Location" placeholder="Woonplaats" id="user_Location" required>
			<label for="telephone">
				<i class="telephone"></i>
			</label>
			<input type="telephone" name="telephone" placeholder="Telefoonnummer" id="telephone" pattern="[0-9]{2}[0-9]{4}[0-9]{4}" required>
			<input type="submit" value="Registreren">
		</form>
	</div>
	<div class="login"><a style="text-decoration: none;
    color: #6c786b;" href="../login/login.php"></i>Klik hier om in te loggen</a></div>
</body>
<?php
include("./footer.php");
?>
</html>
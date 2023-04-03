<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link href="register.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="register">
		<h1>Register</h1>
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
			</label><input id="postal_Code" name="postal_Code" placeholder="postcode" type="text" pattern="^[1-9][0-9]{3} ?(?!sa|sd|ss|SA|SD|SS)([A-Z]{2}$|[a-z]{2}$)">
			<label for="user_Location">
				<i class="user_location"></i>
			</label>
			<input type="user_Location" name="user_Location" placeholder="woonplaats" id="user_Location">
			<label for="telephone">
				<i class="telephone"></i>
			</label>
			<input type="telephone" name="telephone" placeholder="telefoon" id="telephone" pattern="[0-9]{2}[0-9]{4}[0-9]{4}">
			<input type="submit" value="Register">
		</form>
	</div>
	<div class="login"><a href="../login/login.php"></i>Klik hier om in te loggen</a></div>
</body>

</html>
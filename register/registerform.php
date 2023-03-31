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
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="user_name" placeholder="Gebruikersnaam" id="user_name" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Wachtwoord" id="password" required>
				<label for="user_Email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="user_Email" name="user_Email" placeholder="E-mail" id="user_Email" required>
				
                <label for="postalcode">
	            <i class="fas fa-postalcode"></i>
                </label>
                <input type="postal-Code" name="postal-Code" placeholder="postal-Code" id="postal-Code">
				<input type="submit" value="Register">
			</form>
		</div>
	</body>
</html>
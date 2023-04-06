<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Inloggen</title>
	<link href="login.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="login">
		<h1>Inloggen</h1>
		<?php if (isset($_GET['error'])) { ?>

			<p class="error"><?php echo $_GET['error']; ?></p>

		<?php } ?>
		<form action="authenticate.php" method="post">
			<label for="username">
				<i class="fas fa-user"></i>
			</label>
			<input type="text" name="username" placeholder="Gebruikersnaam" id="username" required>
			<label for="password">
				<i class="fas fa-lock"></i>
			</label>
			<input type="password" name="password" placeholder="Wachtwoord" id="password" required>
			<input type="submit" value="Inloggen">
		</form>
	</div>
	
	<div class="register"><a href="../register/registerform.php"></i>Klik hier om te registreren</a></div>
</body>

</html>
			
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="login.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="login">
		<h1>Login</h1>
		<?php if (isset($_GET['error'])) { ?>

			<p class="error"><?php echo $_GET['error']; ?></p>

		<?php } ?>
		<form action="authenticate.php" method="post">
			<label for="username">
				<i class="fas fa-user"></i>
			</label>
			<input type="text" name="username" placeholder="gebruikersnaam" id="username" required>
			<label for="password">
				<i class="fas fa-lock"></i>
			</label>
			<input type="password" name="password" placeholder="wachtwoord" id="password" required>
			
			<input type="submit" value="Login">
		</form>
	</div>
</body>

</html>
			
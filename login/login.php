<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Inloggen</title>
	<link href="login.css" rel="stylesheet" type="text/css">
	<?php
  include("../includes/navbar.php");
  ?>
</head>

<body>
	<div class="login">
		<h1>Inloggen</h1>
		<?php if (isset($_GET['error'])) { ?>

			<p class="error"><?php echo $_GET['error']; ?></p>

		<?php } ?>
		<form action="authenticate.php" method="post">
			<label for="user_name">
				<i class="user"></i>
			</label>
			<input type="text" name="user_name" placeholder="Gebruikersnaam" id="user_name" required>
			<label for="password">
				<i class="lock"></i>
			</label>
			<input type="password" name="password" placeholder="Wachtwoord" id="password" required>
			<input type="submit" value="Inloggen">
		</form>
	</div>
	
	<div class="register"><a href="../register/registerform.php">Klik hier om te registreren</a></div>
</body>
<?php
include("../footer.php");
?>
</html>
			
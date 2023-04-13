<?php
//connectie database info
$DATABASE_HOST = '20.224.252.175';
$DATABASE_USER = 'marktplaats4b';
$DATABASE_PASS = 'password';
$DATABASE_NAME = 'marktplaats';
// probeert connectie te maken met database
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {
	// als het fout gaat met de connectie naar de database
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// controleren of alles word opgestuurd
if (!isset($_POST['user_name'], $_POST['password'], $_POST['user_Email'], $_POST['postal_Code'], $_POST['user_Location'], $_POST['telephone'])) {
	// niet alles ingevuld
	exit('vul alles in aub!');
}
// kijken of niks leeg is
if (empty($_POST['user_name']) || empty($_POST['password']) || empty($_POST['user_Email'])|| empty($_POST['postal_Code'])|| empty($_POST['user_Location'])|| empty($_POST['telephone']) )   {
	// iets of meer is leeg
	exit('vul alles in aub');
}
// kijken of account al bestaat met die gebruikersnaam
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE user_name = ?')) {
	$stmt->bind_param('s', $_POST['user_name']);
	$stmt->execute();
	$stmt->store_result();
	// kijken of gebruikersnaam bestaat
	if ($stmt->num_rows > 0) {
		// gebruikersnaam bestaat
		echo 'gebruikersnaam bestaat al kies aub een nieuwe!';
	} else {
		// gebruikersnaam bestaat niet dus maak een nieuw account
if ($stmt = $con->prepare('INSERT INTO accounts (user_name, password, user_Email, telephone, postal_Code, user_Location) VALUES (?, ?, ?, ?, ?, ?)')) {
	$password = ($_POST['password']);
	if ($_POST['password'] === $password) {
		$stmt->bind_param('ssssss', $_POST['user_name'], $password, $_POST['user_Email'], $_POST['telephone'], $_POST['user_Location'], $_POST['postal_Code']);
	$stmt->execute();
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('succesvol geregistreerd');
    window.location.href='../login/login.php';
    </script>");
	}
} else {
	//er is iets fout in de database kijk of alle mappen bestaan
	echo 'Could not prepare statement!';
}
	}
	$stmt->close();
} else {
	echo 'Could not prepare statement!';
}
$con->close();
?>
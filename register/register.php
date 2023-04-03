<?php
// Change this to your connection info.
$DATABASE_HOST = '20.224.252.175';
$DATABASE_USER = 'marktplaats4b';
$DATABASE_PASS = 'root';
$DATABASE_NAME = 'marktplaats';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['user_name'], $_POST['password'], $_POST['user_Email'], $_POST['postal_Code'], $_POST['user_Location'], $_POST['telephone'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['user_name']) || empty($_POST['password']) || empty($_POST['user_Email'])|| empty($_POST['postal_Code'])|| empty($_POST['user_Location'])|| empty($_POST['telephone']) )   {
	// One or more values are empty.
	exit('Please complete the registration form');
}
// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE user_name = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['user_name']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Username exists, please choose another!';
	} else {
		// Username doesn't exists, insert new account
if ($stmt = $con->prepare('INSERT INTO accounts (user_name, password, user_Email, telephone, postal_Code, user_Location) VALUES (?, ?, ?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
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
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
	}
	$stmt->close();
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();
?>
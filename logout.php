<?php  ob_start();

session_start();

include("functions/db.php");

include("functions/functions.php");?>

<!DOCTYPE html>
<html>

<head>
    <title>Criminal Record Management System</title>
</head>

<body>
    <?php
if ($_SESSION['username'] == "test") {
	
	// remove all session variables
	session_unset();

	// destroy the session
		session_destroy();
		header("Location: login.php");
		exit("Logging Out .......");
		
} else {
$username = $_SESSION['username'];

$sql = "UPDATE login SET log_status = 'offline' WHERE username = '$username'";

$results = query($sql);

$results = confirm($results);

	// remove all session variables
		session_unset();

	// destroy the session
		session_destroy();
		header("Location: login.php");
		exit("Logging Out .......");
    }
		?>
</body>

</html>
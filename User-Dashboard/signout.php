<?php
	session_start();
	$_SESSION['login_admin'];
	session_destroy(); // Destroying All Sessions
	header("Location: ../Login-Register-Form/login.php"); // Redirecting To Home Page
?>
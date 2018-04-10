<?php
	session_start();
	
	
	include 'user.php';
	
	$user = new user();
	echo $_POST['username'];
	echo $_POST['password'];
	
	$user->authentication($_POST['username'], $_POST['password']);
	header("Location:\\view\index.html");
?>		
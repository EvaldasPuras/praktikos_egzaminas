<?php

	session_start();

	$typed_username = $_POST['username'];
	$typed_password = $_POST['password'];
	
	
	echo $typed_username;
	echo $typed_password;
	$hashed_password = md5($typed_password);

	include 'get_user_information_from_db.php';
	
	if(($typed_username == $fetched_username)   &&   ($hashed_password == $fetched_password))
	{
		$_SESSION["username"] = $fetched_username;
		$_SESSION["isAdmin"] = $fetched_role;
		
		header("location: ../views/view.php");
	}
?>
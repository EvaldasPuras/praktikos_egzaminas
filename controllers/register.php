<?php

	session_start();

	$typed_username = $_POST['username'];
	$typed_password = $_POST['password'];
	$repeated_password = $_POST['passwordR'];
	$admin_check = 0; //not admin by default
	
	if (isset($_POST['adminCheck'])) {

    $admin_check = 1;
	}
	
	echo $typed_username;
	echo "<br>";
	echo $typed_password;
	echo "<br>";
	echo $repeated_password;
	echo "<br>";
	echo $admin_check;
	echo "<br>";
	$hashed_password = md5($typed_password);

	
	
	
	include('open_db_connection.php');
	
	$sql_query = "SELECT `username` FROM `users` WHERE username = '" . $typed_username . "'"; //SQL query
	
	$result = mysqli_query($connection, $sql_query); //getting data from database and saving it into $result variable
	
	if ((mysqli_num_rows($result) > 0) == false) { //if result has more than one row of data
		
		
		$hashed_password = md5($typed_password);
		
		
		include('add_new_account_to_db.php');
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	}
	
	/*if($typed_password == $repeated_password)
	{
		
		include('search_for_user_in_db.php');
		
		
		if(!user_exists)
		$_SESSION["username"] = $fetched_username;
		$_SESSION["isAdmin"] = $fetched_role;*/
		
		header("location: ../views/view.php");
		exit();
?>
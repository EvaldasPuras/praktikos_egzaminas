<?php
include('open_db_connection.php'); //opening connection to database
//SQL query
	
	$sql_query = "INSERT INTO `users`(`username`, `password`, `isAdmin`) VALUES ('" . $typed_username . "','" . $hashed_password . "','" . $admin_check . "')";
	
	if (mysqli_query($connection, $sql_query)) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}



include('close_db_connection.php'); //closing connection to database


//header('Location:../views/view.php');
//exit();
?>
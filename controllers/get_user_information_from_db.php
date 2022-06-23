<?php
include('open_db_connection.php'); //opening connection to database
//---------------------------------------------------------------------------------------------------------------------------

	$sql_query = "SELECT username, password, isAdmin FROM `users` WHERE username = '" . $typed_username . "';";


	
	$fetched_username = "";
	$fetched_password = "";
	$fetched_password;
	
	$result = mysqli_query($connection, $sql_query); //getting data from database and saving it into $result variable
	
	if (mysqli_num_rows($result) > 0) { //if result has more than one row of data
		// output data of each row
		$row = mysqli_fetch_assoc($result);
		$fetched_username = $row["username"];
		$fetched_password = $row["password"];
		$fetched_role = $row["isAdmin"];
	} 	
	else {
		echo "0 results";
	}
	


//---------------------------------------------------------------------------------------------------------------------------
include('close_db_connection.php'); //closing connection to database
?>
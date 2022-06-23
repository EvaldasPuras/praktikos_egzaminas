<?php
include('open_db_connection.php'); //opening connection to database
//---------------------------------------------------------------------------------------------------------------------------

	$sql_query = "SELECT id FROM users WHERE username = '" . $user_to_search . "';";

	
	
	$fetched_id = "";
	
	$result = mysqli_query($connection, $sql_query); //getting data from database and saving it into $result variable
	
	if (mysqli_num_rows($result) == 1) { //if result has more than one row of data
		// output data of each row
		$row = mysqli_fetch_assoc($result);
		$fetched_id = $row["id"];
		
	} 	
	else {
		echo "0 results";
	}
	


//---------------------------------------------------------------------------------------------------------------------------
//include('close_db_connection.php'); //closing connection to database
?>
<?php
include('open_db_connection.php'); //opening connection to database
//SQL query
	$sql_query = "SELECT `username` FROM `users` WHERE username = '" . $typed_username . "'"; //SQL query
	
	echo $sql_query;
	
	/*$result = mysqli_query($connection, $sql_query); //getting data from database and saving it into $result variable
	
	if (mysqli_num_rows($result) > 0) { //if result has more than one row of data
		// output data of each row
		$user_exists = true;
		echo "exists<br>";
	}	*/

include('close_db_connection.php'); //closing connection to database*/
?>
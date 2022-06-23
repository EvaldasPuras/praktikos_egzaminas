<?php
include('open_db_connection.php'); //opening connection to database
echo "<br>";
//SQL query
	$sql_query = "SELECT `id`, `name`, `author_first_name`, `author_last_name`, `description`, `ISBN`, `picture`, `page_count`, `category` FROM `books`"; //SQL query
	
	$result = mysqli_query($connection, $sql_query); //getting data from database and saving it into $result variable
	
	/*if (mysqli_num_rows($result) > 0) { //if result has more than one row of data
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "name: " . $row["id"] . " | description: " . $row["description"] . "<br>";
		}
	} 	
	else {
		echo "0 results";
	}*/

include('close_db_connection.php'); //closing connection to database
?>
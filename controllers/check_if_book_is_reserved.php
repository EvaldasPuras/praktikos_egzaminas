<?php
include('open_db_connection.php'); //opening connection to database
echo "<br>";
//SQL query
	$sql_query = "SELECT `book_id` FROM `book_reservations` WHERE book_id = " . $_POST["selected_book_id"]; //SQL query
	
	$result = mysqli_query($connection, $sql_query); //getting data from database and saving it into $result variable
	
	if (mysqli_num_rows($result) > 0) { //if result has more than one row of data
		$book_is_reserved = true;
		//echo "books is reserved" . $book_is_reserved . "<br>";
	} 	
	else { //if result has more than one row of data
		$book_is_reserved = false;
		//echo "books is reserved" . $book_is_reserved . "<br>";
	} 	

//include('close_db_connection.php'); //closing connection to database
?>
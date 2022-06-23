<?php
include('open_db_connection.php'); //opening connection to database
//SQL query
	
	$sql_query = "DELETE FROM `books` WHERE `id`='" . $_POST["book_to_delete_id"] . "';"; //SQL query
	echo $sql_query;
	
	$result = mysqli_query($connection, $sql_query); //getting data from database and saving it into $result variable*/

include('close_db_connection.php'); //closing connection to database*/

header("location: ../views/administrator_view.php");
		exit();

?>
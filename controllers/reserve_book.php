<?php
include('open_db_connection.php'); //opening connection to database
session_start();
//---------------------------------------------------------------------------------------------------------------------------

	$book_is_reserved = false; //change to true is book is reserved
	include('../controllers/check_if_book_is_reserved.php'); //first check if book is not reserved
	
	
	
	
	
	if($book_is_reserved == false){
		//echo "not reserved";
		
		$book_to_reserve = $_POST['selected_book_id'];
		
		$user_to_search = $_SESSION['username'];
		
		include('get_user_id_by_name_db.php');
	
		echo $book_to_reserve;
		echo "<br>";
		echo $fetched_id;
		echo "<br>";
	
		
		
		$sql_query = "INSERT INTO book_reservations (user_id, book_id)
		VALUES ('" . $fetched_id . "', '" . $book_to_reserve . "')";
		
		$result = mysqli_query($connection, $sql_query);
		
	}

//---------------------------------------------------------------------------------------------------------------------------
include('close_db_connection.php'); //closing connection to database
?>
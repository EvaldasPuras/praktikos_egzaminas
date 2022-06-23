<?php
include('open_db_connection.php'); //opening connection to database
//SQL query

	$a = $_POST["id"];
	$b = $_POST["name"];
	$c = $_POST["author_first_name"];
	$d = $_POST["author_last_name"];
	$e = $_POST["description"];
	$f = $_POST["ISBN"];
	$g = $_POST["picture"];
	$h = $_POST["page_count"];
	$i = $_POST["category"];



	$sql_query = "UPDATE `books` SET `id`='" . $_POST["id"] . "',
	`name`='" . $_POST["name"] . "',
	`author_first_name`='" . $_POST["author_first_name"] . "',
	`author_last_name`='" . $_POST["author_last_name"] . "',
	`description`='" . $_POST["description"] . "',
	`ISBN`='" . $_POST["ISBN"] . "',
	`picture`='" . $_POST["picture"] . "',
	`page_count`='" . $_POST["page_count"] . "',
	`category`='" . $_POST["category"] . "' WHERE `id`='" . $_POST["book_to_update_id"] . "'"; //SQL query
	echo $sql_query;
	
	$result = mysqli_query($connection, $sql_query); //getting data from database and saving it into $result variable*/

include('close_db_connection.php'); //closing connection to database*/*/


header('Location:../views/administrator_view.php');
exit();
?>
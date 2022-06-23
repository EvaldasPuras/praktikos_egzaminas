<?php
include('open_db_connection.php'); //opening connection to database
//SQL query

	
	$b = $_POST["name"];
	$c = $_POST["author_first_name"];
	$d = $_POST["author_last_name"];
	$e = $_POST["description"];
	$f = $_POST["ISBN"];
	$g = $_POST["picture"];
	$h = $_POST["page_count"];
	$i = $_POST["category"];



	$sql_query = "INSERT INTO books (name, author_first_name, author_last_name, description, ISBN, picture, page_count, category) VALUES
	('$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i')"; //SQL query
	//echo $sql_query;
	
	$result = mysqli_query($connection, $sql_query); //getting data from database and saving it into $result variable*/

	include('close_db_connection.php'); //closing connection to database


header('Location:../views/administrator_view.php');
exit();
?>
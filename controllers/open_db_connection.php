<?php
	$servername = "localhost";
	$username   = "root"; //db username
	$password   = ""; //db password
	$database   = "library"; //db name

	// Create connection
	$connection = mysqli_connect($servername, $username, $password, $database);

	// Check connection
	if (!$connection) {
		die("Nepavyko prisijungti prie duomenu bazes: " . mysqli_connect_error());
	}
	/*else if($connection){
		echo ("Sėkmingai prisijungta prie duomenų bazės<br>");
	}*/
?>
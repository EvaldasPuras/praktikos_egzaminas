<?php
	mysqli_close($connection);
	if(is_resource($connection)){
		die("closing db connection failed.<br>");
	}
	
?>
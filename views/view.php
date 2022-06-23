<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Log in</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<?php

	session_start();
	
	if( $_SESSION['username']== null ) {
		header("location: login_view.php");
	}
	
	
	if( isset( $_SESSION['username'] ) ) {
	?>
				<!--<div class="ms-auto">
						<a href="../controllers/logout.php" class="float-right">
							<button type="button" class="btn btn-danger">Atsijungti</button>
						</a>
				</div> -->
				
			<?php	
				if ($_SESSION['isAdmin'] == 0){
					header("location: reader_view.php");
				}
				else if ($_SESSION['isAdmin'] == 1){
					header("location: administrator_view.php");
				}
			
	
	
	
	}






?>
</body>

</html>
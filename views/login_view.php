<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Log in</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

	<div class="container mt-3">
		<h2>Log in</h2>
		<form action="../controllers/login.php" method="POST">
			<div class="mb-3 mt-3">
				<label for="username" class="form-label">Username:</label>
				<input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
			</div>
			<div class="mb-3">
				<label for="password" class="form-label">Password:</label>
				<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
			</div>
			<!--<div class="form-check mb-3">
			
			</div> --> 
			<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	
	
	<br>
	<a href="registration_view.php" class="btn btn-primary">Create new account</a>
		
		
		</div>
    
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Registration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

	<div class="container mt-3">
		<h2>Nauja paskyra</h2>
		<form action="../controllers/register.php" method="post">
			<div class="mb-3 mt-3">
				<label for="username" class="form-label">Username:</label>
				<input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
			</div>
			<div class="mb-3">
				<label for="password" class="form-label">Password:</label>
				<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
			</div>
			
			<div class="mb-3">
				<label for="passwordR" class="form-label">Repeat password:</label>
				<input type="password" class="form-control" id="passwordR" placeholder="Repeat password" name="passwordR">
			</div>
			
			<div class="mb-3">
				<input type="checkbox" name="adminCheck">
				<label for="adminCheck">Register as administrator</label><br><br>
			</div>
			
			<button type="submit" class="btn btn-primary">Patvirtinti</button>
	</form>
		
		
		</div>
    
</body>

</html>
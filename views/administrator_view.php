<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		
	
	</style>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Log in</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	
</head>
<body>

				<div class="ms-auto">
						<a href="../controllers/logout.php" class="float-right">
							<button type="button" class="btn btn-danger">Atsijungti</button>
						</a>
				</div>

					<br>
	<h1>Knygų redagavimas</h1>
	
	<table class="table table-hover">
		<thead>
			<tr>
							<th>id</th>
							<th>name</th>
							<th>author_first_name</th>
							<th>author_last_name</th>
							<th>description</th>
							<th>ISBN</th>
							<th>picture_address</th>
							<th>page_count</th>
							<th>category</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
					
		<tbody>
		
					<!-- -->
					
					<br>
						<form action="book_add_view.php" method="post">
								<input style="margin-bottom: 35px" type="submit" class="btn btn-primary" value="Pridėti naują knygą">
						</form>
						
					
					<!-- -->
					
			<?php
				include('../controllers/get_all_book_data_from_db.php');
						
				if (mysqli_num_rows($result) > 0){
							// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				?>
				
					<form action="../controllers/update_book_data_db.php" method="post">
						<td>		
							<input class="form-control" type="input" name="id" value="<?php echo $row["id"] ?>"><br>
						</td>
						
						<td>		
							<input class="form-control" type="input" name="name" value="<?php echo $row["name"] ?>"><br>
						</td>
						
						<td>		
							<input class="form-control" type="input" name="author_first_name" value="<?php echo $row["author_first_name"] ?>"><br>
						</td>
						
						<td>		
							<input class="form-control" type="input" name="author_last_name" value="<?php echo $row["author_last_name"] ?>"><br>
						</td>
						
						<td>		
							<input class="form-control" type="input" name="description" value="<?php echo $row["description"] ?>"><br>
						</td>
						
						<td>		
							<input class="form-control" type="input" name="ISBN" value="<?php echo $row["ISBN"] ?>"><br>
						</td>
						
						<td>		
							<input class="form-control" type="input" name="picture" value="<?php echo $row["picture"] ?>"><br>
						</td>
						
						<td>		
							<input class="form-control" type="input" name="page_count" value="<?php echo $row["page_count"] ?>"><br>
						</td>
						
						<td>		
							<input class="form-control" type="input" name="category" value="<?php echo $row["category"] ?>"><br>
						</td>
						
						
						
						
						
						
					
						<td>		
							<input type="submit" class="btn btn-primary" value="Patvirtinti knygos duomenis">
							<input type="hidden" name="book_to_update_id" value="<?php echo $row["id"] ?>"><br>
							
						</td>
					</form>
					
						<td>
							<form action="../controllers/delete_book_from_db.php" method="post">
								<input type="submit" class="btn btn-danger" value="Pašalinti knygą">
								<input class="form-control" type="hidden" name="book_to_delete_id" value="<?php echo $row["id"] ?>"><br>
							</form>
						</td>
					
					
					
					<?php
					echo "</tr>";
				}
			}
			else {
				echo "0 results";
			}
					
					?>
					
					
			</tbody>
		</table>
	</body>
</html>
				
				
				
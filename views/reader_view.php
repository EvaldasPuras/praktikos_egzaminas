<!DOCTYPE html>
<html lang="en">

<head>
    <!--
		<meta charset="UTF-8">
	-->
    
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

	<h1>Knygų sąrašas</h1>
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
						</tr>
					</thead>
					
					<tbody>
					
					<?php
						include('../controllers/get_all_book_data_from_db.php');
						
						if (mysqli_num_rows($result) > 0){
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								echo "<tr>";
								echo "<td>" . $row["id"] . "</td>";
								echo "<td>" . $row["name"] . "</td>";
								echo "<td>" . $row["author_first_name"] . "</td>";
								echo "<td>" . $row["author_last_name"] . "</td>";
								echo "<td>" . $row["description"] . "</td>";
								echo "<td>" . $row["ISBN"] . "</td>";
								echo "<td>" . $row["picture"] . "</td>";
								echo "<td>" . $row["page_count"] . "</td>";
								echo "<td>" . $row["category"] . "</td>";
								
								
								
								echo "<td>";
							?>
							
							
							
							
							<form action="../controllers/reserve_book.php" method="post">
								
								<button class="btn btn-primary" type="submit" value="Pasirinkti">Rezervuoti</button>
								<input type="hidden" name="selected_book_id" value="<?php echo $row["id"] ?>"><br>
						
								<!--<button class="btn btn-primary" type="submit" value="Pasirinkti">Rezervuoti</button> -->
								
								
								
								
							</form>
							
							<?php
							
								echo "</td>";
								
								
								
								echo "<td>";
							?>
							
							
							
							
							<form action="../controllers/reserve_book.php" method="post">
								
								<button class="btn btn-primary" type="submit" value="Pasirinkti">Pridėti į mėgstamiausias</button>
								<input type="hidden" name="selected_book_id" value="<?php echo $row["id"] ?>"><br>
						
								<!--<button class="btn btn-primary" type="submit" value="Pasirinkti">Rezervuoti</button> -->
								
								
								
								
							</form>
							
							<?php
							
								echo "</td>";
								
								
								
								
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
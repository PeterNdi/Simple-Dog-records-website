<!DOCTYPE html>
<html>
<head>
	<title>Poppleton Dog</title>
	<style>
		table{
			border-collapse: collapse;
			width:100%;
			color:;
			font-family: monospace;
			font-size:25px;
			text-align:left;
		}
		th{
			background-color:#000000;
			color:white;
		}
		tr:nth-child(even) {background-color:#808080; width:100%; }
	</style>
</head>
<body>
<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Breed</th>
		<th>Average Score</th>
	</tr>

	<?php

	$conn =mysqli_connect("localhost", "root", "", "u2071497");
	if ($conn-> connect_error) {
		die("connection failed:". $conn-> connect_error);
	}

		$sql = "SELECT dogs.id, dogs.name AS dogsname FROM dogs
				INNER JOIN breeds ON (dogs.breed_id = breeds.id)
				 ";



		$result = $conn-> query($sql);

		if($result-> num_rows > 0) {
			while ($row = $result-> fetch_assoc()) {
				echo "<tr><td>". $row["id"]. "</td><td>". $row["name"]. "</td><td>". $row["name"]. "</td></tr>";
			}
			echo "</table";
		}
		else {
			echo "0 result";
		}

		$conn-> close();

	?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>customers</title>
	<link rel="stylesheet" href="header.css">
	<style>
		#customers {
			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			/* width: 100%; */
		}
		
		#customers td, #customers th {
			border: 1px solid #ddd;
			padding: 8px;
		}
		
		#customers tr:nth-child(even){background-color: #f2f2f2;}
		
		#customers tr:hover {background-color: #ddd;}
		
		#customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #04AA6D;
			color: white;
		}
	</style>
</head>
<body>
	<?php
		include_once('header.php');
		?>
		<h1>Afspraak Verwijderen</h1>
		<div class=box1>
			<form action="./alter.php" method="post">
				<p>
					<label for="id_change">afspraak ID:</label>
					<input type="text" name="id_change" id="id_change">
				</p>
				<input type="submit" value="Verstuur">
			</form>
		</div>
		<br>
		<?php

		include './table.php';
		All();
	?>
</body>
</html>
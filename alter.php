<!DOCTYPE html>
<html>

<head>
	<title>Insert</title>
	<meta http-equiv="refresh" content="2;url=<?php echo($_SERVER['HTTP_REFERER']); ?>" />
</head>

<body>
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "panel");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$id_change = $_REQUEST['id_change'];
		
		// Performing insert query execution
		$sql = "DELETE FROM orders WHERE id=$id_change";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data removed successfully."
				. " Opdracht voltooid!"
				. " u wordt terug gestuurd :)</h3>";
		} else{
			echo "ERROR: oops! $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
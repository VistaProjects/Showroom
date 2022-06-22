<!DOCTYPE html>
<html>

<head>
	<title>Insert</title>
	<meta http-equiv="refresh" content="2;url=/" />
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
		
		$id = '';
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
		$date_time = $_REQUEST['date_time'];
		$descr = $_REQUEST['descr'];
		
		// Performing insert query execution
		$sql = "INSERT INTO `orders` VALUES ('$id','$first_name','$last_name','$phone','$email','$date_time','$descr')";
		$sql2 = "INSERT INTO `users` VALUES ('$id','$first_name','$last_name','$phone','$email')";
		
		if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)){
			echo "<h3>data stored in a database successfully."
				. " Opdracht voltooid!"
				. " u wordt terug gestuurd :)</h3>";

			echo nl2br("\n$id\n$first_name\n $last_name\n "
				. "$phone\n $email\n $date_time\n $descr");
		} else{
			echo "<h3>u wordt terug gestuurd :)</h3>";

			// echo "ERROR: oops! $sql. " . mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
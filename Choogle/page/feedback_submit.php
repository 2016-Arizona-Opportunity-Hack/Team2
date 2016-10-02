<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Connect to Chandler - Forum</title>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" href="../style/style.css">
		<script src="../script/dropdown.js"></script>
	</head>
	<body>
		<?php
			require_once("menu.php");
			require_once("nav.php");
			
			$name = $_POST['username'];
			$feedback = $_POST['feedback'];
			
			$dbc = mysqli_connect("localhost", "root", "", "user_feedback") or die("could not load database");
			$query = "INSERT INTO user_feedback (name, feedback) VALUES ('$name', '$feedback');";
			
			$result = mysqli_query($dbc, $query) or die('Error submitting query');
			mysqli_close($dbc);
		?>
		
		<h2>Thank you for your submition, it has been recorded.</h2>
	</body>
</html>
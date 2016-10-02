<!-- Thank you page to thank user after submitting feedback -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Connect to Chandler - Forum</title>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" href="../style/style.css">
		<script src="../script/dropdown.js"></script>
	</head>
	<body>
		<!-- Call necessary php resources needed for this page -->
		<?php
			require_once("menu.php");
			require_once("nav.php");
			
			$mysqli = new mysqli("localhost", "root", "", "user_feedback");
			if (mysqli_connect_error()) {
				echo mysqli_connect_error();
				exit;
			}
			
			$query = "INSERT INTO user_feedback (name, feedback) VALUES (?, ?);";	
			if($stmt = $mysqli->prepare($query)){
				$stmt->bind_param("ss", $name, $feedback);
				
				$name = $_POST['username'];
				$feedback = $_POST['feedback'];
				
				$stmt->execute();
			}
			
			mysqli_close($mysqli);
		?>
		
		<h2>Thank you for your submition, it has been recorded.</h2>
	</body>
</html>
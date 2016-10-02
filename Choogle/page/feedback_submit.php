<!-- Thank you page to thank user after submitting feedback -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Connect to Chandler - Forum</title>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" href="../style/style.css">
		<script src="../script/script.js"></script>
	</head>
	<body id="feedback_submit">
		<!-- Call necessary php resources needed for this page -->
		<?php
			require_once("menu.php");
			require_once("nav.php");
			
			$name = $_POST['username'];
			$feedback = $_POST['feedback'];
			
			$mysql = new mysqli("localhost", "root", "", "user_feedback") or die("could not load database");
			$query = "INSERT INTO user_feedback (name, feedback) VALUES (?, ?);";
			
			if($stmt = $mysql->prepare($query)){
				$stmt->bind_param("ss", $name, $feedback);
				
				$name = $_POST["username"];
				$feedback = $_POST["feedback"];
				
				$stmt->execute();
			}
			
			$mysql->close();
		?>
		
		<h2>Thank you for your submition, it has been recorded.</h2>
	</body>
</html>
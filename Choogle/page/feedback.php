<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Connect to Chandler - Forum</title>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" href="../style/style.css">
	</head>
	<body>
		<?php
			require_once("menu.php");
			require_once("nav.php");
		?>
		
		<h3>Have a question? Ask here!</h3>
		<form action="feedback_submit.php" method="post">
			<div>
				<label>Name (optional): <input type="text" name="username"></label>
				<label>
					Enter your feedback here:
					<input type="textarea" rows="25" cols="50" name="feedback">
					<input type="submit" value="Send Feedback">
				</label>
			</div>
		</form>
	</body>
</html>
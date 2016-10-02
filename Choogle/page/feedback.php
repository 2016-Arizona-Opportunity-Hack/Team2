<!-- File to build and organize the feedback page of the website -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Connect to Chandler - Forum</title>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" href="../style/style.css">
		<style>
			div form input {
				margin: 40px;
			}
		</style>
	</head>
	<body>
		<!-- Call necessary php resources needed for this page -->
		<?php
			require_once("menu.php");
			require_once("nav.php");
		?>
		<!-- Take in user text feedback -->
		<h2>Have any concerns? Enter your feedback below!</h2>
		<form action="feedback_submit.php" method="post">
			<div>
				Name (optional) <input type='text' name='username'>
				<br>
				Feedback 
				<br>
				<textarea rows='20' cols='75' name="feedback"></textarea>
				<br>
				<input type="submit" value="Submit Feedback">
			</div>
		</form>
	</body>
</html>
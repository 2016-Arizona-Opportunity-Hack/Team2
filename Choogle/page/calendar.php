<!-- This page displays an embeded calendar webpage from the Chamber of Commerce's existing webpage -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Connect to Chandler - Results</title>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" href="../style/style.css">
		<script src="../script/script.js"></script>
		<style>
			div#frame {
				text-align: right;
			}
		</style>
	</head>
	<body>
		<!-- Call necessary php resources needed for this page -->
		<?php
			require_once("menu.php");
			require_once("nav.php");
		?>
		
		<!-- Displays Chandler Chamber of Commerce Event Calendar in embeded iFrame -->
		<div id="frame">
			<iframe id="iframe" name = "frame" src = "http://business.chandlerchamber.com/events/calendar/2016-10-02">
				<p>Sorry! Your browser does not support iframes!</p>
			</iframe>
		</div>
	</body>
</html>
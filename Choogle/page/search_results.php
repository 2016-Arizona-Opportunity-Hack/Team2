<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Connect to Chandler - Results</title>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" href="../style/style.css">
		<script src="../script/dropdown.js"></script>
		<style>		
			div#frame {
				text-align: center;
			}
			
			form {
				margin-top: -50px;
			}
		</style>
	</head>
	<body>
		<?php
			require_once("menu.php");
			require_once("search_bar.php");	
		?>
		<nav>
			<h3>Floating navigation</h3>
		</nav>
		
		<div id="frame">
			<iframe id="iframe" name = "frame" src = "http://www.chandlerchamber.com/" scrolling = "auto">
				<p>Sorry! Your browser does not support iframes!</p>
			</iframe>
		</div>
	</body>
</html>
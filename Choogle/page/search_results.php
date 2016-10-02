<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Connect to Chandler - Results</title>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" href="../style/style.css">
		<script src="../script/dropdown.js"></script>
		<style>		
			div#frame {
				text-align: right;
				clear: left;
			}
			
			form {
				margin-top: -50px;
			}
		</style>
	</head>
	<body>
		<?php
			//implement the prepared statement
			$prepstat = $conn->prepare(SELECT * FROM site);
			$prepstat = $bindParam($keywords);
			
			$keywords = $_GET['search_in'];
			$prepstat->execute();
		
			require_once("menu.php");
			require_once("search_bar.php");	
		?>
		
		<div id="frame">
			<iframe id="iframe" name = "frame" src = "http://www.chandlerchamber.com/">
				<p>Sorry! Your browser does not support iframes!</p>
			</iframe>
		</div>
	</body>
</html>
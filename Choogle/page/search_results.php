<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Connect to Chandler - Results</title>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" href="../style/style.css">
		<script src="../script/script.js"></script>
		<style>		
			div#frame {
				text-align: right;
			}
			
			form {
				margin-top: -50px;
			}
		</style>
	</head>
	<body>
		<?php
			$mysqli = mysqli_connect("localhost", "root", "", "site_list") or die('Error loading database');
			$query = "SELECT Name FROM site";
			if($stmt = $mysqli->prepare($query)){
				$stmt-> execute();
				$stmt->bind_result($name);
				while($stmt->fetch()){
					printf("%s", $name);
				}
			}
			$mysqli->close();
			
			/* $mysqli = mysqli_connect("localhost", "root", "", "site_list") or die('Error loading database');
			$query = "SELECT Name FROM site";
			if($stmt = $mysqli->prepare($query)){
				$stmt-> execute();
				$stmt->bind_result($name);
				while($stmt->fetch()){
					echo "<h1>$name</h1>";
				}
				$mysqli->close();
			} */
			require_once("menu.php");
			require_once("search_bar.php");	
			require_once("nav.php");
		?>
		
		<div id="frame">
			<?php
				$input = $_GET['search_in'];
				echo "<iframe id='iframe' name = 'frame' src = '$input'>";
			?>
				<p>Sorry! Your browser does not support iframes!</p>
			</iframe>
		</div>
	</body>
</html>
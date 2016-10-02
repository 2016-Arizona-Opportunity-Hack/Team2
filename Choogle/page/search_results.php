<!DOCTYPE html>
<html lang = "en">
	<head
	<?php
			$mysqli = new mysqli("localhost","root","siteList");
			$query = "SELECT Name, url";
			if($stmt = $mysqli->prepare($query)){
				$stmt->$execute();
				$stmt->$bind_result($name);
				while($stmt->fetch()){
					printf($name);
				}
				$stmt->close();
			}
			$mysqli->close();
		?>
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
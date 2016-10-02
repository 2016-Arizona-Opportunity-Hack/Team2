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
			//use of prepared statement and htmlentities to protect agains XSS and SQL Injection
			$mysqli = mysqli_connect("localhost", "root", "", "site_list") or die('Error loading database');
			$query = "SELECT * FROM site WHERE Name = '$[keywords]'";
			if($stmt = $mysqli->prepare($query)){
				$keywords = $_GET["search_in"];
				$stmt->bind_param(s, $keywords)
				$stmt->execute();
				$stmt->bind_result(htmlentities($name));
				while($stmt->fetch()){
					printf("%s", $name);
				}
			}
			$mysqli->close();

			//Calling reusable code
			require_once("menu.php");
			require_once("search_bar.php");	
			require_once("nav.php");
		?>

		<!--iframe to embed other websites-->
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
<!-- Page showing search results after user searches -->
<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Connect to Chandler - Results</title>
		<meta charset="ISO-8859-1">
		<link rel="stylesheet" href="../style/style.css">
		<script src="../script/script.js">
			window.onload = populateSearch();
		</script>
		<style>		
			div#frame {
				text-align: right;
			}
		</style>
	</head>
	<body>
		<?php
			//use of prepared statement and htmlentities to protect agains XSS and SQL Injection
			$mysqli = mysqli_connect("localhost", "root", "", "site_list") or die('Error loading database');
			$query = "SELECT * FROM site WHERE Name = $[keywords]";
			if($stmt = $mysqli->prepare($query)){
				$keywords = $_GET["search_in"];
				$stmt->bind_param(s, $keywords);
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
	</body>
</html>
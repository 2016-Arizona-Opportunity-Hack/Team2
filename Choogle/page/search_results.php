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
			 $cipher = AES; 
			 $key = 128;
			 $data = $name;
			 $mode =  "ecb";
			 $iv = 128;
			 
			 string mcrypt_encrypt ( string $cipher , string $key , string $data , string $mode [, string $iv ] )
			}
			$mysqli->close();
			
			//Calling reusable code
			require_once("menu.php");
			require_once("search_bar.php");
			require_once("nav.php");
		?>
		<div id="result_page">
			<ul>
				<?php
					//use of prepared statement and htmlentities to protect against XSS and SQL Injection
					$input = $_GET['search_in'];
					
					$mysqli = new mysqli("localhost", "root", "", "site_list");
					//in the event that mysql cannot connect to the database
					if (mysqli_connect_error()) {
						echo mysqli_connect_error();
						exit;
					}
					
					$query = "SELECT * FROM site WHERE INSTR(name, ?) > 0";
					if($stmt = $mysqli->prepare($query)) {
						$stmt->bind_param('s', $name);
						$name = strtolower($input);
						$stmt->execute();
						
						$result = mysqli_stmt_get_result($stmt);
						while ($row = mysqli_fetch_array($result)) {
							echo "<li><a href='" . $row[1] . "'>" . $row[0] . "</a></li>";
						}
					}
					
					$mysqli->close();
				?>
			</ul>
		</div>
	</body>
</html>
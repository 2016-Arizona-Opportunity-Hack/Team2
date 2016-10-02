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
			
			div#result_page {
				background-color: white;
				margin: auto;
				margin-left: 230px;
			}
			
			div#result_page ul {
				list-style-type: none;
				padding: 25px;
				border: 1px solid black;
			}
		</style>
		<script>
			function getFrame(elem) {
				
			}
		
			function checkClicks(elems) {
				for (var i = 0; i < elems.length; ++i)
					elems[i].onclick = function() {
						getFrame(elems[i]);
					};
			}
			
			window.onload = function() {
				var elems = document.getElementsByTagName("clickme");
				checkClicks(elems);
			};
		</script>
	</head>
	<body>
		<?php
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
					
					$query = "SELECT * FROM site WHERE name = ?";
					if($stmt = $mysqli->prepare($query)){
						$stmt->bind_param('s', $name);
						$name = strtolower($input);
						$stmt->execute();
						while($stmt->fetch()){
							echo "<li class='clickme' id=''>$name</li>";
						}
					}
					$mysqli->close();
				?>
			</ul>
		</div>
	</body>
</html>
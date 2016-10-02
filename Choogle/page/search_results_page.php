<!-- Shows embeded display of chosen website from search results -->
<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Connect to Chandler - Results</title>
		<meta charset="ISO-8859-1">
		<script src="../script/script.js"></script>
		<link rel="stylesheet" href="../style/style.css">
		<style>
			div#frame {
				margin-left: 200px;
			}
		</style>
	</head>
	<body>
		<!-- Call necessary php resources needed for this page -->
		<?php
			require_once("menu.php");
			require_once("nav.php");
		?>
		
		<div id="frame">
			<?php
				echo "<iframe id='iframe' name = 'frame' src='" . $_GET['link'] . "'>";
			?>
				<p>Sorry! Your browser does not support iframes!</p>
			</iframe>
		</div>
	</body>
</html>
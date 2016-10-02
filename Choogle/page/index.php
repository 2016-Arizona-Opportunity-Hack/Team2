<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Connect to Chandler - Home</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<link rel="stylesheet" href="../style/style.css">
		<script>
			window.onload = function() {
				var x = value;
				while(x == 0){
					
				document.getElementById(specific_cat).style.visibility = 'block';
				}
			};
		</script>
	</head>
	<body>
		<?php
			require_once('menu.php');
		?>
		<form action="search.php" method="get" id="body" margin="auto>
			<div id = "input">
				<input type="text" name="search_in">
				<input type="submit" value="Search">
					
				<select name="general_cat">
					<option value=''>General</option>
					<option value=''>Living & Transportation</option>
					<option value=''>Recreation & Culture</option>
					<option value=''>Businesses & Organizations</option>
					<option value=''>Government</option>
					<option value=''>Care & Services</option>
				</select>
				
				<select name="specific_cat" id "specific_cat" = 0>
					<option value="Advertising & Media">Advertising & Media</option>
					<option value="Arts, Culture & Entertainment">Arts, Culture & Entertainment</option>
					<option value="Automotive & Marine">Automotive & Marine</option>
					<option value="Business & Professional Services">Business & Professional Services</option>
					<option value="Chairman's Circle'">Chairman's Circle</option>
					<option value="Child Care">Child Care</option>
					<option value="Computers & Telecommunications">Computers & Telecommunications</option>
					<option value="Construction Equipment & Contractors">Construction Equipment & Contractors</option>
					<option value="Finance & Insurance">Finance & Insurance</option>
					<option value="Government, Education & Individuals">Government, Education & Individuals</option>
					<option value="Health Care">Health Care</option>
					<option value="Home & Garden">Home & Garden</option>
					<option value="Industrial Supplies & Services">Industrial Supplies & Services</option>
					<option value="Legal">Legal</option>
					<option value="Living">Living</option>
					<option value="Lodging & Travel">Lodging & Travel</option>
					<option value="Manufacturing, Production & Wholesale">Manufacturing, Production & Wholesale</option>
					<option value="Non-Profits, Community & Civic Organizations">Non-Profits, Community & Civic Organizations</option>
					<option value="Personal Services & Care">Personal Services & Care</option>
					<option value="Pets & Veterinary">Pets & Veterinary</option>
					<option value="Printing Services">Printing Services</option>
					<option value="Public Utilities & Environment">Public Utilities & Environment</option>
					<option value="Real Estate, Moving & Storage">Real Estate, Moving & Storage</option>
					<option value="Religious Organizations">Religious Organizations</option>
					<option value="Repair">Repair</option>
					<option value="Restaurants, Food & Beverages">Restaurants, Food & Beverages</option>
					<option value="Shopping & Specialty Retail">Shopping & Specialty Retail</option>
					<option value="Sports & Recreation">Sports & Recreation</option>
					<option value="Transportation">Transportation</option>
				</select>
			</div>
		</form>
	</body>
</html>
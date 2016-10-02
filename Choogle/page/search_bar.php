<!-- Defines the general and specific dropdown menus for the search bar and the bar itself -->
<form action="search_results.php" method="get" id="body">
	<div>
		<input type="text" name="search_in">
		<input type="submit" value="Search">		
		<span>
			<!-- The list of general categories to choose -->
			<select name="general_cat" id = "general_cat">
				<option value="General">General</option>
				<option value="Living & Transportation">Living &amp; Transportation</option>
				<option value="Recreation & Culture">Recreation &amp; Culture</option>
				<option value="Businesses & Organizations">Businesses &amp; Organizations</option>
				<option value="Government">Government</option>
				<option value="Care & Services">Care &amp; Services</option>
			</select>
			
			<!-- List 1 of specific categories to choose -->
			<select name='specific_l&amp;t' class = "specific_cat">
				<option value="Specific">Specific</option>
				<option value="Automotive &amp; Marine">Automotive &amp; Marine</option>
				<option value="Construction Equipment &amp; Contractors">Construction Equipment &amp; Contractors</option>
				<option value="Home &amp; Garden">Home &amp; Garden</option>
				<option value="Living">Living</option>
				<option value="Lodging &amp; Travel">Lodging &amp; Travel</option>
				<option value="Public Utilities &amp; Environment">Public Utilities &amp; Environment</option>
				<option value="Real Estate, Moving &amp; Storage">Real Estate, Moving &amp; Storage</option>
				<option value="Transportation">Transportation</option>
			</select>
			
			<!-- List 2 of specific categories to choose -->
			<select name='specific_r&amp;c' class = "specific_cat">
				<option value="Specific">Specific</option>
				<option value="Arts, Culture &amp; Entertainment">Arts, Culture &amp; Entertainment</option>
				<option value="Restaurants, Food &amp; Beverages">Restaurants, Food &amp; Beverages</option>
				<option value="Shopping &amp; Specialty Retail">Shopping &amp; Specialty Retail</option>
				<option value="Sports &amp; Recreation">Sports &amp; Recreation</option>
			</select>
			
			<!-- List 3 of specific categories to choose -->
			<select name='specific_b&amp;o' class = "specific_cat">
				<option value="Specific">Specific</option>
				<option value="Advertising &amp; Media">Advertising &amp; Media</option>
				<option value="Business &amp; Professional Services">Business &amp; Professional Services</option>
				<option value="Finance &amp; Insurance">Finance &amp; Insurance</option>
				<option value="Industrial Supplies &amp; Services">Industrial Supplies &amp; Services</option>
				<option value="Manufacturing, Production &amp; Wholesale">Manufacturing, Production &amp; Wholesale</option>
				<option value="Non-Profits, Community &amp; Civic Organizations">Non-Profits, Community &amp; Civic Organizations</option>
				<option value="Religious Organizations">Religious Organizations</option>
			</select>
			
			<!-- List 4 of specific categories to choose -->
			<select name='specific_g' class = "specific_cat">
				<option value="Specific">Specific</option>
				<option value="Chairman's Circle'">Chairman's Circle</option>
				<option value="Government, Education &amp; Individuals">Government, Education &amp; Individuals</option>
				<option value="Legal">Legal</option>
			</select>
			
			<!-- List 5 of specific categories to choose -->
			<select name="specific_c&amp;s" class = "specific_cat">
				<option value="Specific">Specific</option>
				<option value="Child Care">Child Care</option>
				<option value="Computers &amp; Telecommunications">Computers &amp; Telecommunications</option>
				<option value="Health Care">Health Care</option>
				<option value="Personal Services &amp; Care">Personal Services &amp; Care</option>
				<option value="Pets &amp; Veterinary">Pets &amp; Veterinary</option>
				<option value="Printing Services">Printing Services</option>
				<option value="Repair">Repair</option>
			</select>
		</span>
		<input type="hidden" value="0" name="preference" id="preference">
	</div>
</form>
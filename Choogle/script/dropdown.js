function hideSpecificLists() {
	var specificLists = document.getElementsByClassName("specific_cat");
	for (var i = 0; i < specificLists.length; ++i)
		specificLists[i].style.display = "none";
}

function showSpecificList()	{
	hideSpecificLists();
	
var toShow = document.getElementById("general_cat"),
	selectedVal = toShow.options[toShow.selectedIndex];
	
	switch (parseInt(selectedVal.value)) {
		case 1:
			document.getElementsByName("specific_l&t")[0].style.display = "inline-block";
			break;
		case 2: 
			document.getElementsByName("specific_r&c")[0].style.display = "inline-block";
			break;
		case 3: 
			document.getElementsByName("specific_b&o")[0].style.display = "inline-block";
			break;
		case 4: 
			document.getElementsByName("specific_g")[0].style.display = "inline-block";
			break;
		case 5: 
			document.getElementsByName("specific_c&s")[0].style.display = "inline-block";
			break;
	}
}

window.onload = function() {
	hideSpecificLists();
	document.getElementById("general_cat").onchange = showSpecificList;
};

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

function resizeIframe() {
	//define iframe
	var iframe = document.getElementById("iframe"),
		width = window.innerWidth,
		height = window.innerHeight;
	
	//width and height set equal to the window dimensions multiplied by a percentage
	iframe.width = width * 0.85;
	iframe.height = height * 0.80;
}

window.onload = function() {
	hideSpecificLists();
	if (document.getElementById("general_cat") != null)
		document.getElementById("general_cat").onchange = showSpecificList;
	if (document.getElementById("iframe") != null)
		resizeIframe();
};

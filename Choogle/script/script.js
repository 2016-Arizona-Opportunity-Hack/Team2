/* Contains all js functions needed by multiple pages of the website */

/* Hides the dropdown menus of the specific categories until a general category is chosen */
function hideSpecificLists() {
	var specificLists = document.getElementsByClassName("specific_cat");
	for (var i = 0; i < specificLists.length; ++i)
		specificLists[i].style.display = "none";
}

function backToHome() {
	setTimeout("window.location.href = 'index.php'", 5 * 1000);
}

/* Displays the appropriate specific categories list dependent on the general list choice */
function showSpecificList()	{
	hideSpecificLists();
	
var toShow = document.getElementById("general_cat"),
	selectedVal = toShow.options[toShow.selectedIndex];
	
	switch (selectedVal.value) {
		case "Living & Transportation":
			document.getElementsByName("specific_l&t")[0].style.display = "inline-block";
			break;
		case "Recreation & Culture": 
			document.getElementsByName("specific_r&c")[0].style.display = "inline-block";
			break;
		case "Businesses & Organizations": 
			document.getElementsByName("specific_b&o")[0].style.display = "inline-block";
			break;
		case "Government": 
			document.getElementsByName("specific_g")[0].style.display = "inline-block";
			break;
		case "Care & Services": 
			document.getElementsByName("specific_c&s")[0].style.display = "inline-block";
			break;
	}
}

/* Resizes the iFrame to the correct size of the webpage */
function resizeIframe() {
	//define iframe
	var iframe = document.getElementById("iframe"),
		width = window.innerWidth,
		height = window.innerHeight;
	
	//width and height set equal to the window dimensions multiplied by a percentage
	iframe.width = width * 0.85;
	iframe.height = height * 0.80;
}

function setPreference() {
	var inputBox = document.getElementById("preference");
	var general = document.getElementById("general_cat").value;
	var specificListList = document.getElementsByClassName("specific_cat");
	var specificList = null;
	
	for (var i = 0; i < specificListList.length; ++i) {
		if (specificListList[i].id == general) {
			specificList= specificListList[i];
			break;
		}
	}
	
	if (specificList == null) {
		inputBox.value = "General";
		return true;
	}
	
	var value = specificList.id + "/" + specificList.options[specificList.selectedIndex].value;
	inputBox.value = value;
}

window.onload = function() {
	hideSpecificLists();
	if (document.getElementById("general_cat") != null)
		document.getElementById("general_cat").onchange = showSpecificList;
	if (document.getElementById("iframe") != null)
		resizeIframe();
	document.getElementById("body").onsubmit = setPreference;
};

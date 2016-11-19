function loadJsonFromUrlIntoCube(url, cube)
{
	var xmlhttp = new XMLHttpRequest();
	// Get the contents of the page.
	var self = this;
	xmlhttp.open("GET", url, true);
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4) {
			if (xmlhttp.status == 200) {
				// Save the response text so we can set it during the animation.
				var cubeContents = JSON.parse(xmlhttp.responseText);
				loadJsonIntoElement(cubeContents.cube.top, cube.children[0].children[0]);
				loadJsonIntoElement(cubeContents.cube.bottom, cube.children[0].children[1]);
				loadJsonIntoElement(cubeContents.cube.front, cube.children[0].children[2]);
				loadJsonIntoElement(cubeContents.cube.back, cube.children[0].children[3]);
				loadJsonIntoElement(cubeContents.cube.left, cube.children[0].children[4]);
				loadJsonIntoElement(cubeContents.cube.right, cube.children[0].children[5]);
			} else if (xmlhttp.status == 404) {
				// If the page wasn't found, load the home page.
				// You could replace this with a 404 not found page.
				//location.href = "#page1.html";
			}
		}
	};
	// Send the request.
	xmlhttp.send();
}

function loadJsonIntoElement(json, element)
{
	element.style.background = json.background;

	// Load in images.
	for (var i = 0; i < json.images.length; i++) {
		var imgInfo = json.images[i];
		var img = document.createElement("section");
		img.className = imgInfo.classX
		img.src = imgInfo.source;
		img.style.position = "absolute";
		img.style.left = imgInfo.x;
		img.style.top = imgInfo.y;
		img.style.boxShadow = imgInfo.boxshadowB;
		img.style.backgroundImage = imgInfo.backgroundX;
		img.style.backgroundSize = imgInfo.backgroundS;
		img.style.backgroundRepeat = imgInfo.backgroundR;
		img.style.backgroundPosition = imgInfo.backgroundP;
		img.style.width = imgInfo.width;
		img.style.height = imgInfo.height;
		element.appendChild(img);
	}

}
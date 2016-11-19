var currentSide = "";
var newContent = "";
var isLoadingNewPage = false;

function rotateCubeToSide(side)
{
	var cube = document.getElementById("cube");
	
	var rotationAmountX = 0;
	var rotationAmountY = 0;
	if (side == "left") {
		rotationAmountY = 90;
	} else if (side == "right") {
		rotationAmountY = -90;
	} else if (side == "top") {
		rotationAmountX = -90;
	} else if (side == "bottom") {
		rotationAmountX = 90;
	} else if (side == "front") {
		rotationAmountY = 0;
	} else if (side == "back") {
		rotationAmountY = 180;
	}
	
	if (side != currentSide) {
		document.getElementById(side).innerHTML = newContent;
		cube.style.webkitTransform = "translateZ(-500px) rotateY(" + rotationAmountY + "deg) rotateX(" + rotationAmountX + "deg)";
		cube.style.MozTransform = "translateZ(-500px) rotateY(" + rotationAmountY + "deg) rotateX(" + rotationAmountX + "deg)";

	} else {
		cube.style.webkitTransform = "translateZ(-500px) rotateY(" + (rotationAmountY + 90) + "deg) rotateX(" + rotationAmountX + "deg)";
		cube.style.MozTransform = "translateZ(-500px) rotateY(" + (rotationAmountY + 90) + "deg) rotateX(" + rotationAmountX + "deg)";
	
		setTimeout(function() {
			document.getElementById(side).innerHTML = newContent;
			cube.style.webkitTransform = "translateZ(-500px) rotateY(" + rotationAmountY + "deg) rotateX(" + rotationAmountX + "deg)";
			cube.style.MozTransform = "translateZ(-500px) rotateY(" + rotationAmountY + "deg) rotateX(" + rotationAmountX + "deg)";
		
		}, 1000);

	}
	currentSide = side;
	// Unload the old side to prevent the browser from crashing.
}

function loadPage(page, side)
{
	// Indicate the the user is loading a new page.
	// This prevents the code in the hashchange function
	// from being executed.
	isLoadingNewPage = true;
	loadPageBackend(page, side);
	// Give the function time to run before changing the
	// indicator to false. Otherwise, the haschange code
	// will still run.
		setTimeout(function() { isLoadingNewPage = false }, 1200);
}

function loadPageBackend(page, side)
{
	var xmlhttp = new XMLHttpRequest();
	// Get the contents of the page.
	xmlhttp.open("POST", page, true);
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4) {
			if (xmlhttp.status == 200) {
				// Save the response text so we can set it during the animation.
				newContent = xmlhttp.responseText;

				var xmlDoc = parseXML(newContent);
				var scripts = xmlDoc.getElementsByTagName("script");

				for (var i = 0; i < scripts.length; i++) {
					var script = document.createElement("script");
					script.src = scripts[i].getAttribute("src");
						document.head.appendChild(script);
					//document.head.appendChild(script);
				}
							
				rotateCubeToSide(side);
				// Update location to indicate page change.
				location.href = "#" + page;
			} else if (xmlhttp.status == 404) {
				// If the page wasn't found, load the home page.
				// You could replace this with a 404 not found page.
				loadPage("home.html", "front");
			}
		}
	};
	// Send the request.
	xmlhttp.send(null);
	window.scrollTo(0, 0);
}
				function parseXML(xml)
	{
		if (window.DOMParser) {
			parser = new DOMParser();
			if (window.mozInnerScreenX == null)
			  xmlDoc = parser.parseFromString(xml, "text/xml");
			else
			  xmlDoc = parser.parseFromString(xml, "text/html");
		} else { // Internet Explorer
			xmlDoc = new ActiveXObject("Microsoft.XMLDOM");
			xmlDoc.async = false;
			xmlDoc.loadXML(xml);
		}
		return xmlDoc;
	}


window.addEventListener("hashchange", function() {
	if (!isLoadingNewPage) {
		var page = location.href.split("#")[1];
		loadPageBackend(page, "front");
	}
});
////////////////////////
// This top part should be updated to work with the individual project.
// For example, if there aren't numbers in the URL or IDs, you could you
// as associative array instead, and match the URL to the ID and JSON URL.
var page = location.href.split("#")[1];
var pageNum = parseInt(page.charAt(4));

var caroContainerId = "caro-container" + pageNum;
var caroJsonUrl = "json/caro" + pageNum + ".json";
////////////////////////

var caro = new SpinnableCarousel(document.getElementById(caroContainerId), false);
getJsonFromUrlAndPassToFunction(caroJsonUrl, function(json) { caro.setJsonSource(json); });
//loadJsonFromUrlIntoCarousel(caroJsonUrl, document.getElementById(caroContainerId));

if (pageNum == 1) {
	var caro2 = new SpinnableCarousel(document.getElementById("1caro-container1"), true);
	getJsonFromUrlAndPassToFunction(caroJsonUrl, function(json) { caro2.setJsonSource(json); });
	//loadJsonFromUrlIntoCarousel(caroJsonUrl, document.getElementById("1caro-container1"));
}
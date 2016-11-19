function PageTransitionContainer(el)
{
	// Public variables.
	this.errorPage = "#Welcome.php";
	this.entranceAnimation = "fadeInUpBig";
	this.exitAnimation = "fadeOutRightBig";

	// Private variables.
	this.__element;
	this.__currentPage = 1;

	/**
	 * Loads the contents of the given page into the given
	 * side of the cube and rotates to that side.
	 * @param {String} page - the URL of the page to load
	 * @param {String} side - the side of the cube to load
	 *		the page into
	 */
	this.loadPage = function(page)
	{
		// Prevent the user from changing to a new page before
		// the current page loads in. Otherwise, no page shows
		// up.
		var xmlhttp = new XMLHttpRequest();
		// Get the contents of the page.
		var self = this;
		xmlhttp.open("GET", page, true);
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4) {
				if (xmlhttp.status == 200) {
					// Save the response text so we can set it during the animation.
					var newContent = xmlhttp.responseText;

					// Switch the page indicators.
					var oldPage = self.__currentPage;
					self.__currentPage = self.__currentPage == 0 ? 1 : 0;
					var curPage = self.__currentPage;

					// Load in the new content.
					var currentPageDiv = self.__element.children[self.__currentPage];
					currentPageDiv.innerHTML = newContent;
					//self.__element.style.height = currentPageDiv.offsetHeight + "px";
					var oldPageDiv = self.__element.children[oldPage];

					// Switch z-indexes to make sure the right one is on top.
					oldPageDiv.style.zIndex = 1;
					currentPageDiv.style.zIndex = 2;

					var xmlDoc = self.__parseXML(newContent);
					var scripts = xmlDoc.getElementsByTagName("script");
			
					// Load in the scripts from the page.
					// The function that is called spaces out the loading
					// of the scripts so that they load in the correct
					// order.
					var scriptsList = new Array();
					for (var i = 0; i < scripts.length; i++) scriptsList.push(scripts[i]);
					self.__loadScriptsIntoElement(scriptsList, currentPageDiv);
					/*for (var i = 0; i < scripts.length; i++) {
						var script = document.createElement("script");
						script.src = scripts[i].getAttribute("src");
						//document.head.appendChild(script);
						currentPageDiv.appendChild(script);
					}*/

					// Do animations to switch the page.
					// In case the user clicks a second link before the animation for the
					// first animation is completed, remove the classes for the old animation
					// so that the new animation will go smoothly.
					$(currentPageDiv).removeClass(self.exitAnimation).removeClass("animated").addClass(self.entranceAnimation + " animated").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function() {
						// This line is optional. The classes will be removed next time a
						// page is loaded regardless, but this way, they're removed sooner.
						$(this).removeClass(self.entranceAnimation).removeClass("animated");
					});
					$(oldPageDiv).removeClass(self.entranceAnimation).removeClass("animated").addClass(self.exitAnimation + " animated").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function() {
						// This line is optional. The classes will be removed next time a
						// page is loaded regardless, but this way, they're removed sooner.
						$(this).removeClass(self.exitAnimation).removeClass("animated");
						// The new content is loaded in immediately, but the old content isn't
						// cleared until its exit animation is completed. Therefore, if the user
						// clicks a second link before the first animation is completed, the div
						// with the new content (which was the div with the old content for the
						// first click) is cleared once the animation for the first click is
						// completed. To prevent this from happening, we keep track of what the
						// current page was at the time this animation was initiated and compare
						// it with the current page now. If they are different, that means the
						// user clicked another link, and we do not clear the content.
						if (curPage == self.__currentPage)
							oldPageDiv.innerHTML = "";
					});
				} else if (xmlhttp.status == 404) {
					// If the page wasn't found, load the home page.
					// You could replace this with a 404 not found page.
					location.href = self.errorPage;
				}
			}
		};
		// Send the request.
		xmlhttp.send();
	}

	/**
	 * Sets up the container by making each child element
	 * positioned absolutely and to fill up the container.
	 * @param {HTMLDOMElement} el - the element to
	 *		turn into the page transition container
	 */
	this.__init = function(el)
	{
		this.__element = el;
		this.__element.style.position = "relative";
		var children = this.__element.children;
		for (var i = 0; i < children.length; i++) {
			var child = children[i];
			child.style.position = "absolute";
			child.style.width = "100%";
			child.style.height = "100%";
		}
	}

	/**
	 * Recursively loads a list of scripts into an element,
	 * with a delay between each loading to make sure the
	 * previous loading completed. Otherwise, since the
	 * files loaded simultaneously, a file might be loaded
	 * after the file it depends on.
	 * @param {Array} scripts - an array of the scripts to load
	 * @param {HTMLDOMElement} element - the HTML element to load
	 *		the scripts into. This is used so that it isn't necessary
	 *		to append the scripts to the document head, as that would
	 *		result in a build up of scripts in the head over time.
	 */
	this.__loadScriptsIntoElement = function(scripts, element)
	{
		if (scripts.length <= 0)
			return;

		// Create the script and set the source.
		var script = document.createElement("script");
		script.src = scripts[0].getAttribute("src");
		element.appendChild(script);
		// Remove first element in the list.
		scripts.shift();
		var self = this;
		// If there are still scripts to load, call this function again.
		if (scripts.length > 0)
			setTimeout(function() { self.__loadScriptsIntoElement(scripts, element) }, 100);
	}


	/**
	 * Parses a given string into an XML document so that
	 * the elements can be accessed.
	 * @param {String} xml - a string that can be parsed
	 *		into an XML document
	 * @return The XML document created from the string
	 */
	this.__parseXML = function(xml)
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

	this.__init(el);
}

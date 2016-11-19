var transformProp = Modernizr.prefixed('transform');

function Carousel3D (el, pages)
{
	// Public variables.
	this.errorPage = "Caro1.html";
	this.isHorizontal = true;
	this.isSwipable = true;
	this.pages = pages;

	// Private variables.
	this.__totalPanelCount = el.children.length;
	this.__rotation = 0;
	this.__element = el;
	this.__theta = 0;
	this.__previousCallbacks = [];
	this.__nextCallbacks = [];


	/**
	 * Loads a page with the given URL into the carousel
	 * @param {String} url - the URL of the page to load
	 */
	this.goToPage = function(url)
	{
		if (typeof url != "undefined") {
			var panelNum = this.pages.indexOf(url);
			if (panelNum >= 0) {
				this.turnToSide(panelNum);
				return;
			}
		}
		var el = this.__element.children[this.__getPanelNumberFromRotation(Math.round(this.__rotation))];
		this.__loadUrlIntoElement(this.errorPage, el);
	}


	/**
	 * Turns the carousel to face the given side.
	 * @param {int} sideNum - the side that should face the user
	 */
	this.turnToSide = function(sideNum)
	{
		this.__setRotation(this.__theta * sideNum * -1);
	}


	/**
	 * Turns to the next side.
	 */
	this.next = function()
	{
		this.__setRotation(this.__rotation - this.__theta);
		// Call all callbacks.
		this.__nextCallbacks.forEach(function(callback) {
			callback();
		});
	}


	/**
	 * Turns to the previous side.
	 */
	this.previous = function()
	{
		this.__setRotation(this.__rotation + this.__theta);
		// Call all callbacks.
		this.__previousCallbacks.forEach(function(callback) {
			callback();
		});
	}


	/**
	 * @return {String} - the URL of the page that would be loaded
	 *		if the next() method was called
	 */
	this.getNextPage = function()
	{
		var r = this.__toValidRotation(this.__rotation - this.__theta);
		return this.pages[this.__getPageNumberFromRotation(r)];
	}


	/**
	 * @return {String} - the URL of the page that would be loaded
	 *		if the previous() method was called
	 */
	this.getPreviousPage = function()
	{
		var r = this.__toValidRotation(this.__rotation + this.__theta);
		return this.pages[this.__getPageNumberFromRotation(r)];
	}


	/**
	 * @return {String} - the URL of the page that is currently facing
	 *		facing the user
	 */
	this.currentPage = function()
	{
		return this.pages[this.__getPageNumberFromRotation(this.__rotation)];
	}


	/**
	 * @return {int} - the number of the side that is currently facing
	 *		facing the user
	 */
	this.currentSide = function()
	{
		return this.__getPanelNumberFromRotation(this.__rotation);
	}

	/**
	 * Adds a function to be called whenever the carousel's
	 * previous method is called.
	 */
	this.addPreviousCallback = function(callback)
	{
		this.__previousCallbacks.push(callback);
	}

	/**
	 * Adds a function to be called whenever the carousel's
	 * next method is called.
	 */
	this.addNextCallback = function(callback)
	{
		this.__nextCallbacks.push(callback);
	}

	/**
	 * Gets rid of all callbacks for when the
	 * carousel's previuos method is called.
	 */
	this.clearPreviousCallbacks = function()
	{
		while (this.__previousCallbacks.length > 0)
			this.__previousCallbacks.pop();
	}

	/**
	 * Gets rid of all callbacks for when the
	 * carousel's next method is called.
	 */
	this.clearNextCallbacks = function()
	{
		while (this.__nextCallbacks.length > 0)
			this.__nextCallbacks.pop();
	}

	/**
	 * Initiate the carousel by adding swipe interaction
	 * to each panel.
	 */
	this.__init = function()
	{
		this.__theta = 360 / this.__totalPanelCount;

		for (var i = 0; i < this.__totalPanelCount; i++ ) {
		    var panel = this.__element.children[i];
			// Add swiping interaction to each panel, so that the
			// user can swipe through the panels.
		    this.__addSwipeInteractionToPanel(panel);
		}
		//this.__setRotation(0);
	}



	/**
	 * @param {double} rotation - the desired rotation of the carousel
	 * @return {int} the number of the panel that will be facing the user
	 *		if the carousel is turned to that rotation
	 */
	this.__getPanelNumberFromRotation = function(rotation)
	{
		// Because the carousel starts at 0deg and rotates clockwise,
		// the rotation becomes -theta, -2*theta, -3*theta, etc. as
		// it goes to the next page. Therefore, the first panel should
		// be shown not when rotation is theta, but when it is -theta.
		var pageNum = Math.round(-rotation / this.__theta);
		return pageNum % this.__totalPanelCount;
	}


	/**
	 * @param {double} rotation - the desired rotation of the carousel
	 * @return {int} the number of the page that will be facing the user
	 *		if the carousel is turned to that rotation
	 */
	this.__getPageNumberFromRotation = function(rotation)
	{
		// Because the carousel starts at 0deg and rotates clockwise,
		// the rotation becomes -theta, -2*theta, -3*theta, etc. as
		// it goes to the next page. Therefore, the first panel should
		// be shown not when rotation is theta, but when it is -theta.
		return Math.round(-rotation / this.__theta);
	}


	/**
	 * @param {int} panelNum - the number of the panel that should
	 *		be facing the user
	 * @return {double} - the rotation the carousel must have for
	 *		that panel to be facing the user
	 */
	this.__getRotationFromPanelNumber = function(panelNum)
	{
		return panelNum * this.__theta;
	}


	/**
	 * Returns a number between -360 and 0
	 * @param {double} rotation - the raw rotation
	 * @return {double} - a valid rotation
	 */
	this.__toValidRotation = function(rotation)
	{
		const ROTATION_OF_LAST_PAGE = this.__theta * this.pages.length;
		if (rotation % this.__theta != 0)
			return 1;
		if (rotation > 0)
			return -(ROTATION_OF_LAST_PAGE - rotation);
		if (rotation <= -ROTATION_OF_LAST_PAGE)
			return 0;
		return rotation;
	}


	/**
	 * Loads the contents of the given page into the given
	 * side of the cube and rotates to that side.
	 * @param {String} page - the URL of the page to load
	 */
	this.__loadUrlIntoElement = function(url, element)
	{
		var xmlhttp = new XMLHttpRequest();
		// Get the contents of the page.
		var self = this;
		xmlhttp.open("GET", url, true);
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4) {
				if (xmlhttp.status == 200) {
					// Save the response text so we can set it during the animation.
					var newContent = xmlhttp.responseText;
					var xmlDoc = self.__parseXML(newContent);
					var scripts = xmlDoc.getElementsByTagName("script");

					// Load in the scripts from the page.
					// The function that is called spaces out the loading
					// of the scripts so that they load in the correct
					// order.
					var scriptsList = new Array();
					for (var i = 0; i < scripts.length; i++) scriptsList.push(scripts[i]);
					self.__loadScriptsIntoElement(scriptsList, element);

					// Load in the scripts from the page.
					/*for (var i = 0; i < scripts.length; i++) {
						var script = document.createElement("script");
						script.src = scripts[i].getAttribute("src");
						element.appendChild(script);
					}*/

					element.innerHTML = newContent;
				} else if (xmlhttp.status == 404) {
					// If the page wasn't found, load the home page.
					// You could replace this with a 404 not found page.
					var el = this.__element.children[this.__getPanelNumberFromRotation(Math.round(this.__rotation))];
					this.__loadUrlIntoElement(this.errorPage, el);
				}
			}
		};
		// Send the request.
		xmlhttp.send();
	}


	/**
	 * Rotates the carousel to a certain number of degrees.
	 * @param {double} rotation - the degrees to rotate the carousel to
	 */
	this.__setRotation = function(rotation)
	{
		var rotateFn = this.isHorizontal ? 'rotateY' : 'rotateX';

		// Figure out the right rotation. If the
		// rotation is not valid, don't change the
		// rotation.
		if (this.__toValidRotation(rotation) > 0)
			return;
		this.__rotation = this.__toValidRotation(rotation);

		var curPanel = this.__getPanelNumberFromRotation(this.__rotation);

		// do some trig to figure out how big the carousel
		// is in 3D space
		var panelSize = this.__element[ this.isHorizontal ? 'offsetWidth' : 'offsetHeight' ];
		this.radius = Math.round((panelSize / 2) / Math.tan( Math.PI / this.__totalPanelCount ));

		// Rotate each of the panels.
		for (var i = 0; i < this.__totalPanelCount; i++ ) {
			var panel = this.__element.children[i];

			var angle = this.__theta * i;

			// Make the panel visible only if it is
			// the current panel.
			// Comment out these four lines if you
			// want all sides to be visible.
			if (i == curPanel)
				panel.style.opacity = 1;
			else
				panel.style.opacity = 0;

			// I didn't see a point in this next line, and it was
			// messing up styling. However, I left it in case it
			// was there for an actual reason.
			//panel.style.backgroundColor = 'inherit';

			// Rotate panel, then push it out in 3D space
			// Handles if count < 3. Automates the panel size

			// Resolves pixelation on Z-Index
			panel.style[ transformProp ] = rotateFn + '(' + angle + 'deg) translateZ(' + this.radius + 'px)';
		}

		// push the carousel back in 3D space,
		// and rotate it
		// (handles pixelation of z-index)
	 	this.__element.style[ transformProp ] = 'translateZ(-' + this.radius + 'px) ' + rotateFn + '(' + this.__rotation + 'deg)';
		this.__loadPageAtRotation(this.__rotation);
	}


	/**
	 * Loads the page into the panel at the given rotation.
	 * @param {double} rotation - the rotation panel of the
	 *		carousel to load the page for
	 */
	this.__loadPageAtRotation = function(rotation)
	{
		var panelNum = this.__getPanelNumberFromRotation(Math.round(this.__rotation));
		var pageNum = this.__getPageNumberFromRotation(Math.round(this.__rotation));
		if (panelNum >= 0) {
			var element = this.__element.children[panelNum];
			var url = this.pages[pageNum];
			this.__loadUrlIntoElement(url, element);
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


	/**
	 * Add swiping interaction by setting press, move, and release
	 * events for mouse and touch interaction.
	 * @param {HTMLDomElement} panel - the panel to add swiping
	 *		interaction to
	 */
	this.__addSwipeInteractionToPanel = function(panel)
	{
		var carousel = this;
		isPressed = false;

		var pressEvent = function(event) {
			if (carousel.isSwipable) {
				startTime = new Date();
				isPressed = true;
				if (typeof(event.touches) != 'undefined') {
					startX = event.touches[0].pageX;
					startY = event.touches[0].pageY;
				} else {
					startX = event.pageX;
					startY = event.pageY;
				}
				curX = startX;
				curY = startY;
			}
		};
		  
		var moveEvent = function(event) {
			//console.log('mouse')
			if (carousel.isSwipable) {
			//console.log('mouse is swipable')
				if (isPressed) {
			//console.log('mouse is pressed')
					const X_THRESHOLD = 100;
					const Y_THRESHOLD = 100;
					const TIME_THRESHOLD = 100;

					if (typeof(event.touches) != 'undefined') {
						curX = event.touches[0].pageX;
						curY = event.touches[0].pageY;
					} else {
						curX = event.pageX;
						curY = event.pageY;
					}
					var elapsedTime = new Date() - startTime;
					
					// Determine if the motion should be considered swipe.
					// It must move enough in the x direction, not too much
					// in the y direction, and it must happen within a short
					// amount of time, assuming the carousel is horizontal.
					// If it is vertical, same, but switch x and y.
					var isHorizontalSwipe = (Math.abs(curX - startX) > X_THRESHOLD) && (Math.abs(curY - startY) < Y_THRESHOLD);
					var isVerticalSwipe = (Math.abs(curX - startX) < X_THRESHOLD) && (Math.abs(curY - startY) > Y_THRESHOLD);
					if (((carousel.isHorizontal && isHorizontalSwipe) || (!carousel.isHorizontal && isVerticalSwipe))
						&& (elapsedTime < TIME_THRESHOLD)) {
						isPressed = false;
						if ((isHorizontalSwipe && (curX > startX))
							|| (isVerticalSwipe && (curY < startY))) {
							// Swipe right/down.
							carousel.previous();
						} else {
							// Swipe left/up.
							carousel.next();
						}
					}
				}
			}	
		};

		var releaseEvent = function() {
			if (carousel.isSwipable)
				isPressed = false;
		};

		panel.addEventListener("mousedown", pressEvent);
		panel.addEventListener("mousemove", moveEvent);
		panel.addEventListener("mouseup", releaseEvent);
		panel.addEventListener("touchstart", pressEvent);
		panel.addEventListener("touchmove", moveEvent);
		panel.addEventListener("touchend", releaseEvent);
	}


	this.__init();
}
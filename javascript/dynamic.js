		<!--
			// This function is currently called from the button's onclick event.
			// The first parameter is the URL of the page to load. The second is
			// the ID of the element to load the content into.
			function loadPageFromUrlIntoElement(url, id)
			{
				var xmlhttp = new XMLHttpRequest();
				// Get the contents of the page.
				xmlhttp.open("GET", url, true);
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4) {
						if (xmlhttp.status == 200) {
							// Set the contents of the element given by id.
							var xmlDoc = parseXML(xmlhttp.responseText);
							var scripts = xmlDoc.getElementsByTagName("script");
			
							for (var i = 0; i < scripts.length; i++) {
								var script = document.createElement("script");
								script.src = scripts[i].getAttribute("src");
								document.head.appendChild(script);
							}
							document.getElementById(id).innerHTML = xmlhttp.responseText;
						} else if (xmlhttp.status == 404) {
							// Do something if the page was not found.
						}
					}
				}
				// Send the request.
				xmlhttp.send();
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

		//-->
	

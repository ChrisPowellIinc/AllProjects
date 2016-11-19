<!--
			/**
			 * Encapsulates a color in the RGB format for easy
			 * conversion to CSS background color and access
			 * to red, green, and blue values.
			 */
			function RGBColor(r, g, b){
				this.red = r;
				this.green = g;
				this.blue = b;
				this.toCSSBackgroundString = function(){
					return "rgb(" + this.red + "," + this.green + "," + this.blue + ")";
				}
			}
			
			
			// Some global variables.
			var averageRating = [];
			var numVotes = [];
			var curRating = [];
			
			/*
			Colors from Stat_Gradients.html
			Start #1e5799
			Gradient1 #4496B6
			Gradient2 #D3D1F8
			Gradient3 #bfffff
			Gradient4 #BFFFDF
			Gradient5 #BFFFBF
			Gradient6 #EFFFBF
			Gradient7 #FFEFBF
			Gradient8 #FFDFBF
			Gradient9 #FFCFBF
			Gradient10 #FFBFBF
			*/
			var startColor = new RGBColor(30, 87, 153);
			var endColors = [
				new RGBColor(68, 150, 182),
				new RGBColor(211, 209, 248),
				new RGBColor(191, 255, 255),
				new RGBColor(191, 255, 223),
				new RGBColor(191, 255, 191),
				new RGBColor(239, 255, 191),
				new RGBColor(255, 239, 191),
				new RGBColor(255, 223, 191),
				new RGBColor(255, 207, 191),
				new RGBColor(255, 191, 191)
			];
            
            $(document).ready(function(){
                $('.stat-container').mouseout(hideStatInfo);
                $('.stat-container').mouseover(showStatInfo);
                $('.gradient-container').mousemove(adjustRating);
                $('.gradient-container').mouseup(setRating);
                $('.gradient-container').mouseout(resetStat);
                
                
            });
            $(window).load(function(){
                // number of elements in stat container
                var numStatContainers = $('.stat-container').length;
                for(var i=0; i<numStatContainers;i++){
                    // initially put 0 in all the arrays
                    averageRating.push(0.0);
                    numVotes.push(0);
                    curRating.push(0.0);
                }
                setupStat();
                resetStat();
            });

			
			/**
			 * Makes the stat info bar visible by moving it upward and change the gradient
			 * to a moving bar.
			 */
			function showStatInfo()
			{
                var statinfo = this.children[0].id;
				document.getElementById(statinfo).style.top='-23px';
			}
            
            
			
			/**
			 * Makes the stat info bar invisible by moving it downward and change the moving
			 * bar back into a gradient.
			 */
			function hideStatInfo()
			{
                var statinfo = this.children[0].id;
                var bar = this.children[1].children[1].id;
				document.getElementById(statinfo).style.top = '0px'
				document.getElementById(bar).className = "gradient-bar";
				setupStat();
			}
			
			/**
			 * Adjusts the width of the gradient bar and displays the rating
			 * corresponding to the user's mouse position.
			 */
			function adjustRating(event)
			{
                
                var gradientContainer = this.id;
                var bar = this.children[1].id;
                var statcontainer = this.parentNode.id;
                var rate = this.children[0].id;
            
                
				// Change the gradient bar from a gradient to a line.
				document.getElementById(bar).className = "rate-line";
				
				// Figure out where the mouse is in the stat widget and adjust the size
				// of the gradient and the value of the rating.
				var mouseX = event.pageX - getObjectX(document.getElementById(statcontainer));
            
                document.getElementById(bar).style.width = mouseX + "px";
				var rating = calcRatingFromMouseX(mouseX,gradientContainer);
				var endColor = calcEndColorFromRating(rating);
				setBackgroundGradientForElement(document.getElementById(bar), startColor, endColor);
				document.getElementById(rate).innerHTML = rating.toFixed(1);
                
			}
            
			
			/**
			 * Sets the current rating based on where the user clicks in the widget.
			 * NOTE: Need to include an AJAX request to add the new rating to the database.
			 */
			function setRating(event)
			{
                
                var gradientContainer = this.id;
                var bar = this.children[1].id;
                var statcontainer = this.parentNode.id;
                var rate = this.children[0].id;
                var pos = this.id.slice(-1) - 1;
                
				// Calculate the rating the user just made.
				var mouseX = event.pageX - getObjectX(document.getElementById(statcontainer));
                
				curRating[pos] = calcRatingFromMouseX(mouseX, gradientContainer);
            
                total = averageRating[pos] * numVotes[pos];
                total += curRating[pos];
                numVotes[pos] ++;
                averageRating[pos] = total/numVotes[pos];
                
				// Update the number of votes and the average rating.
				setupStat();
				// Show the gradient bar as a gradient.
				document.getElementById(bar).className = "gradient-bar";
				var endColor = calcEndColorFromRating(curRating[pos]);
				 setBackgroundGradientForElement(document.getElementById(bar), startColor, endColor);
                resetStat();
			}
			

            
			/**
			 * Sets the gradient bar back to the size of the average,
			 * rating and indicates the user can set the rate again.
			 */
			function resetStat()
			{
                var gradientContainer = document.getElementsByClassName("gradient-container");
                
                for(var i =0; i<gradientContainer.length;i++){
                    var bar = gradientContainer[i].children[1].id;
                
                    document.getElementById(bar).style.width = calcMouseXFromRating(averageRating[i], gradientContainer[i].id) + "px";
                    
                    var endColor = calcEndColorFromRating(averageRating[i]);
                    setBackgroundGradientForElement(document.getElementById(bar), startColor, endColor);
                }
			}
			
			/**
			 * Converts an x coordinate to a rating based on the width of the
			 * gradient container.
			 * @param {double} x - the x coordinate to convert to a rating
			 * @return {double} the rating corresponding to the x coordinate
			 */
			function calcRatingFromMouseX(x, elementName)
			{
				// Multiply by 10.1 so that a rating of 10.0 is possible.
				// Add 1 to fix an error I don't fully understand, where if you move the mouse very slowly
				// from the right, the gradient will expand to be the size of the bar, but it won't update
				// the rating to 10.0 (it will still say the average rating).
				return x / parseInt(document.getElementById(elementName).offsetWidth + 1) * 10.1;
			}
			
			/**
			 * Converts a rating to an x coordinate based on the width of the
			 * gradient container.
			 * @param {double} r - the rating to convert to an x coordinate
			 * @return {double} the x coordinate corresponding to the rating
			 */
			function calcMouseXFromRating(r, elementName)
			{
				// Multiply by 10.1 to make up for the higher rating gotten from the calcRatingFromMouseX.
				// Add one to correspond to the rating from calcRatingFromMouseX.
				return r * parseInt(document.getElementById(elementName).offsetWidth + 1) / 10.1;
			}
			
			/**
			 * Sets the average rating and number of votes.
			 * NOTE: Should query database (currently just fills with random numbers).
			 */
			function setupStat()
			{
				/////////////////////////////////////////////////////
				// This part should be replaced by database queries.
				/////////////////////////////////////////////////////
				//averageRating = 5.2;
				//numVotes = 4650;
				/////////////////////////////////////////////////////
				// Display the rating and number of votes in the widget.
                var gradientContainer = document.getElementsByClassName("gradient-container");
                var stat = document.getElementsByClassName("stat-info");
                
                for(var i =0; i<gradientContainer.length;i++){
                    var rating = gradientContainer[i].children[0].id;
                    var statinfo = stat[i].children[0].id;
                    document.getElementById(rating).innerHTML = averageRating[i].toFixed(1);
				document.getElementById(statinfo).innerHTML = numVotes[i].toLocaleString();
                }
			}
			
			/**
			 * Determines the x position of an HTML element on the page.
			 * Based on code from: http://www.quirksmode.org/js/findpos.html.
			 * @param obj - the object to get the x coordinate from
			 * @return {double} the x coordinate of the object
			 */
			function getObjectX(obj)
			{
				var objX = 0;
				do {
					objX += obj.offsetLeft;
				} while (obj = obj.offsetParent);
				return objX;
			}
			
			/**
			 * Calculates and returns the end color of the gradient
			 * given the rating.
			 * @param {double} rating - the rating to get the color for
			 * @return {RGBColor} the end color of the gradient
			 */
			function calcEndColorFromRating(rating)
			{

                // Get the two colors that the color will be between.
				var lowColor = endColors[Math.floor(rating)];
				var highColor = endColors[Math.floor(rating)];
				
				// This is the position between the two colors.
				// In other words, if the rating is 4.2, we want 0.2
				// of the high color and 0.8 of the low color.
				var pos = rating - Math.floor(rating);
				
				var r = (lowColor.red * (1.0 - pos)) + (highColor.red * pos);
				var g = (lowColor.green * (1.0 - pos)) + (highColor.green * pos);
				var b = (lowColor.blue * (1.0 - pos)) + (highColor.blue * pos);
				
				return new RGBColor(r, g, b);
			}
			
			/**
			 * Sets the background of the given element to a gradient
			 * with the given start and end colors.
			 * @param elem - the element to set the background of
			 * @param {RGBColor} start - the start color
			 * @param {RGBColor} end - the end color
			 */
			function setBackgroundGradientForElement(elem, start, end)
			{
				var startRGB = start.toCSSBackgroundString();
				var endRGB = end.toCSSBackgroundString();
				
				elem.style.background = endRGB; // Old browsers
				elem.style.background = "-moz-linear-gradient(left, " + startRGB + " 0%, " + endRGB + " 100%)"; // FF3.6+
				elem.style.background = "-webkit-gradient(linear, left top, right top, color-stop(0%," + startRGB + "), color-stop(100%," + endRGB + "))"; // Chrome,Safari4+
				elem.style.background = "-webkit-linear-gradient(left, " + startRGB + " 0%," + endRGB + " 100%)"; // Chrome10+,Safari5.1+
				elem.style.background = "-o-linear-gradient(left, " + startRGB + " 0%," + endRGB + " 100%)"; // Opera 11.10+
				elem.style.background = "-ms-linear-gradient(left, " + startRGB + " 0%," + endRGB + " 100%)"; // IE10+
				elem.style.background = "linear-gradient(to right, " + startRGB + " 0%," + endRGB + " 100%)"; // W3C
				elem.style.filter = "progid:DXImageTransform.Microsoft.gradient( startColorstr='" + startRGB + "', endColorstr='" + endRGB + "',GradientType=1 )"; // IE6-9
			}
		-->
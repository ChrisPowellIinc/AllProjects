	var yPos, yPosdos;
	function yScroll(){
	
		yPos = document.getElementById("crashtest").scrollTop;
		yPosdos = document.getElementById("crashtest").scrollTop;

		if(yPos > 90){
			document.getElementById('crashtest').className = "appply2";
		} else {
			document.getElementById('crashtest').className = "appply";
		}

	}
	document.getElementById("crashtest").addEventListener("scroll", yScroll);

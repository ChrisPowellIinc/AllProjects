<?php
	include_once("php_includes/check_login_status.php");
	include_once("php_includes/user_data.php");
	include_once("php_includes/friend_block_data.php");
	include_once("php_includes/friend_block_buttons.php");
	include_once("php_includes/friend_list_display.php");
	include_once("php_includes/coverxrandom_photo.php");
	
?>


<html xmlns="http://www.w3.org/1999/xhtml"><head>
<style type="text/css">
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
		margin: 0;
		padding: 0;
		height: 100%;
		width: 100%;
		}
ol, ul {
	list-style: none;
	font-family: inherit;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}		

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	min-height: 100%;
}
html { 
    height:100%;
}
div.cube div:nth-child(1) {
	background-size: cover;
	background-image: url(<?php echo $profile_pic; ?>);
}
div.cube div:nth-child(2) {
	background-color:red;
}
div.cube div:nth-child(3) {
	background-color:green;
}
div.cube div:nth-child(4) {
	background-color:orange;
}
div.cube div:nth-child(5) {
	background-color:brown;
}
div.cube div:nth-child(6) {
	background-color:teal;
}

	
</style>
<link rel="stylesheet" href="assets/cubeProfile.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/carousel3d.css" />
<script type="text/javascript" src="javascript/Carousel3D.js"></script>
<script type="text/javascript" src="loadJsonFromUrlIntoCube.js"></script>

<script type="text/javascript">
		/**
		 * If the portion of the URL after the pound sign
		 * changes, load in the new page that is indicated.
		 */
		window.addEventListener("hashchange", function() {
			var page = location.href.split("#")[1];
			carousel.goToPage(page);
		});

		/**
		 * When the page loads, load in the page indicated
		 * by the text after the pound sign.
		 */
		window.addEventListener("load", function() {
			var page = location.href.split("#")[1];
			var caroPages = [ "page1.php" ];
			carousel = new Carousel3D(document.getElementById("carousel"), caroPages);
			carousel.goToPage(page);
			setTimeout(function() { document.body.className = "ready"; }, 100);
		});
		</script>

</head>

<body>

<div id="cube-container1" class="cube-container">
            <div class="cube">
                <div id="container">
                
                <div class="caro-container">
                <div id="carousel" class="carousel3d" style="background-color: transparent; font-family: inherit;">
                    <figure></figure>
                </div>
                </div>
            </div>
        </div>
        </div>
</body>
</html>
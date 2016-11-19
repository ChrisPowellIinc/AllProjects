<?php
include_once("php_includes/check_login_status.php");
if($user_ok == true){
	header("location: user.php?u=".$_SESSION["username"]);
    exit();
}
?>




<?php
// AJAX CALLS THIS LOGIN CODE TO EXECUTE
if(isset($_POST["e"])){
	// CONNECT TO THE DATABASE
	include_once("php_includes/db_conx.php");
	// GATHER THE POSTED DATA INTO LOCAL VARIABLES AND SANITIZE
	$e = mysqli_real_escape_string($con, $_POST['e']);
	$p = md5($_POST['p']);
	// GET USER IP ADDRESS
    $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
	// FORM DATA ERROR HANDLING
	if($e == "" || $p == ""){
		echo "login_failed";
        exit();
	} else {
	// END FORM DATA ERROR HANDLING
		$sql = "SELECT id, username, password FROM users WHERE email='$e' AND activated='1' LIMIT 1";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_row($query);
		$db_id = $row[0];
		$db_username = $row[1];
        $db_pass_str = $row[2];
		if($p != $db_pass_str){
			echo "login_failed";
            exit();
		} else {
			// CREATE THEIR SESSIONS AND COOKIES
			$_SESSION['userid'] = $db_id;
			$_SESSION['username'] = $db_username;
			$_SESSION['password'] = $db_pass_str;
			setcookie("id", $db_id, strtotime( '+30 days' ), "/", "", "", TRUE);
			setcookie("user", $db_username, strtotime( '+30 days' ), "/", "", "", TRUE);
    		setcookie("pass", $db_pass_str, strtotime( '+30 days' ), "/", "", "", TRUE); 
			// UPDATE THEIR "IP" AND "LASTLOGIN" FIELDS
			$sql = "UPDATE users SET ip='$ip', lastlogin=now() WHERE username='$db_username' LIMIT 1";
            $query = mysqli_query($con, $sql);
			echo $db_username;
		    exit();
		}
	}
	exit();
}
?>
<?php
include_once("php_includes/usernamecheck.php"); 
?>
<?php
include_once("php_includes/signuppost.php"); 
?>



<?php
// It is important for any file that includes this file, to have
// check_login_status.php included at its very top.

$profile_pic_current_user_display = "";

$envelope = '<div id="Menu5" >  
<section id="options" style="height:100%; width:100%;" >
    <div id="flip" class="NoNotification"></div>
  </section>
</div>
';
$loginLink = '<form id="loginform" onSubmit="return false;">
<div id="UsrnameControls">
<input type="text" value="Email" id="email" onFocus="emptyElementn(\'SearchFeild\')" maxlength="88" class="Search" />
</div>
<div id="PasswordControls">
<input type="password" id="password" onFocus="emptyElement(\'status\')" maxlength="100" name="Password" value="Password" class="Search" />
</div>
<div id="ContinueLogin" class="SignUpButton" onClick="login()"></div>
 </form>';
if($user_ok == true) {
	$sql = "SELECT notescheck FROM users WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_row($query);
	$notescheck = ("");
	
	$sql = "SELECT id FROM notifications WHERE username='$log_username' AND date_time > '$notescheck' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$numrows = mysqli_num_rows($query);
	
	$sql = "SELECT id FROM friends WHERE user2 = '$log_username' AND accepted = '0' AND datemade > '$notescheck = $row[0];' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$numrows1= mysqli_num_rows($query);
	
	$sql = "SELECT * FROM notifications WHERE username = '$log_username' AND date_time > '$notescheck' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$numrows = mysqli_num_rows($query);
	
	$sql = "SELECT * FROM friends WHERE user2 = '$log_username' AND accepted = '0' AND datemade > '$notescheck' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$numrows1= mysqli_num_rows($query); 

	
	if ($numrows == 0 && $numrows1 == 0) {
		$envelope = '<a href="notifications.php"><div id="Menu5" >  
<section id="options" style="height:100%; width:100%;" >
    <div id="flip" class="OldNotification"></div>
  </section>
</div></a>
';
    } else {
		$envelope = '<a href="notifications.php"><div id="Menu5" >  
<section id="options" style="height:100%; width:100%;" >
    <div id="flip" class="NewNotification"></div>
  </section>
</div></a>
';
	}
    $loginLink = '	<a href="user.php?u='.$log_username.'"><div id="usernametopimage">'.$log_username.' - Profile</div></a>	
 					<a href="logout.php"><div id="logoutheader"></div></a>';
}


$sql = "SELECT * FROM users WHERE username='$log_username' AND activated='1' LIMIT 1";
$current_user_query = mysqli_query($con, $sql);


while ($row = mysqli_fetch_array($current_user_query, MYSQLI_ASSOC)) {
	$profile_pic_current_user_display = $row["avatar"];
}

$profile_pic_current_user = "php_includes/user/$log_username/$profile_pic_current_user_display";

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

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
	line-height: 1;
}
.TextHeaderA {
opacity: 1;
font-size: 23px;
line-height: 43px;
font-weight: bold;
color: #99866D;
text-align: left;
font-family: 'Raleway', Helvetica, Arial, sans-serif;
}

ol, ul {
	list-style: none;
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
			
a:link {
	text-decoration: none;
	color: inherit;
}
a:visited {
	text-decoration: none;
	color: inherit;
}
a:hover {
	text-decoration: none;
	color: inherit;
}
a:active {
	text-decoration: none;
	color: inherit;
}
#nav ul li:hover {
}
.CMSon{
top: 0%;
left: 0%;
width: 100%;
z-index: 98;
height: 100%;}
.CMSoff{
	top: 0%;
	left: 0%;
	z-index: 102;
	width: 100%;
	height: 100%;
}


    .container {
      width: 100%;
      height: 100%;
      position: relative;
      -webkit-perspective: 800px;
         -moz-perspective: 800px;
           -o-perspective: 800px;
              perspective: 800px;
    }
#BG1 {
width: 100%;
height: 100%;
position: absolute;
background-size: cover;
left: 0%;
top: 0px;
z-index: 2;
opacity: 1;
}
#BG2 {
	background: #FFF;
	background: -moz-linear-gradient(left,  #627d4d 0%, #111F05  100%);
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,#627d4d), color-stop(100%,#111F05 ));
	background: -webkit-linear-gradient(left,  #627d4d 0%,#111F05  100%);
	background: -o-linear-gradient(left,  #627d4d 0%,#111F05  100%);
	background: -ms-linear-gradient(left,  #627d4d 0%,#111F05  100%);
	background: linear-gradient(to right,  #ECE7CD 0%,#111F05  100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#627d4d', endColorstr='#111F05 ',GradientType=1 );
	z-index: 1;
	width: 100%;
	height: 100%;
	position: absolute;
	left: 0px;
	top: 0px;
	opacity: 0;
}
.Text5 {
	font-family: "Open Sans";
	font-size: 13px;
	line-height: 24px;
	color: #99866D;
}
#Baseline {
	width: 100%;
	height: 5%;
	background-color: #000;
	opacity: .9;
	position: absolute;
	top: 95%;
	z-index: 99999;
}
#container6 {
    position: fixed;
    top: 0vh;
    right: 0vw;
    background-color: rgba(255, 255, 255, 0.86);
    width: 42vw;
    height: 4vh;
    z-index: 9999999;
    box-shadow: 0px 1px 5px #CCC;
    -webkit-transition: all 300ms ease-in-out 0s;
    -moz-transition: all 300ms ease-in-out 0s;
    -ms-transition: all 300ms ease-in-out 0s;
    -o-transition: all 300ms ease-in-out 0s;
    transition: all 300ms ease-in-out 0s;
    border-radius: .3vw;
}
#spinHoverWhite2 {
    background-image: url(images/SoulStat.fw.png);
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
}
#M1logo {
    background-repeat: no-repeat;
    background-position: center center;
    background-size: contain;
    position: absolute;
    border-radius: 50%;
    overflow: hidden;
    /* border: 1px solid #09dca2; */
    width: 4vh;
    height: 4vh;
    /* border-radius: 2.3vh; */
    /* border-bottom-left-radius: .3vw; */
    /* top: .5vh; */
    left: -1vw;
    -webkit-transition: all 300ms ease-in-out 0s;
    -moz-transition: all 300ms ease-in-out 0s;
    -ms-transition: all 300ms ease-in-out 0s;
    -o-transition: all 300ms ease-in-out 0s;
    transition: all 300ms ease-in-out 0s;
    background: rgb(15,73,92);
    background-color: #004879;
    transform: translateZ(0px);
}


</style>
<link rel="stylesheet" href="Fonts/fonts.css" type="text/css">
<link rel="stylesheet" href="css/MenuDrop/Menu.css" type="text/css">
<link rel="stylesheet" type="text/css" href="AE/css/statcss.css">
<link rel="stylesheet" href="cssx/normalize.css" type="text/css">
<link rel="stylesheet" href="cssx/landing.css" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/Tabs.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/sighnuphead.css" rel="stylesheet" type="text/css" media="screen">

<!--- StylesEnd --> 
<script type="text/javascript">
    (function() {
        var link_element = document.createElement("link"),
            s = document.getElementsByTagName("script")[0];
        if (window.location.protocol !== "http:" && window.location.protocol !== "https:") {
            link_element.href = "http:";
        }
        link_element.href += "//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900";
        link_element.rel = "stylesheet";
        link_element.type = "text/css";
        s.parentNode.insertBefore(link_element, s);
    })();
</script>
<script>
var colors = new Array(
  [62,35,255],
  [60,255,60],
  [255,35,98],
  [45,175,230],
  [255,0,255],
  [255,128,0]);

var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.002;

function updateGradient()
{
  
  if ( $===undefined ) return;
  
var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('#M1logo').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}

setInterval(updateGradient,10);
</script>



<script src="javascript/backgroundimagechanger.js"></script>
<script type="text/javascript" src="pano2vr_player.js"></script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="javascript/mx/dropdowns1.js"></script>
<script src="javascript/ajax.js"></script>
<script src="javascript/functionloginfront.js"></script>
<script src="AE/javascript/statjs.js"></script>
<script src="javascript/prefixfree.js"></script>
<script src="javascript/utils.js"></script>
<script src="javascript/restrictform.js"></script>
<script src="javascript/restrictformmusic.js"></script>

        <script type="text/javascript">
            (function() {
                var link_element = document.createElement("link"),
                    s = document.getElementsByTagName("script")[0];
                if (window.location.protocol !== "http:" && window.location.protocol !== "https:") {
                    link_element.href = "http:";
                }
                link_element.href += "//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900";
                link_element.rel = "stylesheet";
                link_element.type = "text/css";
                s.parentNode.insertBefore(link_element, s);
            })();
        </script>

	    <link href="new/spinnable_carousel.css" rel="stylesheet" type="text/css" />
		<link href="new/carousel3d.css" rel="stylesheet" type="text/css" />

		<script src="new/minimal.js" type="text/javascript" charset="utf-8"></script>

		<script src="new/loadJson.js" type="text/javascript"></script>
		<script src="new/Carousel3D.js" type="text/javascript"></script>
		<script src="new/NumberAnimation.js" type="text/javascript"></script>
		<script src="new/Cursor.js" type="text/javascript"></script>
		<script src="new/Vector.js" type="text/javascript"></script>
		<script src="new/SpinnableCarousel.js" type="text/javascript" charset="utf-8"></script>
<link href="new/css/cubecss.css" rel="stylesheet" type="text/css">

<script src="new/javascript/trigger1.js"></script>
<script src="new/dynamic.js"></script>
      
		<script type="text/javascript">
		/**
		 * If the portion of the URL after the pound sign
		 * changes, load in the new page that is indicated.
		 */
		window.addEventListener("hashchange", function() {
			var page = location.href.split("#")[1];
			// These two will be equal if the user swipes or
			// uses the next or previous buttons. In that case,
			// the carousel turns first, then the URL is updated.
			// In that case, we don't want the page to load twice;
			if (carousel.currentPage() != page)
				carousel.goToPage(page);
		});

		/**
		 * When the page loads, load in the page indicated
		 * by the text after the pound sign.
		 */
		window.addEventListener("load", function() {
			// Add touch event so that links work in iPhone/iPad as well.
			// Based on idea from:
			// http://stackoverflow.com/questions/20204255/anchor-tag-not-working-in-safari-ios-for-iphone-ipod-touch-ipad
			var links = document.getElementsByTagName("a");
			for (var i = 0; i < links.length; i++) {
				links[i].addEventListener("touchstart", function() { window.open(this, "_self"); });
			}

			var page = location.href.split("#")[1];
			var caroPages = [ "beta1.html", "page2.html", "page3.html" ];
			carousel = new Carousel3D(document.getElementById("carousel"), caroPages);
			carousel.goToPage(page);
			location.href = "#" + carousel.currentPage();

			// Add callbacks, so that swiping (or pushing next/previous buttons)
			// will update the URL as well.
			var callback = (function() {
				location.href = "#" + carousel.currentPage();
			});
			carousel.addNextCallback(callback);
			carousel.addPreviousCallback(callback);

			setTimeout(function() { document.body.className = "ready"; }, 100);
		});
		</script>
<script type="text/javascript">
/**
 * When the page loads, load in the page indicated
 * by the text after the pound sign.
 */
window.addEventListener("load", function() {
    // Add touch event so that links work in iPhone/iPad as well.
    // Based on idea from:
    // http://stackoverflow.com/questions/20204255/anchor-tag-not-working-in-safari-ios-for-iphone-ipod-touch-ipad
    var links = document.getElementsByTagName("a");
    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener("touchstart", function() { window.open(this, "_self"); });
    }

    var caroPages = [ "beta1.html" ];
    carousel = new Carousel3D(document.getElementById("carousel"), caroPages);
    carousel.goToPage("beta1.html");

    setTimeout(function() { document.body.className = "ready backgroundcolorchange"; }, 100);
});

</script>



</head>

<body>
							<div id="container">
			
            
			<div class="carousel3d-container" style="width:100%; height: 100%; position: absolute; z-index: 10; overflow: hidden;">
				<div id="carousel" class="carousel3d" style="width:100%; height: 100%;">
					<figure>

                    

                    </figure>
				</div>
			</div>
		</div>

<div id="ContainAll" class="CMSon">
  <div id="BG2"></div>   		
<div id="BG1"></div>


			


    
    
</div>
<div id="container6">
			<div id="M1logo">
            <div id="spinHoverWhite2"></div>
            </div>
</div>

<div id="signin-box" style="top: 115vh;     margin-bottom: 8vh;">
    	  	<?php echo $loginLink; ?>
    <div id="SearchFeild">
        	<input name="Search" type="text" class="Search" />
    </div>

    </div>
</body>
</html>

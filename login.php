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
</head>
<style type="text/css">
#LoginFormbox {
	width: 80%;
	height: 339px;
	z-index: 7;
	background-color: #FFFFFF;
	box-shadow: 0px 6px 11px #666;
	overflow-y: auto;
	max-height: 642px;
	font-family: "Raleway";
	position: absolute;
	left: 10%;
	top: 12%
}
.Emailbox {
	border: 1px solid #DDDDDD;
	position: absolute;
	left: 2%;
	top: 62px;
	width: 96%;
	height: 50px;
	z-index: 8;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 8px;
}
.Passwordbox {
	border: 1px solid #DDDDDD;
	position: absolute;
	left: 2%;
	top: 136px;
	width: 96%;
	height: 50px;
	z-index: 8;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 8px;
}
.LoginTextHeader {
	position: absolute;
	left: 2%;
	top: 10px;
	width: 96%;
	z-index: 12;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 26px;
	text-indent: 2px;
	color: #002E2E;

}
.SignUpButton {
	position: absolute;
	top: 215px;
	left: 2%;
	width: 96%;
	height: 33px;
	background-color: #444444;
	color: #FFF;
	font-family: "Raleway";
	border-radius: 5px;
	cursor: pointer;
	line-height: 33px;
	margin-bottom: 28px;
	font-size: 20px;
	-webkit-transition: all 300ms ease-in-out 0s;
	-moz-transition: all 300ms ease-in-out 0s;
	-ms-transition: all 300ms ease-in-out 0s;
	-o-transition: all 300ms ease-in-out 0s;
	transition: all 300ms ease-in-out 0s;
	border: inherit;
	box-shadow: 0px 3px 7px #666;
	cursor: pointer;
	background: -moz-linear-gradient(top, #0A766A 0%, #004d66 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#0A766A ), color-stop(100%,#004d66));
	background: -webkit-linear-gradient(top, #0A766A 0%,#004d66 100%);
	background: -o-linear-gradient(top, #0A766A 0%,#004d66 100%);
	background: -ms-linear-gradient(top, #0A766A 0%,#004d66 100%);
	background: linear-gradient(to bottom, #0A766A 0%,#004d66 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#005466', endColorstr='#004d66',GradientType=0 );
	border-radius: 4px;
	-webkit-transition: all 100ms ease-in-out 0s;
	-moz-transition: all 100ms ease-in-out 0s;
	-ms-transition: all 100ms ease-in-out 0s;
	-o-transition: all 100ms ease-in-out 0s;
	transition: all 100ms ease-in-out 0s;
}
#forgotpw {
	width: 80%;
	z-index: 7;
	background-color: #FFFFFF;
	overflow-y: auto;
	max-height: 642px;
	font-family: "Raleway";
	position: absolute;
	left: 1%;
	top: 296px;
}
.SignUpButton:hover {
	box-shadow:  0px 2px 20px #000;
	
}
.fontstatus {
	font-family: "Raleway";
	color: #002E2E;
	font-size: 26px;
	text-indent: 2px;
}
</style>
<script src="javascript/main.js"></script>
<script src="javascript/ajax.js"></script>
<script src="javascript/functionlogin.js"></script>
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

<body>
<?php include_once("topdrop.php"); ?>


<div id="LoginFormbox">
  <span class="LoginTextHeader">Log In </span>
  <!-- LOGIN FORM -->
  <form id="loginform" onSubmit="return false;">
   <input type="text" class="Emailbox" value="Email" id="email" onFocus="emptyElement('status')" maxlength="88">
    <input type="password" class="Passwordbox" value="password" id="password" onFocus="emptyElement('status')" maxlength="100">
    <br /><br />
    <button id="loginbtn" class="SignUpButton" onClick="login()">
    <div align="center">Log In</div>
    </button> 
    <div id="forgotpw"><a href="http://www.all-of.us/forgot_pass.php">Forgot Your Password?</a></div>
  </form>
  <!-- LOGIN FORM -->
</div>
<div id="status" class="fontstatus" style="position: absolute; width: 80%; top: 6%; left: 3%;"></div>

</body>
</html>
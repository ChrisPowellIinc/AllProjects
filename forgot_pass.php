<?php
include_once("php_includes/check_login_status.php");
// If user is already logged in, header that weenis away
if($user_ok == true){
	header("location: user.php?u=".$_SESSION["username"]);
    exit();
}
?><?php
// AJAX CALLS THIS CODE TO EXECUTE
if(isset($_POST["e"])){
	$e = mysqli_real_escape_string($con, $_POST['e']);
	$sql = "SELECT id, username FROM users WHERE email='$e' AND activated='1' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$numrows = mysqli_num_rows($query);
	if($numrows > 0){
		while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
			$id = $row["id"];
			$u = $row["username"];
		}
		$emailcut = substr($e, 0, 4);
		$randNum = rand(10000,99999);
		$tempPass = "$emailcut$randNum";
		$hashTempPass = md5($tempPass);
		$sql = "UPDATE useroptions SET temp_pass='$hashTempPass' WHERE username='$u' LIMIT 1";
	    $query = mysqli_query($con, $sql);
		$to = "$e";
		$from = "donotreply@all-of.us";
		$headers ="From: $from\n";
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1 \n";
		$subject ="All-Of.US Temporary Password";
		$msg = '<h2>Hello '.$u.'</h2><p>This is an automated message from yoursite. If you did not recently initiate the Forgot Password process, please disregard this email.</p><p>You indicated that you forgot your login password. We can generate a temporary password for you to log in with, then once logged in you can change your password to anything you like.</p><p>After you click the link below your password to login will be:<br /><b>'.$tempPass.'</b></p><p><a href="http://www.all-of.us/forgot_pass.php?u='.$u.'&p='.$hashTempPass.'">Click here now to apply the temporary password shown below to your account</a></p><p>If you do not click the link in this email, no changes will be made to your account. In order to set your login password to the temporary password you must click the link above.</p>';
		if(mail($to,$subject,$msg,$headers)) {
			echo "success";
			exit();
		} else {
			echo "email_send_failed";
			exit();
		}
    } else {
        echo "no_exist";
    }
    exit();
}
?>
<?php
// EMAIL LINK CLICK CALLS THIS CODE TO EXECUTE
if(isset($_GET['u']) && isset($_GET['p'])){
	$u = preg_replace('#[^a-z0-9]#i', '', $_GET['u']);
	$temppasshash = preg_replace('#[^a-z0-9]#i', '', $_GET['p']);
	if(strlen($temppasshash) < 10){
		exit();
	}
	$sql = "SELECT id FROM useroptions WHERE username='$u' AND temp_pass='$temppasshash' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$numrows = mysqli_num_rows($query);
	if($numrows == 0){
		header("location: message.php?msg=There is no match for that username with that temporary password in the system. We cannot proceed.");
    	exit();
	} else {
		$row = mysqli_fetch_row($query);
		$id = $row[0];
		$sql = "UPDATE users SET password='$temppasshash' WHERE id='$id' AND username='$u' LIMIT 1";
	    $query = mysqli_query($con, $sql);
		$sql = "UPDATE useroptions SET temp_pass='' WHERE username='$u' LIMIT 1";
	    $query = mysqli_query($con, $sql);
	    header("location: login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Forgot Password</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">

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

<style type="text/css">
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

}
#forgotpassFormbox {
	width: 78%;
	height: 339px;
	z-index: 7;
	background-color: #FFFFFF;
	box-shadow: 0px 6px 11px #666;
	overflow-y: auto;
	max-height: 642px;
	font-family: "Raleway";
	position: absolute;
	left: 10%;
	top: 8%;
	padding: 2%;
}

#Confirmpw {
	position: absolute;
	left: 2%;
	top: 63px;
	width: 96%;
	z-index: 12;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 2px;
}
.PWRbox {
	border: 1px solid #DDDDDD;
	position: absolute;
	left: 2%;
	top: 102px;
	width: 96%;
	height: 50px;
	z-index: 8;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 8px;
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
.SignUpButton:hover {
	box-shadow:  0px 2px 20px #000;
	
}

</style>
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


<script src="javascript/main.js"></script>
<script src="javascript/ajax.js"></script>
<script>
function forgotpass(){
	var e = _("email").value;
	if(e == ""){
		_("status").innerHTML = "Type in your email address";
	} else {
		_("forgotpassbtn").style.display = "none";
		_("status").innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST", "forgot_pass.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
				var response = ajax.responseText;
				if(response == "success"){
					_("forgotpassform").innerHTML = '<h3>Step 2. Check your email inbox in a few minutes</h3><p>You can close this window or tab if you like.</p>';
				} else if (response == "no_exist"){
					_("status").innerHTML = "Sorry that email address is not in our system";
				} else if(response == "email_send_failed"){
					_("status").innerHTML = "Mail function failed to execute";
				} else {
					_("status").innerHTML = "An unknown error occurred";
				}
	        }
        }
        ajax.send("e="+e);
	}
}
</script>
</head>
<body>
    <div id="forgotpassFormbox">
        <div id="pageMiddle">
          <span class="LoginTextHeader">Generate a temorary log in password</span>
          <form id="forgotpassform" onsubmit="return false;">
          <div id="Confirmpw">Enter Your Email Address</div>
            <input name="email" type="text" class="PWRbox" id="email" onfocus="_('status').innerHTML='';" maxlength="88">
            <br /><br />
            <button id="forgotpassbtn" class="SignUpButton" onclick="forgotpass()">Generate Temporary Log In Password</button> 
            <p id="status"></p>
          </form>
        </div>
    </div>

</body>
</html>
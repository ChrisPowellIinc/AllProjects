function restrict(elem){
	var tf = _(elem);
	var rx = new RegExp;
	if(elem == "email"){
		rx = /[' "]/gi;
	} else if(elem == "username"){
		rx = /[^a-z0-9]/gi;
	}else if(elem == "lastname"){
		rx = /[^a-z]/gi;
	}else if(elem == "firstname"){
		rx = /[^a-z]/gi;
	}
	tf.value = tf.value.replace(rx, "");
}
function emptyElement(accountusertext){
	_(accountusertext).innerHTML = "";
}
function checkusername(){
	var u = _("username").value;
	if(u != ""){
		_("accountusertext").innerHTML = 'Checking...';
		var ajax = ajaxObj("POST", "../php_includes/signuppost.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            _("accountusertext").innerHTML = ajax.responseText;
	        }
        }
        ajax.send("usernamecheck="+u);
	}
}
function signup(){
	var u = _("username").value;
	var e = _("emailx").value;
	var p1 = _("pass1").value;
	var p2 = _("pass2").value;
	var g = _("gender").value;
	var fn = _("firstname").value;
	var ln = _("lastname").value;
	var accountusertext = _("accountusertext");
	if(u == "" || e == "" || p1 == "" || p2 == "" || fn == "" || ln == ""){
		accountusertext.innerHTML = "Fill out all of the form data";
	} else if(p1 != p2){
		accountusertext.innerHTML = "Your password fields do not match";
	} else {
		_("signupbtn").style.opacity = ".95";
		accountusertext.innerHTML = 'Building Executed.';
		var ajax = ajaxObj("POST", "../php_includes/signuppost.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText != "signup_success"){
					accountusertext.innerHTML = ajax.responseText;
					_("signupbtn").style.opacity = ".8";
				} else {
					window.scrollTo(0,0);
					_("FormSignUp").innerHTML = "<span style='color: #0B222A;  font-size: 22px;  line-height: 172%; position: absolute; left: 5%; width: 90%; top: 3%;'> OK "+u+", check your email inbox and junk mail box at <u>"+e+"</u> in a moment to complete the sign up process by activating your account. You will not be able to do anything on the site until you successfully activate your account.</span>";
				}
	        }
        }
        ajax.send("u="+u+"&e="+e+"&p="+p1+"&g="+g+"&fn="+fn+"&ln="+ln);
	}
}
/* function addEvents(){
	_("elemID").addEventListener("click", func, false);
}
window.onload = addEvents; */
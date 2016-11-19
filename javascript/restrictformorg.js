function restrictm(elem){
	var tf = _(elem);
	var rx = new RegExp;
	if(elem == "emailm"){
		rx = /[' "]/gi;
	}else if(elem == "lastnamem"){
		rx = /[^a-z]/gi;
	}else if(elem == "firstnamem"){
		rx = /[^a-z]/gi;
	}
	tf.value = tf.value.replace(rx, "");
}
function signupm(){
	var u = _("usernamem").value;
	var e = _("emailm").value;
	var p1 = _("pass1m").value;
	var p2 = _("pass2m").value;
	var g = _("genderm").value;
	var fn = _("firstnamem").value;
	var ln = _("lastnamem").value;
	var gm = _("genrem").value;
	var accountmusictext = _("accountmusictext");
	if(u == "" || e == "" || p1 == "" || p2 == "" || fn == "" || ln == "" || gm == ""){
		accountmusictext.innerHTML = "Fill out all of the form data";
	} else if(p1 != p2){
		accountmusictext.innerHTML = "Your password fields do not match";
	} else {
		_("signupbtn").style.opacity = ".95";
		accountmusictext.innerHTML = 'Building Executed.';
		var ajax = ajaxObj("POST", "../php_includes/signuppostmusic.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText != "signup_success"){
					accountmusictext.innerHTML = ajax.responseText;
					_("signupbtn").style.opacity = ".8";
				} else {
					window.scrollTo(0,0);
					_("FormSignUpMusic").innerHTML = "<span style='color: #0B222A;  font-size: 22px;  line-height: 172%; position: absolute; left: 5%; width: 90%; top: 3%;'> OK "+u+", check your email inbox and junk mail box at <u>"+e+"</u> in a moment to complete the sign up process by activating your account. You will not be able to do anything on the site until you successfully activate your account.</span>";
				}
	        }
        }
        ajax.send("u="+u+"&e="+e+"&p="+p1+"&gm="+gm+"&fn="+fn+"&ln="+ln);
	}
}
/* function addEvents(){
	_("elemID").addEventListener("click", func, false);
}
window.onload = addEvents; */
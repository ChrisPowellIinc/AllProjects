function signupstarter(){
	document.getElementById('SignUp2').addEventListener("click", signup1);
	document.getElementById('closeoutdrop').addEventListener("click", signup2);
}

function signup1()
{
	document.getElementById("shade").className = "shadedisplay";
}
function signup2()
{
	document.getElementById("shade").className = "shadehidden";
}

	window.addEventListener('DOMContentLoaded', signupstarter, false);

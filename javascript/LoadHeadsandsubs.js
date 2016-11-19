function accountmoves(){
	document.getElementById('accountuser').addEventListener("click", accntop1);
	document.getElementById('accountmusic').addEventListener("click", accntop2);
	document.getElementById('accountorg').addEventListener("click", accntop3);
}

function accntop1()
{
	document.getElementById("accountuser").className = "accop1";
	document.getElementById("accountmusic").className = "accop2";
	document.getElementById("accountorg").className = "accop3";
	document.getElementById("FormSignUp").className = "formsignuser";
	document.getElementById("FormSignUpMusic").className = "";	
	document.getElementById("FormSignUpOrg").className = "";	
}
function accntop2()
{
	document.getElementById("accountuser").className = "accop3";
	document.getElementById("accountmusic").className = "accop1";
	document.getElementById("accountorg").className = "accop2";
	document.getElementById("FormSignUp").className = "";	
	document.getElementById("FormSignUpOrg").className = "";	
	document.getElementById("FormSignUpMusic").className = "formsignuser";	
}
function accntop3()
{
	document.getElementById("accountuser").className = "accop2";
	document.getElementById("accountmusic").className = "accop3";
	document.getElementById("accountorg").className = "accop1";
	document.getElementById("FormSignUp").className = "";	
	document.getElementById("FormSignUpMusic").className = "";	
	document.getElementById("FormSignUpOrg").className = "formsignuser";	
}

	window.addEventListener('DOMContentLoaded', accountmoves, false);
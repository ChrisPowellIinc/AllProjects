window.onload = function()
{
	document.getElementById('memeid').addEventListener("click", memecontrolax);
}
function memecontrolax(){
	document.getElementById("memecontainer").className = "memeytext";
	document.getElementById("memecontainer2").className = "memeytext";
}

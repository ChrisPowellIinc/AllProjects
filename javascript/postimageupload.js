var hasImage = "";
window.onbeforeunload = function(){
	if(hasImage != ""){
	    return "You have not posted your image";
	}
}
function showBtnDiv(){
	_("statustext").style.boxShadow = "0px 2px 6px #004879";
}
function doUpload(id){
	// www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
	var file = _(id).files[0];
	if(file.name == ""){
		return false;		
	}
	if(file.type != "image/jpeg" && file.type != "image/gif" && file.type != "image/png"){
		alert("That file type is not supported.");
		return false;
	}
	_("triggerBtn_SP").style.display = "none";
	_("uploadDisplay_SP").innerHTML = "Image uploading......";
	var formdata = new FormData();
	formdata.append("stPic", file);
	var ajax = new XMLHttpRequest();
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "php_parsers/photo_system.php");
	ajax.send(formdata);	
}
function completeHandler(event){
	var data = event.target.responseText;
	var datArray = data.split("|");
	if(datArray[0] == 1){
		hasImage = datArray[1];
		_("uploadDisplay_SP").innerHTML = '<img class="statusImage" src="tempuploads/'+datArray[1]+'" />';
		
	} else {
		_("uploadDisplay_SP").innerHTML = datArray[0];
		_("triggerBtn_SP").style.display = "block";
	}
}
function errorHandler(event){
	_("uploadDisplay_SP").innerHTML = "Upload Failed";
	_("triggerBtn_SP").style.display = "block";
}
function abortHandler(event){
	_("uploadDisplay_SP").innerHTML = "Upload Aborted";
	_("triggerBtn_SP").style.display = "block";
}
function triggerUpload(e,elem){
	e.preventDefault();
	_(elem).click();	
}
function postToStatus(action,type,user,ta){
	var data = _(ta).value;
	if(data == "" && hasImage == ""){
		alert("Type something");
		return false;
	}
	var data2 = "";
	if(data != ""){
		data2 = data.replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/n/g,"<br />").replace(/r/g,"<br />");
	}
	if (data2 == "" && hasImage != ""){
		data = "||na||";
		data2 = '<img class="statusImage" src="perm_uploads/'+hasImage+'" />';		
		ministat =	'style="background-image: url(perminiphotos/'+hasImage+');"';	
	} else if (data2 != "" && hasImage != ""){
		data2 += '<br /><img class="statusImage" src="perminiphotos/'+hasImage+'" />';
		ministat =	'style="background-image: url(perminiphotos/'+hasImage+');"';	
	} else {
		hasImage = "na";
	}
	
	_("statusBtn").disabled = true;
	var ajax = ajaxObj("POST", "php_parsers/status_system.php");
	ajax.onreadystatechange = function() {
		if(ajaxReturn(ajax) == true) {
			var datArray = ajax.responseText.split("|");
			if(datArray[0] == 1){
				var sid = datArray[1];
				var currentHTML = _("statusarea").innerHTML;
				_("statusarea").innerHTML = '<div id="status_'+sid+'" class="status_boxes"><div><b>Posted by you just now:</b> <span id="sdb_'+sid+'"><a href="#" onclick="return false;" onmousedown="deleteStatus(\''+sid+'\',\'status_'+sid+'\');" title="DELETE THIS STATUS AND ITS REPLIES">delete status</a></span><br />'+data2+'</div></div><textarea id="replytext_'+sid+'" class="replytext" onkeyup="statusMax(this,250)" placeholder="write a comment here"></textarea><button id="replyBtn_'+sid+'" onclick="replyToStatus('+sid+',\'<?php echo $u; ?>\',\'replytext_'+sid+'\',this)">Reply</button>'+currentHTML;
				_("statusBtn").disabled = false;
				_(ta).value = "";
				_("triggerBtn_SP").style.display = "block";
				_("btns_SP").style.display = "none";
				_("uploadDisplay_SP").innerHTML = "";
				_("statustext").style.height = "20px";
				_("fu_SP").value = "";
				hasImage = "";
				ministat = "";

			} else {
				alert(ajax.responseText);
			}
		}
	}
	ajax.send("action="+action+"&type="+type+"&user="+user+"&data="+data+"&image="+hasImage+"&ministat="+ministat);
}
function replyToStatus(sid,user,ta,btn){
	var data = _(ta).value;
	if(data == ""){
		alert("Type something first ");
		return false;
	}
	_("replyBtn_"+sid).disabled = true;
	var ajax = ajaxObj("POST", "php_parsers/status_system.php");
	ajax.onreadystatechange = function() {
		if(ajaxReturn(ajax) == true) {
			var datArray = ajax.responseText.split("|");
			if(datArray[0] == "reply_ok"){
				var rid = datArray[1];
				data = data.replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/\n/g,"<br />").replace(/\r/g,"<br />");
				_("status_"+sid).innerHTML += '<div id="reply_'+rid+'" class="reply_boxes"><div><b>Reply by you just now:</b><span id="srdb_'+rid+'"><a href="#" onclick="return false;" class="deletestatus" onmousedown="deleteReply(\''+rid+'\',\'reply_'+rid+'\');" title="DELETE THIS COMMENT">remove</a></span><br />'+data+'</div></div>';
				_("replyBtn_"+sid).disabled = false;
				_(ta).value = "";
			} else {
				alert(ajax.responseText);
			}
		}
	}
	ajax.send("action=status_reply&sid="+sid+"&user="+user+"&data="+data);
}
function deleteStatus(statusid,statusbox){
	var conf = confirm("Press OK to confirm deletion of this status and its replies");
	if(conf != true){
		return false;
	}
	var ajax = ajaxObj("POST", "php_parsers/status_system.php");
	ajax.onreadystatechange = function() {
		if(ajaxReturn(ajax) == true) {
			if(ajax.responseText == "delete_ok"){
				_(statusbox).style.display = 'none';
				_("replytext_"+statusid).style.display = 'none';
				_("replyBtn_"+statusid).style.display = 'none';
			} else {
				alert(ajax.responseText);
			}
		}
	}
	ajax.send("action=delete_status&statusid="+statusid);
}
function deleteReply(replyid,replybox){
	var conf = confirm("Press OK to confirm deletion of this reply");
	if(conf != true){
		return false;
	}
	var ajax = ajaxObj("POST", "php_parsers/status_system.php");
	ajax.onreadystatechange = function() {
		if(ajaxReturn(ajax) == true) {
			if(ajax.responseText == "delete_ok"){
				_(replybox).style.display = 'none';
			} else {
				alert(ajax.responseText);
			}
		}
	}
	ajax.send("action=delete_reply&replyid="+replyid);
}
function statusMax(field, maxlimit) {
	if (field.value.length > maxlimit){
		alert(maxlimit+" maximum character limit reached");
		field.value = field.value.substring(0, maxlimit);
	}
}

    function display(el) {
        var id = $(el).attr('id');

  $("profcontain1, div").animate({
    scrollTop: $($(this).attr(id)).offset().top
  }, 600);

};

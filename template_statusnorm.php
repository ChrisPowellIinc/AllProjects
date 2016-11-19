<?php 
session_start();
$sql = "SELECT * FROM status WHERE account_name='$u' AND type='a' OR account_name='$u' AND type='c' ORDER BY postdate DESC LIMIT 20";
$query = mysqli_query($con, $sql);
$statusnumrows = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$statusid = $row["id"];
	$account_name = $row["account_name"];
	$author = $row["author"];
	$postdate = $row["postdate"];
	$data = $row["data"];
	$data = nl2br($data);
	$data = str_replace("&amp;","&",$data);
	$data = stripslashes($data);
	$statusDeleteButton = '';
	if($author == $log_username || $account_name == $log_username ){
		$statusDeleteButton = '<span id="sdb_'.$statusid.'"><a href="#" onclick="return false;" class="deletestatus" onmousedown="deleteStatus(\''.$statusid.'\',\'status_'.$statusid.'\');" title="DELETE THIS STATUS AND ITS REPLIES"></a></span> &nbsp; &nbsp;	';
}
	// GATHER UP ANY STATUS REPLIES
	$status_replies = "";
	$query_replies = mysqli_query($con, "SELECT * FROM status WHERE osid='$statusid' AND type='b' ORDER BY postdate ASC");
	$replynumrows = mysqli_num_rows($query_replies);
    if($replynumrows > 0){
        while ($row2 = mysqli_fetch_array($query_replies, MYSQLI_ASSOC)) {
			$statusreplyid = $row2["id"];
			$replyauthor = $row2["author"];
			$replydata = $row2["data"];
			$replydata = nl2br($replydata);
			$replypostdate = $row2["postdate"];
			$replydata = str_replace("&amp;","&",$replydata);
			$replydata = stripslashes($replydata);
			$replyDeleteButton = '';
			if($replyauthor == $log_username || $account_name == $log_username ){
				$replyDeleteButton = '<span id="srdb_'.$statusreplyid.'"><a href="#" onclick="return false;" class="deletestatus" onmousedown="deleteReply(\''.$statusreplyid.'\',\'reply_'.$statusreplyid.'\');" title="DELETE THIS COMMENT"></a></span>';
			}
			$status_replies .= '<span class="reppostimagestyle"></span><div id="reply_'.$statusreplyid.'" class="reply_boxes"><div><b>Reply by <a href="user.php?u='.$replyauthor.'">'.$replyauthor.'</a> '.$replypostdate.':</b> '.$replyDeleteButton.'<br />'.$replydata.'</div></div>';
        }
    }
	$statuslist .= '<div id="postimage'.$statusid.'" class="postimagestyle"></div><div id="status_'.$statusid.'" class="status_boxes"><div><b>Posted by <a href="user.php?u='.$author.'">'.$author.'</a> '.$postdate.':</b> '.$statusDeleteButton.' <br />'.$data.'</div>'.$status_replies.'</div>';
	if($isFriend == true || $log_username == $u){
	    $statuslist .= '
		<div style="width: 95%; margin: 0px 2%; float: left; margin-bottom: 39px;">
		<div id="container'.$statusid.'" class="stat-container">
			<div id= "stat-info'.$statusid.'" class="stat-info">
				<div id="num-votes'.$statusid.'" class="num-votes"></div>
				<img src="Icons/MoreInfo.fw.png" width="20" height="20" style="float: right; margin: 1px;" /></div>
			<div  id= "gradient'.$statusid.'" class="gradient-container">
				<div id="rating'.$statusid.'" class="rating"></div>
				<div id="bar'.$statusid.'" class="gradient-bar"></div>
			</div>
		</div>
		</div>
		<div id="numsholder">
			<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">269</span> Supporters</span> 	<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">30</span> Memes</span> 	<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">75</span> Comments</span> 	<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">16</span> Shares</span> 	
		</div>
		<div id="actionbuttons">
			<div id="interacton">
			<span class="supportnums"></span><span class="detailsfontsnums">Support</span>  	
			<span class="memenums"></span><span class="detailsfontsnums">Meme</span>  	
			<span class="commentnums"></span><span class="detailsfontsnums">Comment</span>  	
			<span class="sharenums"></span><span class="detailsfontsnums">Share</span>  	
			</div>
		</div> 
		
		<textarea id="replytext_'.$statusid.'" class="replytext" placeholder=""></textarea><button id="replyBtn_'.$statusid.'" class="replybtnstylecss" onclick="replyToStatus('.$statusid.',\''.$u.'\',\'replytext_'.$statusid.'\',this)">Reply</button>
		<div id="line" class="linestyle"></div>
		
		<div id="postimage" class="postimagestyle"></div>	
			<div id="status" class="status_boxes">	<div>	<b>Posted by <a href="user.php?u=CTPII">CTPII</a>2014-11-26 19:52:42:</b>
			<span class="imgontainer">
				<span class="imgholder"></span>
			</span> 
		</div>
		</div>
		<div style="width: 95%; margin: 0px 2%; float: left; margin-bottom: 39px;">
		<div id="container15" class="stat-container">
			<div id= "stat-info15" class="stat-info">
				<div id="num-votes15" class="num-votes"></div>
				<img src="Icons/MoreInfo.fw.png" width="20" height="20" style="float: right; margin: 1px;" /></div>
			<div  id= "gradient15" class="gradient-container">
				<div id="rating15" class="rating"></div>
				<div id="bar15" class="gradient-bar"></div>
			</div>
		</div>
		</div>
		<div id="numsholder">
			<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">7</span> Supporters</span> 	<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">10</span> Memes</span> 	<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">9</span> Comments</span> 	<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">18</span> Shares</span> 	
		</div>
		<div id="actionbuttons">
			<div id="interacton">
			<span class="supportnums"></span><span class="detailsfontsnums">Support</span>  	
			<span class="memenums"></span><span class="detailsfontsnums">Meme</span>  	
			<span class="commentnums"></span><span class="detailsfontsnums">Comment</span>  	
			<span class="sharenums"></span><span class="detailsfontsnums">Share</span>  	
			</div>
		</div> 
		<div id="line" class="linestyle"></div>


		<div id="postimage" class="postimagestyle"></div>	
			<div id="status" class="status_boxes">	<div>	<b>Posted by <a href="user.php?u=CTPII">CTPII</a>2014-11-26 19:52:42:</b>
			<span class="imgontainer">
				<span class="imgholder">
					<iframe src="http://www.all-of.us/video/index.html" width="100%" height="100%" frameborder="0"></iframe>
				</span>
			</span> 
		</div>
		</div>
		<div style="width: 95%; margin: 0px 2%; float: left; margin-bottom: 39px;">
		<div id="container16" class="stat-container">
			<div id= "stat-info16" class="stat-info">
				<div id="num-votes16" class="num-votes"></div>
				<img src="Icons/MoreInfo.fw.png" width="20" height="20" style="float: right; margin: 1px;" /></div>
			<div  id= "gradient16" class="gradient-container">
				<div id="rating16" class="rating"></div>
				<div id="bar16" class="gradient-bar"></div>
			</div>
		</div>
		</div>
		<div id="numsholder">
			<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">7</span> Supporters</span> 	<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">10</span> Memes</span> 	<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">9</span> Comments</span> 	<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">18</span> Shares</span> 	
		</div>
		<div id="actionbuttons">
			<div id="interacton">
			<span class="supportnums"></span><span class="detailsfontsnums">Support</span>  	
			<span class="memenums"></span><span class="detailsfontsnums">Meme</span>  	
			<span class="commentnums"></span><span class="detailsfontsnums">Comment</span>  	
			<span class="sharenums"></span><span class="detailsfontsnums">Share</span>  	
			</div>
		</div> 
		<div id="line" class="linestyle"></div>

		<div id="postimage" class="postimagestyle"></div>	
			<div id="status" class="status_boxes">	<div>	<b>Posted by <a href="user.php?u=CTPII">CTPII</a>2014-11-26 19:52:42:</b>

			<span class="memeimgontainer">
						<span id="memecontainer" class="hiddeneditormeme">
							<textarea id="1block" class="memeytext" placeholder=""></textarea>
						</span> 
								<span class="memeimage"></span>
						<span id="memecontainer2" class="hiddeneditormeme">
							<textarea id="2block" class="memeytext" placeholder=""></textarea>
						</span> 

			</span> 
		</div>
		</div>
		<div style="width: 95%; margin: 0px 2%; float: left; margin-bottom: 39px;">
		<div id="container17" class="stat-container">
			<div id= "stat-info17" class="stat-info">
				<div id="num-votes17" class="num-votes"></div>
				<img src="Icons/MoreInfo.fw.png" width="20" height="20" style="float: right; margin: 1px;" /></div>
			<div  id= "gradient17" class="gradient-container">
				<div id="rating17" class="rating"></div>
				<div id="bar17" class="gradient-bar"></div>
			</div>
		</div>
		</div>
		<div id="numsholder">
			<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">9</span> Supporters</span> 	<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">0</span> Memes</span> 	<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">53</span> Comments</span> 	<span class="nums detailsfontsnums"><span class="detailsfontsnumslog">27</span> Shares</span> 	
		</div>
		<div id="actionbuttons">
			<div id="interacton">
			<span class="supportnums"></span><span class="detailsfontsnums">Support</span>  	
				<div id="memeid">	
					<span class="memenums"></span><span class="detailsfontsnums">Meme</span>  	
				</div>
			<span class="commentnums"></span><span class="detailsfontsnums">Comment</span>  	
			<span class="sharenums"></span><span class="detailsfontsnums">Share</span>  	
			</div>
		</div> 
		<div id="line" class="linestyle"></div>




		';	
	}
}
?>
<script>
function postToStatus(action,type,user,ta){
	var data = _(ta).value;
	if(data == ""){
		alert("Type something first please");
		return false;
	}
	_("statusBtn").disabled = true;
	var ajax = ajaxObj("POST", "php_parsers/status_system.php");
	ajax.onreadystatechange = function() {
		if(ajaxReturn(ajax) == true) {
			var datArray = ajax.responseText.split("|");
			if(datArray[0] == "post_ok"){
				var sid = datArray[1];
				data = data.replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/\n/g,"<br />").replace(/\r/g,"<br />");
				var currentHTML = _("statusarea").innerHTML;
				_("statusarea").innerHTML = '<div id="status_'+sid+'" class="status_boxes"><div><b>Posted by you just now:</b> <span id="sdb_'+sid+'"><a href="#" onclick="return false;" onmousedown="deleteStatus(\''+sid+'\',\'status_'+sid+'\');" title="DELETE THIS STATUS AND ITS REPLIES">delete status</a></span><br />'+data+'</div></div><textarea id="replytext_'+sid+'" class="replytext" onkeyup="statusMax(this,250)" placeholder="write a comment here"></textarea><button id="replyBtn_'+sid+'" onclick="replyToStatus('+sid+',\'<?php echo $u; ?>\',\'replytext_'+sid+'\',this)">Reply</button>'+currentHTML;
				_("statusBtn").disabled = false;
				_(ta).value = "";
			} else {
				alert(ajax.responseText);
			}
		}
	}
	ajax.send("action="+action+"&type="+type+"&user="+user+"&data="+data);
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
</script>
<div id="statusarea">
  <?php echo $statuslist; ?>
</div>
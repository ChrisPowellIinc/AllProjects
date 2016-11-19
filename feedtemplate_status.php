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
	$ministat = $row["ministat"];
	$ministat = nl2br($ministat);
	$ministat = str_replace("&amp;","&",$ministat);
	$ministat = stripslashes($ministat);
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
	    $minithumblist .= '<div id="containerpostspec" class="jumper postspecimg" type="button" value="click" onclick="display(\'#sdb_'.$statusid.'\');" '.$ministat.'></div>';
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
		';	
	}
}
?>

<div id="statusarea">
  <?php echo $statuslist; ?>
</div>
 <div id="ExpandCoverButton"></div>
      <div id="ExpandFeatureButton" class="ExpandFeatureStage1">
  			<div id="postcontainerlist" class="postcontainerlistclosed">    
                <div id="llimin"> <?php echo $lastsession; ?></div>
			  <?php echo $minithumblist; ?>
            </div> 
  	</div>

<?php
include_once("../php_includes/check_login_status.php");
if($user_ok != true || $log_username == "") {
	exit();
}
?><?php
if (isset($_POST['action']) && $_POST['action'] == "status_post"){
// Changed this line
	//if(strlen($_POST['data']) < 1){	
	$image3 = preg_replace('#[^a-z0-9.]#i', '', $_POST['image']);
	$image = preg_replace('#[^a-z0-9.]#i', '', $_POST['image']);

	if(strlen($_POST['data']) < 1 && $_POST['image'] == "na"){
		mysqli_close($con);
	    echo "data_empty";
	    exit();
	}

	//clean
	//Move To perm folder
	if($image != "na") {
		$kaboom = explode(".", $image); 
		$fileExt = end($kaboom);
		rename("../tempuploads/$image", "../perm_uploads/$image");
		include_once("../php_includes/image_resize2.php");
		$target_file = "../perm_uploads/$image"; 
		$resized_file = "../perm_uploads/$image"; 
		$wmax = 1000;
		$hmax = 1000;
		list($width, $height) = getimagesize($target_file); 
		if($width > $wmax || $height > $hmax){ 
			img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt); 
		}
		
		$kaboom3 = explode(".", $image3); 
		$fileExt3 = end($kaboom3);
		copy("../perm_uploads/$image3", "../perminiphotos/$image3");
		include_once("../php_includes/image_resize3.php");
		$target_file3 = "../perminiphotos/$image3"; 
		$resized_file3 = "../perminiphotos/$image3"; 
		$wmax3 = 60;
		$hmax3 = 60;
		list($width, $height) = getimagesize($target_file3); 
		if($width > $wmax3 || $height > $hmax3){ 
			img3_resize($target_file3, $resized_file3, $wmax3, $hmax3, $fileExt3); 
		}

	}
	
	

		// Make sure type is either a or c
	if($_POST['type'] != "a" && $_POST['type'] != "c"){
		mysqli_close($con);
	    echo "type_unknown";
	    exit();
	}
	// Clean all of the $_POST vars that will interact with the database
	$type = preg_replace('#[^a-z]#', '', $_POST['type']);
	$account_name = preg_replace('#[^a-z0-9]#i', '', $_POST['user']);
	$data = htmlentities($_POST['data']);
	$ministat = htmlentities($_POST['ministat']);
	// added this
	if($data == "||na||" && $image != "na"){
		//$data = '<img src="perm_uploads/'.$image.'" />';
		$data = '<img class="biggerStatusImage" src="perm_uploads/'.$image.'"  />';
		$ministat = 'style="background-image: url(perminiphotos/'.$image.');"'; 
	} else if ($data != "||na||" && $image != "na"){
		//$data = $data.'<br /><img src="perm_uploads/'.$image.'" />';
		$data = $data.'<br /><img class="biggerStatusImage" src="perm_uploads/'.$image.'"  />';
		$ministat = 'style="background-image: url(perminiphotos/'.$image.');"'; 
	}
		
	$data = mysqli_real_escape_string($con, $data);
	// Make sure account name exists (the profile being posted on)
	$sql = "SELECT COUNT(id) FROM users WHERE username='$account_name' AND activated='1' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_row($query);
	if($row[0] < 1){
		mysqli_close($con);
		echo "$account_no_exist";
		exit();
	}
	// Insert the status post into the database now
	$sql = "INSERT INTO status(account_name, author, type, data, ministat, postdate) 
			VALUES('$account_name','$log_username','$type','$data','$ministat',now())";
	$query = mysqli_query($con, $sql);
	$id = mysqli_insert_id($con);
	mysqli_query($con, "UPDATE status SET osid='$id' WHERE id='$id' LIMIT 1");
	// Count posts of type "a" for the person posting and evaluate the count
	// Insert notifications to all friends of the post author
	$friends = array();
	$query = mysqli_query($con, "SELECT user1 FROM friends WHERE user2='$log_username' AND accepted='1'");
	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) { array_push($friends, $row["user1"]); }
	$query = mysqli_query($con, "SELECT user2 FROM friends WHERE user1='$log_username' AND accepted='1'");
	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) { array_push($friends, $row["user2"]); }
	for($i = 0; $i < count($friends); $i++){
		$friend = $friends[$i];
		$app = "Status Post";
		$note = $log_username.' posted on: <br /><a href="user.php?u='.$account_name.'#status_'.$id.'">'.$account_name.'&#39;s Profile</a>';
		mysqli_query($con, "INSERT INTO notifications(username, initiator, app, note, date_time) VALUES('$friend','$log_username','$app','$note',now())");			
	}
	mysqli_close($con);
	echo "1|$id";
	exit();
}
?><?php 
//action=status_reply&osid="+osid+"&user="+user+"&data="+data
if (isset($_POST['action']) && $_POST['action'] == "status_reply"){
	// Make sure data is not empty
	if(strlen($_POST['data']) < 1){
		mysqli_close($con);
	    echo "data_empty";
	    exit();
	}
	// Clean the posted variables
	$osid = preg_replace('#[^0-9]#', '', $_POST['sid']);
	$account_name = preg_replace('#[^a-z0-9]#i', '', $_POST['user']);
	$data = htmlentities($_POST['data']);
	$data = mysqli_real_escape_string($con, $data);
	$ministat = htmlentities($_POST['ministat']);
	$ministat = mysqli_real_escape_string($con, $ministat);
	// Make sure account name exists (the profile being posted on)
	$sql = "SELECT COUNT(id) FROM users WHERE username='$account_name' AND activated='1' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_row($query);
	if($row[0] < 1){
		mysqli_close($con);
		echo "$account_no_exist";
		exit();
	}
	// Insert the status reply post into the database now
	$sql = "INSERT INTO status(osid, account_name, author, type, data, ministat, postdate)
	        VALUES('$osid','$account_name','$log_username','b','$data','$ministat',now())";
	$query = mysqli_query($con, $sql);
	$id = mysqli_insert_id($con);
	// Insert notifications for everybody in the conversation except this author
	$sql = "SELECT author FROM status WHERE osid='$osid' AND author!='$log_username' GROUP BY author";
	$query = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		$participant = $row["author"];
		$app = "Status Reply";
		$note = $log_username.' commented here:<br /><a href="user.php?u='.$account_name.'#status_'.$osid.'">Click here to view the conversation</a>';
		mysqli_query($con, "INSERT INTO notifications(username, initiator, app, note, date_time) 
		             VALUES('$participant','$log_username','$app','$note',now())");
	}
	mysqli_close($con);
	echo "reply_ok|$id";
	exit();
}
?><?php 
if (isset($_POST['action']) && $_POST['action'] == "delete_status"){
	if(!isset($_POST['statusid']) || $_POST['statusid'] == ""){
		mysqli_close($con);
		echo "status id is missing";
		exit();
	}
	$statusid = preg_replace('#[^0-9]#', '', $_POST['statusid']);
	// Check to make sure this logged in user actually owns that comment
	$query = mysqli_query($con, "SELECT account_name, author FROM status WHERE id='$statusid' LIMIT 1");
	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		$account_name = $row["account_name"]; 
		$author = $row["author"];
	}
    if ($author == $log_username || $account_name == $log_username) {
		mysqli_query($con, "DELETE FROM status WHERE osid='$statusid'");
		mysqli_close($con);
	    echo "delete_ok";
		exit();
	}
}
?><?php 
if (isset($_POST['action']) && $_POST['action'] == "delete_reply"){
	if(!isset($_POST['replyid']) || $_POST['replyid'] == ""){
		mysqli_close($con);
		exit();
	}
	$replyid = preg_replace('#[^0-9]#', '', $_POST['replyid']);
	// Check to make sure the person deleting this reply is either the account owner or the person who wrote it
	$query = mysqli_query($con, "SELECT osid, account_name, author FROM status WHERE id='$replyid' LIMIT 1");
	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		$osid = $row["osid"];
		$account_name = $row["account_name"];
		$author = $row["author"];
	}
    if ($author == $log_username || $account_name == $log_username) {
		mysqli_query($con, "DELETE FROM status WHERE id='$replyid'");
		mysqli_close($con);
	    echo "delete_ok";
		exit();
	}
}
?>
<?php

// Initialize any variables that the page might echo
$u = "";
$sex = "Male";
$userlevel = "";

$profile_pic = "";
$profile_pic_btn = "";
$avatar_form = "";

$cover_1_pic = "";
$cover_1_pic_btn = "";
$cover_1_form = "";

$cover_2_pic = "";
$cover_2_pic_btn = "";
$cover_2_form = "";

$cover_3_pic = "";
$cover_3_pic_btn = "";
$cover_3_form = "";

$cover_4_pic = "";
$cover_4_pic_btn = "";
$cover_4_form = "";

$cover_5_pic = "";
$cover_5_pic_btn = "";
$cover_5_form = "";

$cover_6_pic = "";
$cover_6_pic_btn = "";
$cover_6_form = "";


$country = "";
$joindate = "";
$lastsession = "";
// Make sure the _GET username is set, and sanitize it
if(isset($_GET["u"])){
	$u = preg_replace('#[^a-z0-9]#i', '', $_GET['u']);
} else {
    header("location: http://www.all-of.us");
    exit();	
}
	$_SESSION['dynamicuser'] = $u;

// Select the member from the users table
$sql = "SELECT * FROM users WHERE username='$u' AND activated='1' LIMIT 1";
$user_query = mysqli_query($con, $sql);

// Now make sure that user exists in the table
$numrows = mysqli_num_rows($user_query);
if($numrows < 1){
	echo "That user does not exist or is not yet activated, press back";
    exit();	
}
// Check to see if the viewer is the account owner
$isOwner = "no";
if($u == $log_username && $user_ok == true){
	
	$isOwner = "yes";
	$profile_pic_btn = '<a href="#" onclick="return false;" onmousedown="toggleElement(\'avatar_form\')">Toggle Avatar Form</a>';
	$avatar_form  = '<form id="avatar_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$avatar_form .=   '<h4>Change your avatar</h4>';
	$avatar_form .=   '<input type="file" name="avatar" required>';
	$avatar_form .=   '<p><input type="submit" value="Upload"></p>';
	$avatar_form .= '</form>';
	
	$cover_1_pic_btn = '<div id="cov1titl" class=cov1titlss" href="#" onclick="return false;" onmousedown="toggleElement(\'cover_1_form\')">1</div>';
	$cover_1_form  = '<form id="cover_1_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_1_form .=   '<input class="covselc" type="file" name="cover1" required>';
	$cover_1_form .=   '<input class="covupload" type="submit" value="Upload">';
	$cover_1_form .= '</form>';

	$cover_2_pic_btn = '<a href="#" onclick="return false;" onmousedown="toggleElement(\'cover_2_form\')">Toggle Cover 2 Form</a>';
	$cover_2_form  = '<form id="cover_2_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_2_form .=   '<h4>Change your cover 2</h4>';
	$cover_2_form .=   '<input type="file" name="cover2" required>';
	$cover_2_form .=   '<p><input type="submit" value="Upload"></p>';
	$cover_2_form .= '</form>';

	$cover_3_pic_btn = '<a href="#" onclick="return false;" onmousedown="toggleElement(\'cover_3_form\')">Toggle Cover 3 Form</a>';
	$cover_3_form  = '<form id="cover_3_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_3_form .=   '<h4>Change your cover 3</h4>';
	$cover_3_form .=   '<input type="file" name="cover3" required>';
	$cover_3_form .=   '<p><input type="submit" value="Upload"></p>';
	$cover_3_form .= '</form>';

	$cover_4_pic_btn = '<a href="#" onclick="return false;" onmousedown="toggleElement(\'cover_4_form\')">Toggle Cover 4 Form</a>';
	$cover_4_form  = '<form id="cover_4_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_4_form .=   '<h4>Change your cover 4</h4>';
	$cover_4_form .=   '<input type="file" name="cover4" required>';
	$cover_4_form .=   '<p><input type="submit" value="Upload"></p>';
	$cover_4_form .= '</form>';

	$cover_5_pic_btn = '<a href="#" onclick="return false;" onmousedown="toggleElement(\'cover_5_form\')">Toggle Cover 5 Form</a>';
	$cover_5_form  = '<form id="cover_5_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_5_form .=   '<h4>Change your cover 5</h4>';
	$cover_5_form .=   '<input type="file" name="cover5" required>';
	$cover_5_form .=   '<p><input type="submit" value="Upload"></p>';
	$cover_5_form .= '</form>';

	$cover_6_pic_btn = '<a href="#" onclick="return false;" onmousedown="toggleElement(\'cover_6_form\')">Toggle Cover 6 Form</a>';
	$cover_6_form  = '<form id="cover_6_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_6_form .=   '<h4>Change your cover 6</h4>';
	$cover_6_form .=   '<input type="file" name="cover6" required>';
	$cover_6_form .=   '<p><input type="submit" value="Upload"></p>';
	$cover_6_form .= '</form>';

	
}
// Fetch the user row from the query above
while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
	$profile_id = $row["id"];
	$gender = $row["gender"];
	$country = $row["country"];
	$userlevel = $row["userlevel"];
	$cover1 = $row["cover1"];
	$cover2 = $row["cover2"];
	$cover3 = $row["cover3"];
	$cover4 = $row["cover4"];
	$cover5 = $row["cover5"];
	$cover6 = $row["cover6"];
	$avatar = $row["avatar"];
	$signup = $row["signup"];
	$lastlogin = $row["lastlogin"];
	$joindate = strftime("%b %d, %Y", strtotime($signup));
	$lastsession = strftime("%b %d, %Y", strtotime($lastlogin));
}
if($gender == "f"){
	$sex = "Female";
}
$cover_1_pic = "php_includes/user/$u/$cover1";
$cover_2_pic = "php_includes/user/$u/$cover2";
$cover_3_pic = "php_includes/user/$u/$cover3";
$cover_4_pic = "php_includes/user/$u/$cover4";
$cover_5_pic = "php_includes/user/$u/$cover5";
$cover_6_pic = "php_includes/user/$u/$cover6";

$profile_pic = "php_includes/user/$u/$avatar";

if($avatar == NULL){
	$profile_pic = '<img src="Icons/usericon.jpg" alt="'.$user1.'">';
}

?>
<?php 
// Initialize any variables that the page might echo
$profile_pic = "";
$profile_pic_btn = "";
$avatar_form = "";
// Check to see if the viewer is the account owner
if($u == $log_username && $user_ok == true){
	$isOwner = "yes";
	$profile_pic_btn = '<a href="#" onclick="return false;" onmousedown="toggleElement(\'avatar_form\')">Toggle Avatar Form</a>';
	$avatar_form  = '<form id="avatar_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$avatar_form .=   '<h4>Change your avatar</h4>';
	$avatar_form .=   '<input type="file" name="avatar" required>';
	$avatar_form .=   '<p><input type="submit" value="Upload"></p>';
	$avatar_form .= '</form>';
}
$profile_pic = 'php_includes/user/'.$u.'/'.$avatar.'';
if($avatar == NULL){
	$profile_pic = '<img src="Icons/usericon.jpg" alt="'.$user1.'">';
}
?>
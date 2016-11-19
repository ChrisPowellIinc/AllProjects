<?php 
// Initialize any variables that the page might echo
$profile_pic = "";
$profile_pic_btn = "";
$cover_2_form = "";
// Check to see if the viewer is the account owner
if($u == $log_username && $user_ok == true){
	$isOwner = "yes";
	$profile_pic_btn = '<a href="#" onclick="return false;" onmousedown="toggleElement(\'cover_2_form\')">Toggle cover_2 Form</a>';
	$cover_2_form  = '<form id="cover_2_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_2_form .=   '<h4>Change your cover_2</h4>';
	$cover_2_form .=   '<input type="file" name="cover_2" required>';
	$cover_2_form .=   '<p><input type="submit" value="Upload"></p>';
	$cover_2_form .= '</form>';
}
$profile_pic = 'php_includes/user/'.$u.'/'.$cover_2.'';
if($cover_2 == NULL){
	$profile_pic = '<img src="Icons/usericon.jpg" alt="'.$user1.'">';
}
?>
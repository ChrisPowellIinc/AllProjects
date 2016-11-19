<?php
	include_once("php_includes/check_login_status.php");
?>
<?php
		
	$u = "";
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
	

// Check to see if the viewer is the account owner
	$isOwner = "yes";
	$profile_pic_btn = '<a href="#" onclick="return false;" onmousedown="toggleElement(\'avatar_form\')">Upload New Image<div align="center">Upload New Image</div></a>';
	$avatar_form  = '<form id="avatar_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$avatar_form .=   '<h4>Change Profile Photo #1</h4>';
	$avatar_form .=   '<input type="file" name="avatar" required>';
	$avatar_form .=   '<p><input type="submit" value="Upload"></p>';
	$avatar_form .= '</form>';
	
	$cover_1_pic_btn = '<a href="#" onclick="return false;" onmouseover="toggleElement(\'cover_1_form\')"><div align="center">Upload New Image</div></a>';
	$cover_1_form  = '<form id="cover_1_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_1_form .=   '<h4>Change Cover #1</h4>';
	$cover_1_form .=   '<input type="file" name="cover1" required>';
	$cover_1_form .=   '<p><input type="submit" value="Upload"></p>';
	$cover_1_form .= '</form>';

	$cover_2_pic_btn = '<a href="#" onclick="return false;" onmouseover="toggleElement(\'cover_2_form\')"><div align="center">Upload New Image</div></a>';
	$cover_2_form  = '<form id="cover_2_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_2_form .=   '<h4>Change Cover #2</h4>';
	$cover_2_form .=   '<input type="file" name="cover2" required>';
	$cover_2_form .=   '<p><input type="submit" value="Upload"></p>';
	$cover_2_form .= '</form>';

	$cover_3_pic_btn = '<a href="#" onclick="return false;" onmouseover="toggleElement(\'cover_3_form\')"><div align="center">Upload New Image</div></a>';
	$cover_3_form  = '<form id="cover_3_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_3_form .=   '<h4>Change Cover #3</h4>';
	$cover_3_form .=   '<input type="file" name="cover3" required>';
	$cover_3_form .=   '<p><input type="submit" value="Upload"></p>';
	$cover_3_form .= '</form>';

	$cover_4_pic_btn = '<a href="#" onclick="return false;" onmouseover="toggleElement(\'cover_4_form\')"><div align="center">Upload New Image</div></a>';
	$cover_4_form  = '<form id="cover_4_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_4_form .=   '<h4>Change Cover #4</h4>';
	$cover_4_form .=   '<input type="file" name="cover4" required>';
	$cover_4_form .=   '<p><input type="submit" value="Upload"></p>';
	$cover_4_form .= '</form>';

	$cover_5_pic_btn = '<a href="#" onclick="return false;" onmouseover="toggleElement(\'cover_5_form\')"><div align="center">Upload New Image</div></a>';
	$cover_5_form  = '<form id="cover_5_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_5_form .=   '<h4>Change Cover #5</h4>';
	$cover_5_form .=   '<input type="file" name="cover5" required>';
	$cover_5_form .=   '<p><input type="submit" value="Upload"></p>';
	$cover_5_form .= '</form>';

	$cover_6_pic_btn = '<a href="#" onclick="return false;" onmouseover="toggleElement(\'cover_6_form\')"><div align="center">Upload New Image</div></a>';
	$cover_6_form  = '<form id="cover_6_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_6_form .=   '<h4>Change Cover #6</h4>';
	$cover_6_form .=   '<input type="file" name="cover6" required>';
	$cover_6_form .=   '<p><input type="submit" value="Upload"></p>';
	$cover_6_form .= '</form>';

	

?>
<style type="text/css">
#HeaderOne {
	position: absolute;
	left: 0px;
	top: 5px;
	/* width: 74%; */
	height: 40px;
	z-index: 1;
	font-family: "Raleway";
	color: #fff;
	font-size: 18px;
	text-align: left;
	line-height: 40px;
	vertical-align: middle;
	text-indent: 5px;
	padding-right: 20px;
	overflow-y: hidden;
	background: #186d88;
	box-shadow: 0px 1px 18px #393939;
	background-color: #0F495C;
}
#HeaderTwo {
	position: absolute;
	left: 0px;
	top: 350px;
	/* width: 74%; */
	height: 40px;
	z-index: 1;
	font-family: "Raleway";
	color: #fff;
	font-size: 18px;
	text-align: left;
	line-height: 40px;
	vertical-align: middle;
	text-indent: 5px;
	padding-right: 20px;
	overflow-y: hidden;
	background: #186d88;
	box-shadow: 0px 1px 18px #393939;
	background-color: #0F495C;
}

</style>


<div id="HeaderOne">Edit Cover Photos</div>
<div id="HeaderTwo">Edit Profile Photos</div>

<div id="CoverPhoto1" class="coverchangephoto">
    <div id="profile_pic_box" >
          <?php echo $cover_1_pic_btn; ?>
          <?php echo $cover_1_form; ?>
  </div>
</div>

<div id="CoverPhoto2" class="coverchangephoto">
      <div id="profile_pic_box" >
          <?php echo $cover_2_pic_btn; ?>
          <?php echo $cover_2_form; ?>
      </div>
</div>
<div id="CoverPhoto3" class="coverchangephoto">
      <div id="profile_pic_box" >
          <?php echo $cover_3_pic_btn; ?>
          <?php echo $cover_3_form; ?>
      </div>
</div>
<div id="CoverPhoto4" class="coverchangephoto">      
	<div id="profile_pic_box" >
          <?php echo $cover_4_pic_btn; ?>
          <?php echo $cover_4_form; ?>
  </div>
</div>
<div id="CoverPhoto5" class="coverchangephoto">
      <div id="profile_pic_box" >
          <?php echo $cover_5_pic_btn; ?>
          <?php echo $cover_5_form; ?>
      </div>
</div>

<div id="CoverPhoto6" class="coverchangephoto">
      <div id="profile_pic_box" >
          <?php echo $cover_6_pic_btn; ?>
          <?php echo $cover_6_form; ?>
      </div>
</div>


<div id="ProfilePhoto1" class="coverchangephoto">
      <div id="profile_pic_box" >
          <?php echo $profile_pic_btn; ?>
          <?php echo $avatar_form; ?>
      </div>
</div>







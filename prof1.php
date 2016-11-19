<?php
	include_once("php_includes/check_login_status.php");
	include_once("php_includes/user_dataload.php");
	include_once("php_includes/friend_block_data.php");
	include_once("php_includes/friend_block_buttons.php");
	include_once("php_includes/friend_list_display.php");
	include_once("php_includes/coverxrandom_photo.php");
?>
 <script src="javascript/createCarousel.js" type="text/javascript" charset="utf-8"></script>

<style type="text/css">
.postimagestyle {
	background-image: url(<?php echo $profile_pic; ?>);
}
</style>
      <div id="ProfilePhotoX1" class="ProfileNarrow"></div>
<div id="profcontain1">
<div id="caro-container1" class="spinnable-carousel-container" style="height: 30%; display: none;">
    <div class="spinnable-carousel"></div>
</div>


<div id="borderbar" class="NotificationDisplayClosed">
      
    <div id="GradeintRight"><?php include_once("template_status.php"); ?></div>
    
</div> 

  
  
  
  <div id="StatsInfo"></div>
  <div id="Adboxbox">
  	<div id="arrowpos" class="uparrow"></div> </div>
  
  
  
  
  <div id="profileimage">
    
    <div id="container">
<div id="1caro-container1" class="spinnable-carousel-container" style="height: 100%; position: relative;  z-index: 9999999999999999999999;">
    <div class="spinnable-carousel cover"></div>
</div>

      </div>
</div>

    <div id="InfoBox">
<span style="display: none;"> 
    <p><?php echo $friendsHTML; ?></p>
    <div id="Userinfo">
  	      <p>Is the viewer the page owner, logged in and verified? <b><?php echo $isOwner; ?></b></p>
      <p>Gender: <?php echo $sex; ?></p>
      <p>Country: <?php echo $country; ?></p>
      <p>User Level: <?php echo $userlevel; ?></p>
      <p>Join Date: <?php echo $joindate; ?></p>
      <p>Last Session: <?php echo $lastsession; ?></p>
      <br />
      <p>Friend Button: <span id="friendBtn"><?php echo $friend_button; ?></span>
      <?php echo $u." has ".$friend_count." friends"; ?> <?php echo $friends_view_all_link; ?></p>
      <p>Block Button: <span id="blockBtn"><?php echo $block_button; ?></span></p>

  </div>
  </span>
  </div>


  </div>



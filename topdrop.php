<?php
$status_ui = "";
$statuslist = "";


if($isOwner == "yes"){
	$status_ui = '<textarea id="statustext" onkeyup="statusMax(this,250)" placeholder="What&#39;s new with you '.$u.'?" class="StatBoxOpen"></textarea>';
	$status_ui .= '<div id="uploadDisplay_SP"></div>';
	$status_ui .= '<div id="btns_SP" class="">';
		$status_ui .= '<button id="statusBtn"  onclick="postToStatus(\'status_post\',\'a\',\''.$u.'\',\'statustext\')">Post</button>';
		$status_ui .= '<img src="Icons/photosicon.jpg" id="triggerBtn_SP" class="triggerBtn" onclick="triggerUpload(event, \'fu_SP\')" width="40" height="40" title="Upload A Photo" />';
	$status_ui .= '</div>';
	$status_ui .= '<div id="standardUpload" class="hiddenStuffx">';
		$status_ui .= '<form id="image_SP" enctype="multipart/form-data" method="post">';
		$status_ui .= '<input type="file" name="FileUpload" id="fu_SP" onchange="doUpload(\'fu_SP\')"/>';
		$status_ui .= '</form>';
	$status_ui .= '</div>';
} else if($isFriend == true && $log_username != $u){
	$status_ui = '<textarea id="statustext" onkeyup="statusMax(this,250)" placeholder="Post something to '.$u.'?" class="StatBoxOpen"></textarea>';
	$status_ui .= '<div id="uploadDisplay_SP"></div>';
	$status_ui .= '<div id="btns_SP" class="">';
		$status_ui .= '<button id="statusBtn"  onclick="postToStatus(\'status_post\',\'c\',\''.$u.'\',\'statustext\')">Post</button>';
		$status_ui .= '<img src="Icons/photosicon.jpg" id="triggerBtn_SP" class="triggerBtn" onclick="triggerUpload(event, \'fu_SP\')" width="137" height="22" title="Upload A Photo" />';
	$status_ui .= '</div>';
	$status_ui .= '<div id="standardUpload" class="hiddenStuffx">';
		$status_ui .= '<form id="image_SP" enctype="multipart/form-data" method="post">';
		$status_ui .= '<input type="file" name="FileUpload" id="fu_SP" onchange="doUpload(\'fu_SP\')"/>';
		$status_ui .= '</form>';
	$status_ui .= '</div>';
}


?><?php
// It is important for any file that includes this file, to have
// check_login_status.php included at its very top.

$profile_pic_current_user_display = "";

$envelope = '<div id="Menu5" >  
<section id="options" style="height:100%; width:100%;" >
    <div id="flip" class="NoNotification"></div>
  </section>
</div>
';
$loginLinkus = '<form id="loginform" class="loginformss" onSubmit="return false;">
<div id="UsrnameControls" class="logbaruser">
<input type="text" value="Email" id="email" onFocus="emptyElement(\'status\')" maxlength="88" class="Search emaillogbaruser" />
</div>
<div id="PasswordControls" class="passlogbaruser">
<input type="password" id="password" onFocus="emptyElement(\'status\')" maxlength="100" name="Password" value="Password" class="Search passldosogbaruser" />
</div>
<div id="ContinueLogin" class="SignUpButton submitbaruser" onClick="login()"></div>
 </form>
 					    <div id="SearchFeild" class="topbarsearchss">
        	<input name="Search" type="text" class="Search searchtopbar" />
    </div>

 ';
if($user_ok == true) {
	$sql = "SELECT notescheck FROM users WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_row($query);
	$notescheck = ("");
	
	$sql = "SELECT id FROM notifications WHERE username='$log_username' AND date_time > '$notescheck' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$numrows = mysqli_num_rows($query);
	
	$sql = "SELECT id FROM friends WHERE user2 = '$log_username' AND accepted = '0' AND datemade > '$notescheck = $row[0];' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$numrows1= mysqli_num_rows($query);
	
	$sql = "SELECT * FROM notifications WHERE username = '$log_username' AND date_time > '$notescheck' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$numrows = mysqli_num_rows($query);
	
	$sql = "SELECT * FROM friends WHERE user2 = '$log_username' AND accepted = '0' AND datemade > '$notescheck' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$numrows1= mysqli_num_rows($query); 

	
	if ($numrows == 0 && $numrows1 == 0) {
		$envelope = '<a href="notifications.php"><div id="Menu5" >  
<section id="options" style="height:100%; width:100%;" >
    <div id="flip" class="OldNotification"></div>
  </section>
</div></a>
';
    } else {
		$envelope = '<a href="notifications.php"><div id="Menu5" >  
<section id="options" style="height:100%; width:100%;" >
    <div id="flip" class="NewNotification"></div>
  </section>
</div></a>
';
	}
    $loginLinkus = '
				<a href="javascript:loadPage(\'feed3.php\', \'front\')"><div class="menuin1 feedselect">
					<div class="nav-buttonmenu" style="margin-right: 1vw;" ></div></div></a>
					
					<a href="javascript:loadPage(\'page2.html\', \'bottom\')"><div class="menuin1 musicselect">
				<div class="nav-buttonmenu" style=""></div></div></a>
										
		<a href="javascript:loadPage(\'prof1.php\' , \'front\')"><div id="usernametopimage">'.$log_username.' </div></a>	
 				
					';
		$dropdownedits = '
				<div style="cursor:pointer;"  >
			<div onmousedown="change()" id="M1logo">
			
				<div id="spinHoverWhite"></div>
				
			</div>
		</div>
	
		';
					
}


$sql = "SELECT * FROM users WHERE username='$log_username' AND activated='1' LIMIT 1";
$current_user_query = mysqli_query($con, $sql);


while ($row = mysqli_fetch_array($current_user_query, MYSQLI_ASSOC)) {
	$profile_pic_current_user_display = $row["avatar"];
}

$profile_pic_current_user = "php_includes/user/$log_username/$profile_pic_current_user_display";

?>

<?php
		

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
	$avatar_form  = '<form id="avatar_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$avatar_form .=   '<input class="covselc" type="file" name="avatar" required>';
	$avatar_form .=   '<p><input class="covupload" type="submit" value="Upload"></p>';
	$avatar_form .= '</form>';
	
	$cover_1_pic_btn = '<div id="cov1titl" class="cov1titlss">1</div>';
	$cover_1_form  = '<form id="cover_1_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_1_form .=   '<input class="covselc" type="file" name="cover1" required>';
	$cover_1_form .=   '<input class="covupload" type="submit" value="Upload">';
	$cover_1_form .= '</form>';
	
	$cover_2_pic_btn = '<div id="cov1titl" class="cov1titlss">2</div>';
	$cover_2_form  = '<form id="cover_2_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_2_form .=   '<input class="covselc" type="file" name="cover2" required>';
	$cover_2_form .=   '<input class="covupload" type="submit" value="Upload">';
	$cover_2_form .= '</form>';
	
	$cover_3_pic_btn = '<div id="cov1titl" class="cov1titlss">3</div>';
	$cover_3_form  = '<form id="cover_3_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_3_form .=   '<input class="covselc" type="file" name="cover3" required>';
	$cover_3_form .=   '<input class="covupload" type="submit" value="Upload">';
	$cover_3_form .= '</form>';

	$cover_4_pic_btn = '<div id="cov1titl" class="cov1titlss">4</div>';
	$cover_4_form  = '<form id="cover_4_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_4_form .=   '<input class="covselc" type="file" name="cover4" required>';
	$cover_4_form .=   '<input class="covupload" type="submit" value="Upload">';
	$cover_4_form .= '</form>';

	$cover_5_pic_btn = '<div id="cov1titl" class="cov1titlss">5</div>';
	$cover_5_form  = '<form id="cover_5_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_5_form .=   '<input class="covselc" type="file" name="cover5" required>';
	$cover_5_form .=   '<input class="covupload" type="submit" value="Upload">';
	$cover_5_form .= '</form>';

	$cover_6_pic_btn = '<div id="cov1titl" class="cov1titlss">6</div>';
	$cover_6_form  = '<form id="cover_6_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$cover_6_form .=   '<input class="covselc" type="file" name="cover6" required>';
	$cover_6_form .=   '<input class="covupload" type="submit" value="Upload">';
	$cover_6_form .= '</form>';

?>

<link rel="stylesheet" href="css/UploadPhotos.css">
<link href="css/css2car.css" rel="stylesheet" type="text/css" media="screen" />
<script src="javascript/javacaro2.js"></script>

<script>
var colors = new Array(
  [62,35,255],
  [60,255,60],
  [255,35,98],
  [45,175,230],
  [255,0,255],
  [255,128,0]);

var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.002;

function updateGradient()
{
  
  if ( $===undefined ) return;
  
var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('#M1logo').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}

setInterval(updateGradient,10);
</script>


<script>
function getsupportedprop(proparray){
    var root=document.documentElement //reference root element of document
    for (var i=0; i<proparray.length; i++){ //loop through possible properties
        if (proparray[i] in root.style){ //if property exists on element (value will be string, empty string if not set)
            return proparray[i] //return that string
        }
    }
}

var SoulControl2;
var boxshadowprop=getsupportedprop(['boxShadow', 'MozBoxShadow', 'WebkitBoxShadow'])


window.addEventListener('load', function(TopDrop){ 
{
	document.getElementById('M1logo').addEventListener("click", Page1);
	document.getElementById('StatsInfo').addEventListener("click", Page2);


}
function Page1()
{
	document.getElementById('statusui').className = "display";
	document.getElementById('spinHoverWhite').style[boxshadowprop]="inset 0px 0px 35px #FF0000";
	
}
function Page2()
{
	document.getElementById('statusui').className = "clear";
	document.getElementById('spinHoverWhite').style.display="block";
	document.getElementById('CloseLayer').className = "clear";
}
});
</script>
<style type="text/css">
#statusbgcov {
	background-color: #fff; 
	width: 100%; 
	height: 20vh; 
		
}
#next {
	-webkit-transition: all 300ms ease-in-out 0s;
	-moz-transition: all 300ms ease-in-out 0s;
	-ms-transition: all 300ms ease-in-out 0s;
	-o-transition: all 300ms ease-in-out 0s;
	transition: all 300ms ease-in-out 0s;
}
#next:hover {
	    box-shadow: 0px 2px 6px #9C9C9C inset;
		background-color: #FAFAFA;
}

#previous {
	-webkit-transition: all 300ms ease-in-out 0s;
	-moz-transition: all 300ms ease-in-out 0s;
	-ms-transition: all 300ms ease-in-out 0s;
	-o-transition: all 300ms ease-in-out 0s;
	transition: all 300ms ease-in-out 0s;
}
#previous:hover {
	    box-shadow: 0px 2px 6px #9C9C9C inset;
		background-color: #FAFAFA;
}
</style>
<div id="TopRegionEdit">
  <div id="container2">
  
  <section class="containerMenu">
<div id="card" class=">
      <article class="front">
      
      
      	<div id="OptionsContainer" style="height: 96vh;overflow: hidden;background-color: #fff;box-shadow: -2px 0px 3px #004879;">
    
    <section class="container2x">
    <div id="carousel2" style="transform: translateZ(-2422px) rotateY(0deg);">
      <figure style="opacity: 1; transform: rotateY(0deg) translateZ(2422px);">
      <div id="statusbgcov"><?php echo $status_ui; ?></div> 
	

      </figure>
      
      <figure style="opacity: 1; transform: rotateY(36deg) translateZ(2422px);">
          <div id="HeaderOne">Edit Cover Photos</div>
        <div id="HeaderTwo">Edit Profile Photos</div>

<div id="CoverPhoto1" class="coverchangephoto">
	<?php echo $cover_1_pic; ?>
    <?php echo $cover_1_pic_btn; ?>
    <?php echo $cover_1_form;  ?>
</div>

<div id="CoverPhoto2" class="coverchangephoto">
	<?php echo $cover_2_pic; ?>
    <?php echo $cover_2_pic_btn; ?>
    <?php echo $cover_2_form; ?>
</div>

<div id="CoverPhoto3" class="coverchangephoto">
	<?php echo $cover_3_pic; ?>
    <?php echo $cover_3_pic_btn; ?>
    <?php echo $cover_3_form; ?>
</div>
<div id="CoverPhoto4" class="coverchangephoto">      
	<?php echo $cover_4_pic; ?>
    <?php echo $cover_4_pic_btn; ?>
    <?php echo $cover_4_form; ?>
</div>
<div id="CoverPhoto5" class="coverchangephoto">
	<?php echo $cover_5_pic; ?>
    <?php echo $cover_5_pic_btn; ?>
    <?php echo $cover_5_form; ?>
</div>

<div id="CoverPhoto6" class="coverchangephoto">
	<?php echo $cover_6_pic; ?>
    <?php echo $cover_6_pic_btn; ?>
    <?php echo $cover_6_form; ?>
</div>

<div id="ProfilePhoto1" class="coverchangephoto">
	<?php echo $profile_pic; ?>
    <?php echo $profile_pic_btn; ?>
    <?php echo $avatar_form; ?>
</div>


     </figure>
      <figure style="opacity: 1; transform: rotateY(72deg) translateZ(2422px);">
      			<div id="organizationsdt" class="organizationsdtss"></div>
      </figure>
      <figure style="opacity: 1; transform: rotateY(108deg) translateZ(2422px);">
      			<div id="directorydt" class="directorytss"></div>
      </figure>
      <figure style="opacity: 1; transform: rotateY(144deg) translateZ(2422px);">
      			<div id="feeddt" class="feeddtss"></div>
      </figure>
      <figure style="opacity: 1; transform: rotateY(180deg) translateZ(2422px);">
      			<div id="networkdt" class="networktss"></div>
      </figure>
      <figure style="opacity: 1; transform: rotateY(216deg) translateZ(2422px);">
      			<div id="statdt" class="stattss"></div>
      </figure>
      <figure style="opacity: 1; transform: rotateY(252deg) translateZ(2422px);">
      			<div id="finddt" class="finddtss"></div>
      </figure>
      <figure style="opacity: 1; transform: rotateY(288deg) translateZ(2422px);">.
      			<div id="websitedt" class="websitedtss"></div>
      </figure>
      <figure style="opacity: 1; transform: rotateY(324deg) translateZ(2422px);">
      			<div id="musicdt" class="musicdtss">
	<a href="logout.php"><div id="logoutheader"></div></a>                
                </div>
      </figure>
      
    </div>
  </section>
    
    	<section id="options2">
    <p id="navigation2" style="display: none;">      
      <button id="previous" class="leftscroll" data-increment="-1"></button>
    </p>
    
    <p id="navigation2" style="display: none;">
      
      <button id="next" class="rightscroll" data-increment="1"></button>
    </p>

    <p id="go-to2"> 
      <button class="buttonpagesturn textbutn3" data-increment="1" style="background-size: 20%;background-position: center left;background-repeat: no-repeat;background-image: url(images/icons/1466451062_22.png);" >Post</button>
      <button class="buttonpagesturn textbutn3" data-increment="2" style="background-size: 20%;background-position: center left;background-repeat: no-repeat;background-image: url(images/icons/1466450791_image.png);">Photos</button>
      <button class="buttonpagesturn textbutn3" data-increment="3" style="background-size: 20%;background-position: center left;background-repeat: no-repeat;background-image: url(images/icons/1466450927_office-60.png);">Organizations</button>
      <button class="buttonpagesturn textbutn3" data-increment="4" style="background-size: 20%;background-position: center left;background-repeat: no-repeat;background-image: url(images/icons/1466451262_music.png);" onClick="loadPageFromUrlIntoElement('trending.php', 'directorydt')">Music</button>
      <button class="buttonpagesturn textbutn3" data-increment="5" style="background-size: 20%;background-position: center left;background-repeat: no-repeat;background-image: url(images/icons/1466451042_19.png);">News Feed</button>
      <button class="buttonpagesturn textbutn3" data-increment="6" style="background-size: 20%;background-position: center left;background-repeat: no-repeat;background-image: url(images/icons/1466451105_-23.png);">Connect</button>
      <button class="buttonpagesturn textbutn3" data-increment="7" style="background-size: 20%;background-position: center left;background-repeat: no-repeat;background-image: url(images/icons/1466451143_25.png);">Stats</button>
      <button class="buttonpagesturn textbutn3" data-increment="8" style="background-size: 20%;background-position: center left;background-repeat: no-repeat;background-image: url(images/icons/1466451218_Location-03.png);">Find</button>
      <button class="buttonpagesturn textbutn3" data-increment="9" style="background-size: 20%;background-position: center left;background-repeat: no-repeat;background-image: url(images/icons/1466451295_speech-bubble.png);">Chat</button>
      <button class="buttonpagesturn textbutn3" data-increment="10" style="background-size: 20%;background-position: center left;background-repeat: no-repeat;background-image: url(images/pause.fw.png);">Settings</button>
    </p>
    <p>
      <button id="toggle-axis2">Toggle Carousel Axis</button>
    </p>
    <p>
      <button id="toggle-backface-visibility2" style="display: none;" >Toggle Backface Visibility</button>
    </p>
  </section>
    
    </div>
      
      <article class="back"></article>
    </div>


  </section>
  
  
  
  
    <div id="CloseLayer" class="clear"></div>


  	<?php echo $loginLinkus; ?>
    <?php echo $envelope; ?>
	<?php echo $dropdownedits; ?>		

</div>

</div>

<script src="javascript/functionloginfront.js"></script>
<script src="javascript/postimageupload.js"></script>
<?php
	include_once("css/menustyle.php");
?>


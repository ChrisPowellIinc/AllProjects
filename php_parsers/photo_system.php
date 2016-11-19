<?php
include_once("../php_includes/check_login_status.php");
?><?php 
if (isset($_POST["show"]) && $_POST["show"] == "galpics"){
	$picstring = "";
	$gallery = preg_replace('#[^a-z 0-9,]#i', '', $_POST["gallery"]);
	$user = preg_replace('#[^a-z0-9]#i', '', $_POST["user"]);
	$sql = "SELECT * FROM photos WHERE user='$user' AND gallery='$gallery' ORDER BY uploaddate ASC";
	$query = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		$id = $row["id"];
		$filename = $row["filename"];
		$description = $row["description"];
		$uploaddate = $row["uploaddate"];
		$picstring .= "$id|$filename|$description|$uploaddate|||";
    }
	mysqli_close($con);
	$picstring = trim($picstring, "|||");
	echo $picstring;
	exit();
}
?><?php
if($user_ok != true || $log_username == "") {
	exit();
}
?><?php 
if (isset($_FILES["avatar"]["name"]) && $_FILES["avatar"]["tmp_name"] != ""){
	$fileName = $_FILES["avatar"]["name"];
    $fileTmpLoc = $_FILES["avatar"]["tmp_name"];
	$fileType = $_FILES["avatar"]["type"];
	$fileSize = $_FILES["avatar"]["size"];
	$fileErrorMsg = $_FILES["avatar"]["error"];
	$kaboom = explode(".", $fileName);
	$fileExt = end($kaboom);
	list($width, $height) = getimagesize($fileTmpLoc);
	if($width < 10 || $height < 10){
		header("location: ../message.php?msg=ERROR: That image has no dimensions");
        exit();	
	}
	$db_file_name = rand(100000000000,999999999999).".".$fileExt;
	if($fileSize > 6048576) {
		header("location: ../message.php?msg=ERROR: Your image file was larger than 1mb");
		exit();	
	} else if (!preg_match("/\.(gif|jpg|png)$/i", $fileName) ) {
		header("location: ../message.php?msg=ERROR: Your image file was not jpg, gif or png type");
		exit();
	} else if ($fileErrorMsg == 1) {
		header("location: ../message.php?msg=ERROR: An unknown error occurred");
		exit();
	}
	$sql = "SELECT avatar FROM users WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_row($query);
	$avatar = $row[0];
	if($avatar != ""){
		$picurl = "../user/$log_username/$coverOne"; 
	    if (file_exists($picurl)) { unlink($picurl); }
	}
	$moveResult = move_uploaded_file($fileTmpLoc, "../php_includes/user/$log_username/$db_file_name");
	if ($moveResult != true) {
		header("location: ../message.php?msg=ERROR: File upload failed");
		exit();
	}
	include_once("../php_includes/image_resize1.php");
	$target_file = "../php_includes/user/$log_username/$db_file_name";
	$resized_file = "../php_includes/user/$log_username/$db_file_name";
	$wmax = 1500;
	$hmax = 1500;
	img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
	$sql = "UPDATE users SET avatar='$db_file_name' WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	mysqli_close($con);
	header("location: ../user.php?u=$log_username");
	exit();
}
?>
<?php 
if (isset($_FILES["cover1"]["name"]) && $_FILES["cover1"]["tmp_name"] != ""){
	$fileName = $_FILES["cover1"]["name"];
    $fileTmpLoc = $_FILES["cover1"]["tmp_name"];
	$fileType = $_FILES["cover1"]["type"];
	$fileSize = $_FILES["cover1"]["size"];
	$fileErrorMsg = $_FILES["cover1"]["error"];
	$kaboom = explode(".", $fileName);
	$fileExt = end($kaboom);
	list($width, $height) = getimagesize($fileTmpLoc);
	if($width < 10 || $height < 10){
		header("location: ../message.php?msg=ERROR: That image has no dimensions");
        exit();	
	}
	$db_file_name = rand(100000000000,999999999999).".".$fileExt;
	if($fileSize > 6048576) {
		header("location: ../message.php?msg=ERROR: Your image file was larger than 1mb");
		exit();	
	} else if (!preg_match("/\.(gif|jpg|png)$/i", $fileName) ) {
		header("location: ../message.php?msg=ERROR: Your image file was not jpg, gif or png type");
		exit();
	} else if ($fileErrorMsg == 1) {
		header("location: ../message.php?msg=ERROR: An unknown error occurred");
		exit();
	}
	$sql = "SELECT cover1 FROM users WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_row($query);
	$cover1 = $row[0];
	if($cover1 != ""){
		$picurl = "../user/$log_username/$cover1"; 
	    if (file_exists($picurl)) { unlink($picurl); }
	}
	$moveResult = move_uploaded_file($fileTmpLoc, "../php_includes/user/$log_username/$db_file_name");
	if ($moveResult != true) {
		header("location: ../message.php?msg=ERROR: File upload failed");
		exit();
	}
	include_once("../php_includes/image_resize1.php");
	$target_file = "../php_includes/user/$log_username/$db_file_name";
	$resized_file = "../php_includes/user/$log_username/$db_file_name";
	$wmax = 1500;
	$hmax = 1500;
	img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
	$sql = "UPDATE users SET cover1='$db_file_name' WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	mysqli_close($con);
	header("location: ../user.php?u=$log_username");
	exit();
}
?>
<?php 
if (isset($_FILES["cover2"]["name"]) && $_FILES["cover2"]["tmp_name"] != ""){
	$fileName = $_FILES["cover2"]["name"];
    $fileTmpLoc = $_FILES["cover2"]["tmp_name"];
	$fileType = $_FILES["cover2"]["type"];
	$fileSize = $_FILES["cover2"]["size"];
	$fileErrorMsg = $_FILES["cover2"]["error"];
	$kaboom = explode(".", $fileName);
	$fileExt = end($kaboom);
	list($width, $height) = getimagesize($fileTmpLoc);
	if($width < 10 || $height < 10){
		header("location: ../message.php?msg=ERROR: That image has no dimensions");
        exit();	
	}
	$db_file_name = rand(100000000000,999999999999).".".$fileExt;
	if($fileSize > 6048576) {
		header("location: ../message.php?msg=ERROR: Your image file was larger than 1mb");
		exit();	
	} else if (!preg_match("/\.(gif|jpg|png)$/i", $fileName) ) {
		header("location: ../message.php?msg=ERROR: Your image file was not jpg, gif or png type");
		exit();
	} else if ($fileErrorMsg == 1) {
		header("location: ../message.php?msg=ERROR: An unknown error occurred");
		exit();
	}
	$sql = "SELECT cover2 FROM users WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_row($query);
	$cover1 = $row[0];
	if($cover1 != ""){
		$picurl = "../user/$log_username/$cover2"; 
	    if (file_exists($picurl)) { unlink($picurl); }
	}
	$moveResult = move_uploaded_file($fileTmpLoc, "../php_includes/user/$log_username/$db_file_name");
	if ($moveResult != true) {
		header("location: ../message.php?msg=ERROR: File upload failed");
		exit();
	}
	include_once("../php_includes/image_resize1.php");
	$target_file = "../php_includes/user/$log_username/$db_file_name";
	$resized_file = "../php_includes/user/$log_username/$db_file_name";
	$wmax = 1500;
	$hmax = 1500;
	img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
	$sql = "UPDATE users SET cover2='$db_file_name' WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	mysqli_close($con);
	header("location: ../user.php?u=$log_username");
	exit();
}
?>
<?php 
if (isset($_FILES["cover3"]["name"]) && $_FILES["cover3"]["tmp_name"] != ""){
	$fileName = $_FILES["cover3"]["name"];
    $fileTmpLoc = $_FILES["cover3"]["tmp_name"];
	$fileType = $_FILES["cover3"]["type"];
	$fileSize = $_FILES["cover3"]["size"];
	$fileErrorMsg = $_FILES["cover3"]["error"];
	$kaboom = explode(".", $fileName);
	$fileExt = end($kaboom);
	list($width, $height) = getimagesize($fileTmpLoc);
	if($width < 10 || $height < 10){
		header("location: ../message.php?msg=ERROR: That image has no dimensions");
        exit();	
	}
	$db_file_name = rand(100000000000,999999999999).".".$fileExt;
	if($fileSize > 6048576) {
		header("location: ../message.php?msg=ERROR: Your image file was larger than 1mb");
		exit();	
	} else if (!preg_match("/\.(gif|jpg|png)$/i", $fileName) ) {
		header("location: ../message.php?msg=ERROR: Your image file was not jpg, gif or png type");
		exit();
	} else if ($fileErrorMsg == 1) {
		header("location: ../message.php?msg=ERROR: An unknown error occurred");
		exit();
	}
	$sql = "SELECT cover3 FROM users WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_row($query);
	$cover3 = $row[0];
	if($cover3 != ""){
		$picurl = "../user/$log_username/$cover3"; 
	    if (file_exists($picurl)) { unlink($picurl); }
	}
	$moveResult = move_uploaded_file($fileTmpLoc, "../php_includes/user/$log_username/$db_file_name");
	if ($moveResult != true) {
		header("location: ../message.php?msg=ERROR: File upload failed");
		exit();
	}
	include_once("../php_includes/image_resize1.php");
	$target_file = "../php_includes/user/$log_username/$db_file_name";
	$resized_file = "../php_includes/user/$log_username/$db_file_name";
	$wmax = 1500;
	$hmax = 1500;
	img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
	$sql = "UPDATE users SET cover3='$db_file_name' WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	mysqli_close($con);
	header("location: ../user.php?u=$log_username");
	exit();
}
?>
<?php 
if (isset($_FILES["cover4"]["name"]) && $_FILES["cover4"]["tmp_name"] != ""){
	$fileName = $_FILES["cover4"]["name"];
    $fileTmpLoc = $_FILES["cover4"]["tmp_name"];
	$fileType = $_FILES["cover4"]["type"];
	$fileSize = $_FILES["cover4"]["size"];
	$fileErrorMsg = $_FILES["cover4"]["error"];
	$kaboom = explode(".", $fileName);
	$fileExt = end($kaboom);
	list($width, $height) = getimagesize($fileTmpLoc);
	if($width < 10 || $height < 10){
		header("location: ../message.php?msg=ERROR: That image has no dimensions");
        exit();	
	}
	$db_file_name = rand(100000000000,999999999999).".".$fileExt;
	if($fileSize > 6048576) {
		header("location: ../message.php?msg=ERROR: Your image file was larger than 1mb");
		exit();	
	} else if (!preg_match("/\.(gif|jpg|png)$/i", $fileName) ) {
		header("location: ../message.php?msg=ERROR: Your image file was not jpg, gif or png type");
		exit();
	} else if ($fileErrorMsg == 1) {
		header("location: ../message.php?msg=ERROR: An unknown error occurred");
		exit();
	}
	$sql = "SELECT cover4 FROM users WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_row($query);
	$cover4 = $row[0];
	if($cover4 != ""){
		$picurl = "../user/$log_username/$cover4"; 
	    if (file_exists($picurl)) { unlink($picurl); }
	}
	$moveResult = move_uploaded_file($fileTmpLoc, "../php_includes/user/$log_username/$db_file_name");
	if ($moveResult != true) {
		header("location: ../message.php?msg=ERROR: File upload failed");
		exit();
	}
	include_once("../php_includes/image_resize1.php");
	$target_file = "../php_includes/user/$log_username/$db_file_name";
	$resized_file = "../php_includes/user/$log_username/$db_file_name";
	$wmax = 1500;
	$hmax = 1500;
	img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
	$sql = "UPDATE users SET cover4='$db_file_name' WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	mysqli_close($con);
	header("location: ../user.php?u=$log_username");
	exit();
}
?>
<?php 
if (isset($_FILES["cover5"]["name"]) && $_FILES["cover5"]["tmp_name"] != ""){
	$fileName = $_FILES["cover5"]["name"];
    $fileTmpLoc = $_FILES["cover5"]["tmp_name"];
	$fileType = $_FILES["cover5"]["type"];
	$fileSize = $_FILES["cover5"]["size"];
	$fileErrorMsg = $_FILES["cover5"]["error"];
	$kaboom = explode(".", $fileName);
	$fileExt = end($kaboom);
	list($width, $height) = getimagesize($fileTmpLoc);
	if($width < 10 || $height < 10){
		header("location: ../message.php?msg=ERROR: That image has no dimensions");
        exit();	
	}
	$db_file_name = rand(100000000000,999999999999).".".$fileExt;
	if($fileSize > 6048576) {
		header("location: ../message.php?msg=ERROR: Your image file was larger than 1mb");
		exit();	
	} else if (!preg_match("/\.(gif|jpg|png)$/i", $fileName) ) {
		header("location: ../message.php?msg=ERROR: Your image file was not jpg, gif or png type");
		exit();
	} else if ($fileErrorMsg == 1) {
		header("location: ../message.php?msg=ERROR: An unknown error occurred");
		exit();
	}
	$sql = "SELECT cover5 FROM users WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_row($query);
	$cover5 = $row[0];
	if($cover5 != ""){
		$picurl = "../user/$log_username/$cover5"; 
	    if (file_exists($picurl)) { unlink($picurl); }
	}
	$moveResult = move_uploaded_file($fileTmpLoc, "../php_includes/user/$log_username/$db_file_name");
	if ($moveResult != true) {
		header("location: ../message.php?msg=ERROR: File upload failed");
		exit();
	}
	include_once("../php_includes/image_resize1.php");
	$target_file = "../php_includes/user/$log_username/$db_file_name";
	$resized_file = "../php_includes/user/$log_username/$db_file_name";
	$wmax = 1500;
	$hmax = 1500;
	img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
	$sql = "UPDATE users SET cover5='$db_file_name' WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	mysqli_close($con);
	header("location: ../user.php?u=$log_username");
	exit();
}
?>
<?php 
if (isset($_FILES["cover6"]["name"]) && $_FILES["cover6"]["tmp_name"] != ""){
	$fileName = $_FILES["cover6"]["name"];
    $fileTmpLoc = $_FILES["cover6"]["tmp_name"];
	$fileType = $_FILES["cover6"]["type"];
	$fileSize = $_FILES["cover6"]["size"];
	$fileErrorMsg = $_FILES["cover6"]["error"];
	$kaboom = explode(".", $fileName);
	$fileExt = end($kaboom);
	list($width, $height) = getimagesize($fileTmpLoc);
	if($width < 10 || $height < 10){
		header("location: ../message.php?msg=ERROR: That image has no dimensions");
        exit();	
	}
	$db_file_name = rand(100000000000,999999999999).".".$fileExt;
	if($fileSize > 6048576) {
		header("location: ../message.php?msg=ERROR: Your image file was larger than 1mb");
		exit();	
	} else if (!preg_match("/\.(gif|jpg|png)$/i", $fileName) ) {
		header("location: ../message.php?msg=ERROR: Your image file was not jpg, gif or png type");
		exit();
	} else if ($fileErrorMsg == 1) {
		header("location: ../message.php?msg=ERROR: An unknown error occurred");
		exit();
	}
	$sql = "SELECT cover6 FROM users WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_row($query);
	$cover6 = $row[0];
	if($cover6 != ""){
		$picurl = "../user/$log_username/$cover6"; 
	    if (file_exists($picurl)) { unlink($picurl); }
	}
	$moveResult = move_uploaded_file($fileTmpLoc, "../php_includes/user/$log_username/$db_file_name");
	if ($moveResult != true) {
		header("location: ../message.php?msg=ERROR: File upload failed");
		exit();
	}
	include_once("../php_includes/image_resize1.php");
	$target_file = "../php_includes/user/$log_username/$db_file_name";
	$resized_file = "../php_includes/user/$log_username/$db_file_name";
	$wmax = 1500;
	$hmax = 1500;
	img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
	$sql = "UPDATE users SET cover6='$db_file_name' WHERE username='$log_username' LIMIT 1";
	$query = mysqli_query($con, $sql);
	mysqli_close($con);
	header("location: ../user.php?u=$log_username");
	exit();
}
?>

<?php 
if (isset($_FILES["photo"]["name"]) && isset($_POST["gallery"])){
	$sql = "SELECT COUNT(id) FROM photos WHERE user='$log_username'";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_row($query);
	if($row[0] > 14){
		header("location: ../message.php?msg=The demo system allows only 15 pictures total");
        exit();	
	}
	$gallery = preg_replace('#[^a-z 0-9,]#i', '', $_POST["gallery"]);
	$fileName = $_FILES["photo"]["name"];
    $fileTmpLoc = $_FILES["photo"]["tmp_name"];
	$fileType = $_FILES["photo"]["type"];
	$fileSize = $_FILES["photo"]["size"];
	$fileErrorMsg = $_FILES["photo"]["error"];
	$kaboom = explode(".", $fileName);
	$fileExt = end($kaboom);
	$db_file_name = date("DMjGisY")."".rand(1000,9999).".".$fileExt; // WedFeb272120452013RAND.jpg
	list($width, $height) = getimagesize($fileTmpLoc);
	if($width < 10 || $height < 10){
		header("location: ../message.php?msg=ERROR: That image has no dimensions");
        exit();	
	}
	if($fileSize > 6048576) {
		header("location: ../message.php?msg=ERROR: Your image file was larger than 6mb");
		exit();	
	} else if (!preg_match("/\.(gif|jpg|png)$/i", $fileName) ) {
		header("location: ../message.php?msg=ERROR: Your image file was not jpg, gif or png type");
		exit();
	} else if ($fileErrorMsg == 1) {
		header("location: ../message.php?msg=ERROR: An unknown error occurred");
		exit();
	}
	$moveResult = move_uploaded_file($fileTmpLoc, "../user/$log_username/$db_file_name");
	if ($moveResult != true) {
		header("location: ../message.php?msg=ERROR: File upload failed");
		exit();
	}
	include_once("../php_includes/image_resize1.php");
	$wmax = 1500;
	$hmax = 1500;
	if($width > $wmax || $height > $hmax){
		$target_file = "../user/$log_username/$db_file_name";
	    $resized_file = "../user/$log_username/$db_file_name";
		img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
	}
	$sql = "INSERT INTO photos(user, gallery, filename, uploaddate) VALUES ('$log_username','$gallery','$db_file_name',now())";
	$query = mysqli_query($con, $sql);
	mysqli_close($con);
	header("location: ../photos.php?u=$log_username");
	exit();
}
?><?php 
if (isset($_POST["delete"]) && $_POST["id"] != ""){
	$id = preg_replace('#[^0-9]#', '', $_POST["id"]);
	$query = mysqli_query($con, "SELECT user, filename FROM photos WHERE id='$id' LIMIT 1");
	$row = mysqli_fetch_row($query);
    $user = $row[0];
	$filename = $row[1];
	if($user == $log_username){
		$picurl = "../user/$log_username/$filename"; 
	    if (file_exists($picurl)) {
			unlink($picurl);
			$sql = "DELETE FROM photos WHERE id='$id' LIMIT 1";
	        $query = mysqli_query($con, $sql);
		}
	}
	mysqli_close($con);
	echo "deleted_ok";
	exit();
}
?>
<?php
if (isset($_FILES["stPic"]["name"]) && $_FILES["stPic"]["tmp_name"] != ""){
	$fileName = $_FILES["stPic"]["name"];
	$fileTmpLoc = $_FILES["stPic"]["tmp_name"];
	$fileType = $_FILES["stPic"]["type"];
	$fileSize = $_FILES["stPic"]["size"];
	$fileErrorMsg = $_FILES["stPic"]["error"];	
	$kaboom = explode(".", $fileName);
	$fileExt = end($kaboom);
	list($width, $height) = getimagesize($fileTmpLoc);
	if($width < 10 || $height < 10){
		echo"Image is too small|fail4";
        exit();	
	}
	$time = time();
$db_file_name = $log_username.time().".".$fileExt;
	if($fileSize > 1048576) {
		echo "Your image file was larger than 1mb|fail1";
		exit();	
	} else if (!preg_match("/.(gif|jpg|png)$/i", $fileName) ) {
		echo "Your image file was not jpg, gif or png type|fail2";
		exit();
	} else if ($fileErrorMsg == 1) {
		echo "An unknown error occurred|fail3";
		exit();
	}	
	if(move_uploaded_file($fileTmpLoc, "../tempuploads/$db_file_name")){
    	echo "1|$db_file_name";
	} else {
    	echo "move_uploaded_file function failed";
	}
}
?>
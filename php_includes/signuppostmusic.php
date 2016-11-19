<?php
// Ajax calls this REGISTRATION code to execute
if(isset($_POST["u"])){
	// CONNECT TO THE DATABASE
	include_once("db_conx.php");
	// GATHER THE POSTED DATA INTO LOCAL VARIABLES
	$u = preg_replace('#[^a-z0-9]#i', '', $_POST['u']);
	$e = mysqli_real_escape_string($con, $_POST['e']);
	$p = $_POST['p'];
	$gm = $_POST['gm'];
	$fn = preg_replace('#[^a-z]#i', '', $_POST['fn']);
	$ln = preg_replace('#[^a-z ]#i', '', $_POST['ln']);
	// GET USER IP ADDRESS
    $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
	// DUPLICATE DATA CHECKS FOR USERNAME AND EMAIL
	$sql = "SELECT musicid FROM usersmusic WHERE musicname='$u' LIMIT 1";
    $query = mysqli_query($con, $sql); 
	$u_check = mysqli_num_rows($query);
	// -------------------------------------------
	$sql = "SELECT musicid FROM usersmusic WHERE email='$e' LIMIT 1";
    $query = mysqli_query($con, $sql); 
	$e_check = mysqli_num_rows($query);
	// FORM DATA ERROR HANDLING
	if($u == "" || $e == "" || $p == "" || $gm == "" || $fn == "" || $ln == ""){
		echo "The form submission is missing values1.";
        exit();
	} else if ($u_check > 0){ 
        echo "The username you entered is alreay taken";
        exit();
	} else if ($e_check > 0){ 
        echo "That email address is already in use in the system";
        exit();
	} else if (strlen($u) < 3 || strlen($u) > 16) {
        echo "Username must be between 3 and 16 characters";
        exit(); 
    } else if (is_numeric($u[0])) {
        echo 'Username cannot begin with a number';
        exit();
    } else if (is_numeric($fn[0])) {
        echo "First name cannot begin with a number";
        exit(); 
    } else if (is_numeric($ln[0])) {
        echo 'Last name cannot begin with a number';
        exit();
    } else {
	// END FORM DATA ERROR HANDLING
	    // Begin Insertion of data into the database
		// Hash the password and apply your own mysterious unique salt
		$p_hash = md5($p);
		// Add user info into the database table for the main site table
		$sql = "INSERT INTO usersmusic (musicname, email, password, musictype, ip, firstname, lastname, signup, lastlogin, notescheck)       
		        VALUES('$u','$e','$p_hash','$gm','$ip','$fn','$ln',now(),now(),now())";
		$query = mysqli_query($con, $sql); 
		$uid = mysqli_insert_id($con);
		$sql = "INSERT INTO '$gm' (musiciantypeid, musicianid, ip, typelog)       
		        VALUES('$uid','$u','$ip',now())";
		$query = mysqli_query($con, $sql); 
		// Establish their row in the useroptions table
		$sql = "INSERT INTO musicoptions (id, musicname, background) VALUES ('$uid','$u','original')";
		$query = mysqli_query($con, $sql);
		// Create directory(folder) to hold each user's files(pics, MP3s, etc.)
		if (!file_exists("music/$u")) {
			mkdir("music/$u", 0755);
		}
		// Email the user their activation link
		$to = "$e";							 
		$from = "donotreply@all-of.us";
		$subject = 'All-Of Us Account Music Activation';
		$message = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>All-Of.Us</title></head><body style="margin:0px; font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px; background:#000; font-size:24px; color:#CCC;"><a href="http://www.all-of.us"><img src="http://www.all-of.us/images/logosmallss.jpg" width="36" height="30" alt="All-Of Us" style="border:none; float:left;"></a>All-Of Us Account Music Activation</div><div style="padding:24px; font-size:17px;">Hello '.$u.',<br /><br />Click the link below to activate your account when ready:<br /><br /><a href="http://www.all-of.us/activationmusic.php?id='.$uid.'&u='.$u.'&e='.$e.'&p='.$p_hash.'">Click here to activate your account now</a><br /><br />Login after successful activation using your:<br />* E-mail Address: <b>'.$e.'</b></div></body></html>';
		$headers = "From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
		mail($to, $subject, $message, $headers);
		echo "signup_success";
		exit();
	}
	exit();
}
?>
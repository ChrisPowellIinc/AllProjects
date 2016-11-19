<?php
include_once("php_includes/db_conx.php"); 

$tbl_usersorganization = "CREATE TABLE IF NOT EXISTS usersorganization (
              orgid INT(11) NOT NULL AUTO_INCREMENT,
			  firstname VARCHAR(16) NOT NULL,
			  lastname VARCHAR(28) NOT NULL,
			  organizationname VARCHAR(255) NOT NULL,
			  email VARCHAR(255) NOT NULL,
			  password VARCHAR(255) NOT NULL,
			  orgtype ENUM('O1000','O1001','O1002','O1003','O1004','O1005','O1006','O1007','O1008','O1009','O1010','O1011','O1012','O1013','O1014','O1015','O1016','O1017','O1018','O1019','O1020','O1021','O1022','O1023','O1024','O1025','O1026','O1027','O1028','O1029','O1030','O1031','O1032','O1033','O1034','O1035','O1036','O1037','O1038','O1039','O1040','O1041','O1043','O1044','O1045','O1046','O1047','O1048','O1049','O1050','O1051','O1052','O1053','O1054','O1055','O1056','O1057','O1058','O1059','O1060','O1061','O1062','O1063','O1064','O1065','O1066','O1067','O1068','O1069','O1070','O1071','O1072','O1073','O1074','O1075','O1076','O1077','O1078','O1079','O1080','O1081','O1082','O1083','O1084','O1085','O1086','O1087','O1088','O1089')  NOT NULL DEFAULT 'O1024',
			  othertype VARCHAR(255) NULL,
			  website VARCHAR(255) NULL,
			  country VARCHAR(255) NULL,
			  userlevel ENUM('a','b','c','d') NOT NULL DEFAULT 'a',
			  avatar VARCHAR(255) NULL,
  			  cover VARCHAR(255) NULL,
			  ip VARCHAR(255) NOT NULL,
			  signup DATETIME NOT NULL,
			  lastlogin DATETIME NOT NULL,
			  notescheck DATETIME NOT NULL,
			  activated ENUM('0','1') NOT NULL DEFAULT '0',
			UNIQUE KEY username (organizationname,email),
              PRIMARY KEY (orgid)
             )";
$query = mysqli_query($con, $tbl_usersorganization);
if ($query === TRUE) {
	echo "<h3>usersorganization table created OK 2:) </h3>"; 
} else {
	echo "<h3>usersorganization table NOT created 2 :( </h3>"; 
}
////////////////////////////////////
////////////////////////////////////
$tbl_supportorg = "CREATE TABLE IF NOT EXISTS supportorg ( 
                id INT(11) NOT NULL AUTO_INCREMENT,
			  firstname VARCHAR(16) NOT NULL,
			  lastname VARCHAR(16) NOT NULL,
                username VARCHAR(16) NOT NULL,
                datemade DATETIME NOT NULL,
                PRIMARY KEY (id)
                )"; 
$query = mysqli_query($con, $tbl_supportorg); 
if ($query === TRUE) {
	echo "<h3>supportorg table created OK :) </h3>"; 
} else {
	echo "<h3>supportorg table NOT created :( </h3>"; 
}
////////////////////////////////////
////////////////////////////////////
$tbl_statusorganization = "CREATE TABLE IF NOT EXISTS statusorganization ( 
                id INT(11) NOT NULL AUTO_INCREMENT,
                orgid INT(11) NOT NULL,
                organization_name VARCHAR(16) NOT NULL,
                author VARCHAR(16) NOT NULL,
                type ENUM('a','b','c') NOT NULL,
                data TEXT NOT NULL,
                postdate DATETIME NOT NULL,
                PRIMARY KEY (id) 
                )"; 
$query = mysqli_query($con, $tbl_statusorganization); 
if ($query === TRUE) {
	echo "<h3>status table created OK :) </h3>"; 
} else {
	echo "<h3>status table NOT created :( </h3>"; 
}
////////////////////////////////////
$tbl_photosorganization = "CREATE TABLE IF NOT EXISTS photosorganization ( 
                id INT(11) NOT NULL AUTO_INCREMENT,
			  firstname VARCHAR(16) NOT NULL,
			  lastname VARCHAR(16) NOT NULL,
               username VARCHAR(16) NOT NULL,
                gallery VARCHAR(16) NOT NULL,
				filename VARCHAR(255) NOT NULL,
                description VARCHAR(255) NULL,
                uploaddate DATETIME NOT NULL,
                PRIMARY KEY (id) 
                )"; 
$query = mysqli_query($con, $tbl_photosorganization); 
if ($query === TRUE) {
	echo "<h3>photosorganization table created OK :) </h3>"; 
} else {
	echo "<h3>photosorganization table NOT created :( </h3>"; 
}
////////////////////////////////////
?>
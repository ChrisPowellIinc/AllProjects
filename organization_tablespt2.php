<?php
include_once("php_includes/db_conx.php"); 

////////////////////////////////////
$tbl_O1000 = "CREATE TABLE IF NOT EXISTS O1000 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Airport','redacted') NOT NULL DEFAULT 'Airport',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1000); 
if ($query === TRUE) {
	echo "<h3>organ1000 table created OK :) </h3>"; 
} else {
	echo "<h3>organ1000 table NOT created :( </h3>"; 
}

$tbl_O1001 = "CREATE TABLE IF NOT EXISTS O1001 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Nightlife','redacted') NOT NULL DEFAULT 'Nightlife',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1001); 
if ($query === TRUE) {
	echo "<h3>tbl_O1001 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1001 table NOT created :( </h3>"; 
}

$tbl_O1002 = "CREATE TABLE IF NOT EXISTS O1002 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Attraction','redacted') NOT NULL DEFAULT 'Attraction',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1002); 
if ($query === TRUE) {
	echo "<h3>tbl_O1002 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1002 table NOT created :( </h3>"; 
}


$tbl_O1003 = "CREATE TABLE IF NOT EXISTS O1003 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Automotive','redacted') NOT NULL DEFAULT 'Automotive',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1003); 
if ($query === TRUE) {
	echo "<h3>tbl_O1003 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1003 table NOT created :( </h3>"; 
}

$tbl_O1004 = "CREATE TABLE IF NOT EXISTS O1004 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Finance Services','redacted') NOT NULL DEFAULT 'Finance Services',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1004); 
if ($query === TRUE) {
	echo "<h3>tbl_O1004 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1004 table NOT created :( </h3>"; 
}

$tbl_O1005 = "CREATE TABLE IF NOT EXISTS O1005 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Bar','redacted') NOT NULL DEFAULT 'Bar',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1005); 
if ($query === TRUE) {
	echo "<h3>tbl_O1005 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1005 table NOT created :( </h3>"; 
}

$tbl_O1006 = "CREATE TABLE IF NOT EXISTS O1006 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Book Store','redacted') NOT NULL DEFAULT 'Book Store',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1006); 
if ($query === TRUE) {
	echo "<h3>tbl_O1006 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1006 table NOT created :( </h3>"; 
}

$tbl_O1007 = "CREATE TABLE IF NOT EXISTS O1007 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Religious Organization','redacted') NOT NULL DEFAULT 'Religious Organization',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1007); 
if ($query === TRUE) {
	echo "<h3>tbl_O1007 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1007 table NOT created :( </h3>"; 
}

$tbl_O1008 = "CREATE TABLE IF NOT EXISTS O1008 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Club','redacted') NOT NULL DEFAULT 'Club',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1008); 
if ($query === TRUE) {
	echo "<h3>tbl_O1008 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1008 table NOT created :( </h3>"; 
}

$tbl_O1009 = "CREATE TABLE IF NOT EXISTS O1009 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Government','redacted') NOT NULL DEFAULT 'Government',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1009); 
if ($query === TRUE) {
	echo "<h3>tbl_O1009 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1009 table NOT created :( </h3>"; 
}

$tbl_O1010 = "CREATE TABLE IF NOT EXISTS O1010 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Concert Venue','redacted') NOT NULL DEFAULT 'Concert Venue',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1010); 
if ($query === TRUE) {
	echo "<h3>tbl_O1010 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1010 table NOT created :( </h3>"; 
}

$tbl_O1011 = "CREATE TABLE IF NOT EXISTS O1011 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Doctor','redacted') NOT NULL DEFAULT 'Doctor',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1011); 
if ($query === TRUE) {
	echo "<h3>tbl_O1011 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1011 table NOT created :( </h3>"; 
}

$tbl_O1012 = "CREATE TABLE IF NOT EXISTS O1012 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Event Services','redacted') NOT NULL DEFAULT 'Event Services',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1012); 
if ($query === TRUE) {
	echo "<h3>tbl_O1012 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1012 table NOT created :( </h3>"; 
}

$tbl_O1013 = "CREATE TABLE IF NOT EXISTS O1013 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Event Services','redacted') NOT NULL DEFAULT 'Event Services',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1013); 
if ($query === TRUE) {
	echo "<h3>tbl_O1013 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1013 table NOT created :( </h3>"; 
}

$tbl_O1014 = "CREATE TABLE IF NOT EXISTS O1014 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Grocery','redacted') NOT NULL DEFAULT 'Grocery',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1014); 
if ($query === TRUE) {
	echo "<h3>tbl_O1014 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1014 table NOT created :( </h3>"; 
}

$tbl_O1015 = "CREATE TABLE IF NOT EXISTS O1015 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Pharmacy','redacted') NOT NULL DEFAULT 'Pharmacy',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1015); 
if ($query === TRUE) {
	echo "<h3>tbl_O1015 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1015 table NOT created :( </h3>"; 
}

$tbl_O1016 = "CREATE TABLE IF NOT EXISTS O1016 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Home Improvement','redacted') NOT NULL DEFAULT 'Home Improvement',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1016); 
if ($query === TRUE) {
	echo "<h3>tbl_O1016 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1016 table NOT created :( </h3>"; 
}

$tbl_O1017 = "CREATE TABLE IF NOT EXISTS O1017 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Finance Services','redacted') NOT NULL DEFAULT 'Finance Services',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1017); 
if ($query === TRUE) {
	echo "<h3>tbl_O1017 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1017 table NOT created :( </h3>"; 
}

$tbl_O1018 = "CREATE TABLE IF NOT EXISTS O1018 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Hospital','redacted') NOT NULL DEFAULT 'Hospital',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1018); 
if ($query === TRUE) {
	echo "<h3>tbl_O1018 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1018 table NOT created :( </h3>"; 
}

$tbl_O1019 = "CREATE TABLE IF NOT EXISTS O1019 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Clinic','redacted') NOT NULL DEFAULT 'Clinic',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1019); 
if ($query === TRUE) {
	echo "<h3>tbl_O1019 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1019 table NOT created :( </h3>"; 
}

$tbl_O1020 = "CREATE TABLE IF NOT EXISTS O1020 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Hotel','redacted') NOT NULL DEFAULT 'Hotel',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1020); 
if ($query === TRUE) {
	echo "<h3>tbl_O1020 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1020 table NOT created :( </h3>"; 
}

$tbl_O1021 = "CREATE TABLE IF NOT EXISTS O1021 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Landmark','redacted') NOT NULL DEFAULT 'Landmark',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1021); 
if ($query === TRUE) {
	echo "<h3>tbl_O1021 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1021 table NOT created :( </h3>"; 
}

$tbl_O1022 = "CREATE TABLE IF NOT EXISTS O1022 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Lawyer Office','redacted') NOT NULL DEFAULT 'Lawyer Office',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1022); 
if ($query === TRUE) {
	echo "<h3>tbl_O1022 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1022 table NOT created :( </h3>"; 
}

$tbl_O1023 = "CREATE TABLE IF NOT EXISTS O1023 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Library','redacted') NOT NULL DEFAULT 'Library',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1023); 
if ($query === TRUE) {
	echo "<h3>tbl_O1023 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1023 table NOT created :( </h3>"; 
}

$tbl_O1024 = "CREATE TABLE IF NOT EXISTS O1024 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Other','redacted') NOT NULL DEFAULT 'Other',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1024); 
if ($query === TRUE) {
	echo "<h3>tbl_O1024 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1024 table NOT created :( </h3>"; 
}

$tbl_O1025 = "CREATE TABLE IF NOT EXISTS O1025 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Middle School','redacted') NOT NULL DEFAULT 'Middle School',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1025); 
if ($query === TRUE) {
	echo "<h3>tbl_O1025 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1025 table NOT created :( </h3>"; 
}

$tbl_O1026 = "CREATE TABLE IF NOT EXISTS O1026 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Movie Theater','redacted') NOT NULL DEFAULT 'Movie Theater',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1026); 
if ($query === TRUE) {
	echo "<h3>tbl_O1026 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1026 table NOT created :( </h3>"; 
}

$tbl_O1027 = "CREATE TABLE IF NOT EXISTS O1027 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Elementary School','redacted') NOT NULL DEFAULT 'Elementary School',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1027); 
if ($query === TRUE) {
	echo "<h3>tbl_O1027 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1027 table NOT created :( </h3>"; 
}

$tbl_O1028 = "CREATE TABLE IF NOT EXISTS O1028 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('High School','redacted') NOT NULL DEFAULT 'High School',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1028); 
if ($query === TRUE) {
	echo "<h3>tbl_O1028 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1028 table NOT created :( </h3>"; 
}

$tbl_O1029 = "CREATE TABLE IF NOT EXISTS O1029 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Energy/Utility','redacted') NOT NULL DEFAULT 'Energy/Utility',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1029); 
if ($query === TRUE) {
	echo "<h3>tbl_O1029 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1029 table NOT created :( </h3>"; 
}

$tbl_O1030 = "CREATE TABLE IF NOT EXISTS O1030 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Engineering/Construction','redacted') NOT NULL DEFAULT 'Engineering/Construction',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1030); 
if ($query === TRUE) {
	echo "<h3>tbl_O1030 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1030 table NOT created :( </h3>"; 
}

$tbl_O1031 = "CREATE TABLE IF NOT EXISTS O1031 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Farming/Agriculture','redacted') NOT NULL DEFAULT 'Farming/Agriculture',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1031); 
if ($query === TRUE) {
	echo "<h3>tbl_O1031 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1031 table NOT created :( </h3>"; 
}

$tbl_O1032 = "CREATE TABLE IF NOT EXISTS O1032 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Food/Beverages','redacted') NOT NULL DEFAULT 'Food/Beverages',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1032); 
if ($query === TRUE) {
	echo "<h3>tbl_O1032 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1032 table NOT created :( </h3>"; 
}

$tbl_O1033 = "CREATE TABLE IF NOT EXISTS O1033 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Government Organization','redacted') NOT NULL DEFAULT 'Government Organization',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1033); 
if ($query === TRUE) {
	echo "<h3>tbl_O1033 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1033 table NOT created :( </h3>"; 
}

$tbl_O1034 = "CREATE TABLE IF NOT EXISTS O1034 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Health/Beauty','redacted') NOT NULL DEFAULT 'Health/Beauty',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1034); 
if ($query === TRUE) {
	echo "<h3>tbl_O1034 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1034 table NOT created :( </h3>"; 
}

$tbl_O1035 = "CREATE TABLE IF NOT EXISTS O1035 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Fitness','redacted') NOT NULL DEFAULT 'Fitness',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1035); 
if ($query === TRUE) {
	echo "<h3>tbl_O1035 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1035 table NOT created :( </h3>"; 
}

$tbl_O1036 = "CREATE TABLE IF NOT EXISTS O1036 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Pharmaceuticals','redacted') NOT NULL DEFAULT 'Pharmaceuticals',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1036); 
if ($query === TRUE) {
	echo "<h3>tbl_O1036 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1036 table NOT created :( </h3>"; 
}

$tbl_O1037 = "CREATE TABLE IF NOT EXISTS O1037 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Investment','redacted') NOT NULL DEFAULT 'Investment',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1037); 
if ($query === TRUE) {
	echo "<h3>tbl_O1037 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1037 table NOT created :( </h3>"; 
}

$tbl_O1038 = "CREATE TABLE IF NOT EXISTS O1038 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Industrials','redacted') NOT NULL DEFAULT 'Industrials',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1038); 
if ($query === TRUE) {
	echo "<h3>tbl_O1038 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1038 table NOT created :( </h3>"; 
}

$tbl_O1039 = "CREATE TABLE IF NOT EXISTS O1039 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Insurance Company','redacted') NOT NULL DEFAULT 'Insurance Company',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1039); 
if ($query === TRUE) {
	echo "<h3>tbl_O1039 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1039 table NOT created :( </h3>"; 
}

$tbl_O1040 = "CREATE TABLE IF NOT EXISTS O1040 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Internet/Software','redacted') NOT NULL DEFAULT 'Internet/Software',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1040); 
if ($query === TRUE) {
	echo "<h3>tbl_O1040 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1040 table NOT created :( </h3>"; 
}

$tbl_O1041 = "CREATE TABLE IF NOT EXISTS O1041 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Legal/Law','redacted') NOT NULL DEFAULT 'Legal/Law',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1041); 
if ($query === TRUE) {
	echo "<h3>tbl_O1041 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1041 table NOT created :( </h3>"; 
}

$tbl_O1042 = "CREATE TABLE IF NOT EXISTS O1042 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Media/News/Publishing','redacted') NOT NULL DEFAULT 'Media/News/Publishing',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1042); 
if ($query === TRUE) {
	echo "<h3>tbl_O1042 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1042 table NOT created :( </h3>"; 
}

$tbl_O1043 = "CREATE TABLE IF NOT EXISTS O1043 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Mining/Materials','redacted') NOT NULL DEFAULT 'Mining/Materials',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1043); 
if ($query === TRUE) {
	echo "<h3>tbl_O1043 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1043 table NOT created :( </h3>"; 
}

$tbl_O1044 = "CREATE TABLE IF NOT EXISTS O1044 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Non-Profit Organization','redacted') NOT NULL DEFAULT 'Non-Profit Organization',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1044); 
if ($query === TRUE) {
	echo "<h3>tbl_O1044 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1044 table NOT created :( </h3>"; 
}


$tbl_O1045 = "CREATE TABLE IF NOT EXISTS O1045 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Organization','redacted') NOT NULL DEFAULT 'Organization',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1045); 
if ($query === TRUE) {
	echo "<h3>tbl_O1045 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1045 table NOT created :( </h3>"; 
}

$tbl_O1046 = "CREATE TABLE IF NOT EXISTS O1046 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Political Organization','redacted') NOT NULL DEFAULT 'Political Organization',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1046); 
if ($query === TRUE) {
	echo "<h3>tbl_O1046 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1046 table NOT created :( </h3>"; 
}

$tbl_O1047 = "CREATE TABLE IF NOT EXISTS O1047 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Political Party','redacted') NOT NULL DEFAULT 'Political Party',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1047); 
if ($query === TRUE) {
	echo "<h3>tbl_O1047 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1047 table NOT created :( </h3>"; 
}

$tbl_O1048 = "CREATE TABLE IF NOT EXISTS O1048 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Preschool','redacted') NOT NULL DEFAULT 'Preschool',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1048); 
if ($query === TRUE) {
	echo "<h3>tbl_O1048 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1048 table NOT created :( </h3>"; 
}

$tbl_O1049 = "CREATE TABLE IF NOT EXISTS O1049 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('School','redacted') NOT NULL DEFAULT 'School',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1049); 
if ($query === TRUE) {
	echo "<h3>tbl_O1049 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1049 table NOT created :( </h3>"; 
}

$tbl_O1050 = "CREATE TABLE IF NOT EXISTS O1050 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Small Business','redacted') NOT NULL DEFAULT 'Small Business',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1050); 
if ($query === TRUE) {
	echo "<h3>tbl_O1050 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1050 table NOT created :( </h3>"; 
}

$tbl_O1051 = "CREATE TABLE IF NOT EXISTS O1051 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Telecommunication','redacted') NOT NULL DEFAULT 'Telecommunication',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1051); 
if ($query === TRUE) {
	echo "<h3>tbl_O1051 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1051 table NOT created :( </h3>"; 
}

$tbl_O1052 = "CREATE TABLE IF NOT EXISTS O1052 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Transport/Freight','redacted') NOT NULL DEFAULT 'Transport/Freight',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1052); 
if ($query === TRUE) {
	echo "<h3>tbl_O1052 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1052 table NOT created :( </h3>"; 
}

$tbl_O1053 = "CREATE TABLE IF NOT EXISTS O1053 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Travel','redacted') NOT NULL DEFAULT 'Travel',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1053); 
if ($query === TRUE) {
	echo "<h3>tbl_O1053 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1053 table NOT created :( </h3>"; 
}

$tbl_O1054 = "CREATE TABLE IF NOT EXISTS O1054 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Leisure','redacted') NOT NULL DEFAULT 'Leisure',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1054); 
if ($query === TRUE) {
	echo "<h3>tbl_O1054 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1054 table NOT created :( </h3>"; 
}

$tbl_O1055 = "CREATE TABLE IF NOT EXISTS O1055 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('App Page','redacted') NOT NULL DEFAULT 'App Page',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1055); 
if ($query === TRUE) {
	echo "<h3>tbl_O1055 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1055 table NOT created :( </h3>"; 
}

$tbl_O1056 = "CREATE TABLE IF NOT EXISTS O1056 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Appliances','redacted') NOT NULL DEFAULT 'Appliances',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1056); 
if ($query === TRUE) {
	echo "<h3>tbl_O1056 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1056 table NOT created :( </h3>"; 
}

$tbl_O1057 = "CREATE TABLE IF NOT EXISTS O1057 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Baby Goods/Kids Goods','redacted') NOT NULL DEFAULT 'Baby Goods/Kids Goods',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1057); 
if ($query === TRUE) {
	echo "<h3>tbl_O1057 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1057 table NOT created :( </h3>"; 
}

$tbl_O1058 = "CREATE TABLE IF NOT EXISTS O1058 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Bags/Luggage','redacted') NOT NULL DEFAULT 'Bags/Luggage',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1058); 
if ($query === TRUE) {
	echo "<h3>tbl_O1058 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1058 table NOT created :( </h3>"; 
}

$tbl_O1059 = "CREATE TABLE IF NOT EXISTS O1059 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Board Game','redacted') NOT NULL DEFAULT 'Board Game',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1059); 
if ($query === TRUE) {
	echo "<h3>tbl_O1059 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1059 table NOT created :( </h3>"; 
}

$tbl_O1060 = "CREATE TABLE IF NOT EXISTS O1060 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Building Materials','redacted') NOT NULL DEFAULT 'Building Materials',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1060); 
if ($query === TRUE) {
	echo "<h3>tbl_O1060 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1060 table NOT created :( </h3>"; 
}

$tbl_O1061 = "CREATE TABLE IF NOT EXISTS O1061 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Camera/Photo','redacted') NOT NULL DEFAULT 'Camera/Photo',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1061); 
if ($query === TRUE) {
	echo "<h3>tbl_O1061 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1061 table NOT created :( </h3>"; 
}

$tbl_O1062 = "CREATE TABLE IF NOT EXISTS O1062 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Cars','redacted') NOT NULL DEFAULT 'Cars',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1062); 
if ($query === TRUE) {
	echo "<h3>tbl_O1062 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1062 table NOT created :( </h3>"; 
}

$tbl_O1063 = "CREATE TABLE IF NOT EXISTS O1063 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Clothing','redacted') NOT NULL DEFAULT 'Clothing',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1063); 
if ($query === TRUE) {
	echo "<h3>tbl_O1063 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1063 table NOT created :( </h3>"; 
}

$tbl_O1064 = "CREATE TABLE IF NOT EXISTS O1064 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Computers','redacted') NOT NULL DEFAULT 'Computers',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1064); 
if ($query === TRUE) {
	echo "<h3>tbl_O1064 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1064 table NOT created :( </h3>"; 
}

$tbl_O1065 = "CREATE TABLE IF NOT EXISTS O1065 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Drugs','redacted') NOT NULL DEFAULT 'Drugs',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1065); 
if ($query === TRUE) {
	echo "<h3>tbl_O1065 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1065 table NOT created :( </h3>"; 
}

$tbl_O1066 = "CREATE TABLE IF NOT EXISTS O1066 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Electronics','redacted') NOT NULL DEFAULT 'Electronics',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1066); 
if ($query === TRUE) {
	echo "<h3>tbl_O1066 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1066 table NOT created :( </h3>"; 
}

$tbl_O1067 = "CREATE TABLE IF NOT EXISTS O1067 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Furniture','redacted') NOT NULL DEFAULT 'Furniture',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1067); 
if ($query === TRUE) {
	echo "<h3>tbl_O1067 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1067 table NOT created :( </h3>"; 
}

$tbl_O1068 = "CREATE TABLE IF NOT EXISTS O1068 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Games/Toys','redacted') NOT NULL DEFAULT 'Games/Toys',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1068); 
if ($query === TRUE) {
	echo "<h3>tbl_O1068 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1068 table NOT created :( </h3>"; 
}

$tbl_O1069 = "CREATE TABLE IF NOT EXISTS O1069 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Home Decor','redacted') NOT NULL DEFAULT 'Home Decor',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1069); 
if ($query === TRUE) {
	echo "<h3>tbl_O1069 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1069 table NOT created :( </h3>"; 
}

$tbl_O1070 = "CREATE TABLE IF NOT EXISTS O1070 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Household Supplies','redacted') NOT NULL DEFAULT 'Household Supplies',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1070); 
if ($query === TRUE) {
	echo "<h3>tbl_O1070 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1070 table NOT created :( </h3>"; 
}

$tbl_O1071 = "CREATE TABLE IF NOT EXISTS O1071 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Jewelry/Watches','redacted') NOT NULL DEFAULT 'Jewelry/Watches',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1071); 
if ($query === TRUE) {
	echo "<h3>tbl_O1071 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1071 table NOT created :( </h3>"; 
}
$tbl_O1072 = "CREATE TABLE IF NOT EXISTS O1072 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Kitchen/Cooking','redacted') NOT NULL DEFAULT 'Kitchen/Cooking',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1072); 
if ($query === TRUE) {
	echo "<h3>tbl_O1072 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1072 table NOT created :( </h3>"; 
}

$tbl_O1073 = "CREATE TABLE IF NOT EXISTS O1073 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Office Supplies','redacted') NOT NULL DEFAULT 'Office Supplies',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1073); 
if ($query === TRUE) {
	echo "<h3>tbl_O1073 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1073 table NOT created :( </h3>"; 
}

$tbl_O1074 = "CREATE TABLE IF NOT EXISTS O1074 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Patio/Garden','redacted') NOT NULL DEFAULT 'Patio/Garden',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1074); 
if ($query === TRUE) {
	echo "<h3>tbl_O1074 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1074 table NOT created :( </h3>"; 
}

$tbl_O1075 = "CREATE TABLE IF NOT EXISTS O1075 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Pet Supplies','redacted') NOT NULL DEFAULT 'Pet Supplies',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1075); 
if ($query === TRUE) {
	echo "<h3>tbl_O1075 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1075 table NOT created :( </h3>"; 
}

$tbl_O1076 = "CREATE TABLE IF NOT EXISTS O1076 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Phone/Tablet','redacted') NOT NULL DEFAULT 'Phone/Tablet',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1076); 
if ($query === TRUE) {
	echo "<h3>tbl_O1076 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1076 table NOT created :( </h3>"; 
}

$tbl_O1077 = "CREATE TABLE IF NOT EXISTS O1077 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Software','redacted') NOT NULL DEFAULT 'Software',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1077); 
if ($query === TRUE) {
	echo "<h3>tbl_O1077 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1077 table NOT created :( </h3>"; 
}

$tbl_O1078 = "CREATE TABLE IF NOT EXISTS O1078 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Tools/Equipment','redacted') NOT NULL DEFAULT 'Tools/Equipment',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1078); 
if ($query === TRUE) {
	echo "<h3>tbl_O1078 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1078 table NOT created :( </h3>"; 
}

$tbl_O1079 = "CREATE TABLE IF NOT EXISTS O1079 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Video Game','redacted') NOT NULL DEFAULT 'Video Game',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1079); 
if ($query === TRUE) {
	echo "<h3>tbl_O1079 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1079 table NOT created :( </h3>"; 
}

$tbl_O1080 = "CREATE TABLE IF NOT EXISTS O1080 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Vitamins/Supplements','redacted') NOT NULL DEFAULT 'Vitamins/Supplements',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1080); 
if ($query === TRUE) {
	echo "<h3>tbl_O1080 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1080 table NOT created :( </h3>"; 
}

$tbl_O1081 = "CREATE TABLE IF NOT EXISTS O1081 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Website','redacted') NOT NULL DEFAULT 'Website',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1081); 
if ($query === TRUE) {
	echo "<h3>tbl_O1081 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1081 table NOT created :( </h3>"; 
}

$tbl_O1082 = "CREATE TABLE IF NOT EXISTS O1082 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Wine/Spirits','redacted') NOT NULL DEFAULT 'Wine/Spirits',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1082); 
if ($query === TRUE) {
	echo "<h3>tbl_O1082 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1082 table NOT created :( </h3>"; 
}

$tbl_O1083 = "CREATE TABLE IF NOT EXISTS O1083 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Actor/Director','redacted') NOT NULL DEFAULT 'Actor/Director',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1083); 
if ($query === TRUE) {
	echo "<h3>tbl_O1083 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1083 table NOT created :( </h3>"; 
}

$tbl_O1084 = "CREATE TABLE IF NOT EXISTS O1084 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Artist','redacted') NOT NULL DEFAULT 'Artist',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1084); 
if ($query === TRUE) {
	echo "<h3>tbl_O1084 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1084 table NOT created :( </h3>"; 
}

$tbl_O1085 = "CREATE TABLE IF NOT EXISTS O1085 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Athlete','redacted') NOT NULL DEFAULT 'Athlete',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1085); 
if ($query === TRUE) {
	echo "<h3>tbl_O1085 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1085 table NOT created :( </h3>"; 
}

$tbl_O1086 = "CREATE TABLE IF NOT EXISTS O1086 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Author','redacted') NOT NULL DEFAULT 'Author',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1086); 
if ($query === TRUE) {
	echo "<h3>tbl_O1086 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1086 table NOT created :( </h3>"; 
}

$tbl_O1087 = "CREATE TABLE IF NOT EXISTS O1087 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Blogger','redacted') NOT NULL DEFAULT 'Blogger',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1087); 
if ($query === TRUE) {
	echo "<h3>tbl_O1087 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1087 table NOT created :( </h3>"; 
}

$tbl_O1088 = "CREATE TABLE IF NOT EXISTS O1088 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Business Person','redacted') NOT NULL DEFAULT 'Business Person',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1088); 
if ($query === TRUE) {
	echo "<h3>tbl_O1088 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1088 table NOT created :( </h3>"; 
}

$tbl_O1089 = "CREATE TABLE IF NOT EXISTS O1089 ( 
			 orgtypeid INT(11) NOT NULL AUTO_INCREMENT,
             orgid VARCHAR(255) NOT NULL,
			  type ENUM('Chef','redacted') NOT NULL DEFAULT 'Chef',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (orgtypeid),
 			  UNIQUE KEY username (orgtypeid,orgid)
                )"; 
$query = mysqli_query($con, $tbl_O1089); 
if ($query === TRUE) {
	echo "<h3>tbl_O1089 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O1089 table NOT created :( </h3>"; 
}




?>
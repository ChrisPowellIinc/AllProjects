<?php
include_once("php_includes/db_conx.php"); 

////////////////////////////////////
$tbl_O2000 = "CREATE TABLE IF NOT EXISTS O2000 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Blues','redacted') NOT NULL DEFAULT 'Blues',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2000); 
if ($query === TRUE) {
	echo "<h3>music2000 table created OK :) </h3>"; 
} else {
	echo "<h3>music2000 table NOT created :( </h3>"; 
}

$tbl_O2001 = "CREATE TABLE IF NOT EXISTS O2001 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Chicago Blues','redacted') NOT NULL DEFAULT 'Chicago Blues',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2001); 
if ($query === TRUE) {
	echo "<h3>tbl_O2001 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2001 table NOT created :( </h3>"; 
}

$tbl_O2002 = "CREATE TABLE IF NOT EXISTS O2002 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Classic Blues','redacted') NOT NULL DEFAULT 'Classic Blues',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2002); 
if ($query === TRUE) {
	echo "<h3>tbl_O2002 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2002 table NOT created :( </h3>"; 
}

$tbl_O2003 = "CREATE TABLE IF NOT EXISTS O2003 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Contemporary Blues','redacted') NOT NULL DEFAULT 'Contemporary Blues',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2003); 
if ($query === TRUE) {
	echo "<h3>tbl_O2003 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2003 table NOT created :( </h3>"; 
}

$tbl_O2004 = "CREATE TABLE IF NOT EXISTS O2004 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Country Blues','redacted') NOT NULL DEFAULT 'Country Blues',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2004); 
if ($query === TRUE) {
	echo "<h3>tbl_O2004 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2004 table NOT created :( </h3>"; 
}

$tbl_O2005 = "CREATE TABLE IF NOT EXISTS O2005 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Delta Blues','redacted') NOT NULL DEFAULT 'Delta Blues',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2005); 
if ($query === TRUE) {
	echo "<h3>tbl_O2005 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2005 table NOT created :( </h3>"; 
}

$tbl_O2006 = "CREATE TABLE IF NOT EXISTS O2006 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Electric Blues','redacted') NOT NULL DEFAULT 'Electric Blues',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2006); 
if ($query === TRUE) {
	echo "<h3>tbl_O2006 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2006 table NOT created :( </h3>"; 
}

$tbl_O2007 = "CREATE TABLE IF NOT EXISTS O2007 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Acoustic Blues','redacted') NOT NULL DEFAULT 'Acoustic Blues',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2007); 
if ($query === TRUE) {
	echo "<h3>tbl_O2007 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2007 table NOT created :( </h3>"; 
}

$tbl_O2008 = "CREATE TABLE IF NOT EXISTS O2008 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Comedy','redacted') NOT NULL DEFAULT 'Comedy',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2008); 
if ($query === TRUE) {
	echo "<h3>tbl_O2008 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2008 table NOT created :( </h3>"; 
}

$tbl_O2009 = "CREATE TABLE IF NOT EXISTS O2009 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Novelty','redacted') NOT NULL DEFAULT 'Novelty',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2009); 
if ($query === TRUE) {
	echo "<h3>tbl_O2009 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2009 table NOT created :( </h3>"; 
}

$tbl_O2010 = "CREATE TABLE IF NOT EXISTS O2010 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Standup Comedy','redacted') NOT NULL DEFAULT 'Standup Comedy',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2010); 
if ($query === TRUE) {
	echo "<h3>tbl_O2010 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2010 table NOT created :( </h3>"; 
}

$tbl_O2011 = "CREATE TABLE IF NOT EXISTS O2011 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Lullabies','redacted') NOT NULL DEFAULT 'Lullabies',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2011); 
if ($query === TRUE) {
	echo "<h3>tbl_O2011 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2011 table NOT created :( </h3>"; 
}


$tbl_O2012 = "CREATE TABLE IF NOT EXISTS O2012 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Sing-Along','redacted') NOT NULL DEFAULT 'Sing-Along',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2012); 
if ($query === TRUE) {
	echo "<h3>tbl_O2012 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2012 table NOT created :( </h3>"; 
}

$tbl_O2013 = "CREATE TABLE IF NOT EXISTS O2013 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Stories','redacted') NOT NULL DEFAULT 'Stories',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2013); 
if ($query === TRUE) {
	echo "<h3>tbl_O2013 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2013 table NOT created :( </h3>"; 
}

$tbl_O2014 = "CREATE TABLE IF NOT EXISTS O2014 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Classical','redacted') NOT NULL DEFAULT 'Classical',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2014); 
if ($query === TRUE) {
	echo "<h3>tbl_O2014 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2014 table NOT created :( </h3>"; 
}

$tbl_O2015 = "CREATE TABLE IF NOT EXISTS O2015 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Avant-Garde','redacted') NOT NULL DEFAULT 'Avant-Garde',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2015); 
if ($query === TRUE) {
	echo "<h3>tbl_O2015 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2015 table NOT created :( </h3>"; 
}

$tbl_O2016 = "CREATE TABLE IF NOT EXISTS O2016 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Baroque','redacted') NOT NULL DEFAULT 'Baroque',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2016); 
if ($query === TRUE) {
	echo "<h3>tbl_O2016 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2016 table NOT created :( </h3>"; 
}

$tbl_O2017 = "CREATE TABLE IF NOT EXISTS O2017 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Chamber Music','redacted') NOT NULL DEFAULT 'Chamber Music',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2017); 
if ($query === TRUE) {
	echo "<h3>tbl_O2017 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2017 table NOT created :( </h3>"; 
}

$tbl_O2018 = "CREATE TABLE IF NOT EXISTS O2018 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Chant','redacted') NOT NULL DEFAULT 'Chant',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2018); 
if ($query === TRUE) {
	echo "<h3>tbl_O2018 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2018 table NOT created :( </h3>"; 
}

$tbl_O2019 = "CREATE TABLE IF NOT EXISTS O2019 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Choral','redacted') NOT NULL DEFAULT 'Choral',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2019); 
if ($query === TRUE) {
	echo "<h3>tbl_O2019 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2019 table NOT created :( </h3>"; 
}

$tbl_O2020 = "CREATE TABLE IF NOT EXISTS O2020 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Classical Crossover','redacted') NOT NULL DEFAULT 'Classical Crossover',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2020); 
if ($query === TRUE) {
	echo "<h3>tbl_O2020 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2020 table NOT created :( </h3>"; 
}


$tbl_O2021 = "CREATE TABLE IF NOT EXISTS O2021 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Early Music','redacted') NOT NULL DEFAULT 'Early Music',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2021); 
if ($query === TRUE) {
	echo "<h3>tbl_O2021 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2021 table NOT created :( </h3>"; 
}


$tbl_O2022 = "CREATE TABLE IF NOT EXISTS O2022 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Impressionist','redacted') NOT NULL DEFAULT 'Impressionist',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2022); 
if ($query === TRUE) {
	echo "<h3>tbl_O2022 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2022 table NOT created :( </h3>"; 
}


$tbl_O2023 = "CREATE TABLE IF NOT EXISTS O2023 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Medieval','redacted') NOT NULL DEFAULT 'Medieval',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2023); 
if ($query === TRUE) {
	echo "<h3>tbl_O2023 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2023 table NOT created :( </h3>"; 
}

$tbl_O2024 = "CREATE TABLE IF NOT EXISTS O2024 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Minimalism','redacted') NOT NULL DEFAULT 'Minimalism',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2024); 
if ($query === TRUE) {
	echo "<h3>tbl_O2024 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2024 table NOT created :( </h3>"; 
}

$tbl_O2025 = "CREATE TABLE IF NOT EXISTS O2025 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Modern Composition','redacted') NOT NULL DEFAULT 'Modern Composition',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2025); 
if ($query === TRUE) {
	echo "<h3>tbl_O2025 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2025 table NOT created :( </h3>"; 
}

$tbl_O2026 = "CREATE TABLE IF NOT EXISTS O2026 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Opera','redacted') NOT NULL DEFAULT 'Opera',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2026); 
if ($query === TRUE) {
	echo "<h3>tbl_O2026 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2026 table NOT created :( </h3>"; 
}

$tbl_O2027 = "CREATE TABLE IF NOT EXISTS O2027 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Orchestral','redacted') NOT NULL DEFAULT 'Orchestral',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2027); 
if ($query === TRUE) {
	echo "<h3>tbl_O2027 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2027 table NOT created :( </h3>"; 
}

$tbl_O2028 = "CREATE TABLE IF NOT EXISTS O2028 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Renaissance','redacted') NOT NULL DEFAULT 'Renaissance',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2028); 
if ($query === TRUE) {
	echo "<h3>tbl_O2028 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2028 table NOT created :( </h3>"; 
}

$tbl_O2029 = "CREATE TABLE IF NOT EXISTS O2029 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Romantic','redacted') NOT NULL DEFAULT 'Romantic',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2029); 
if ($query === TRUE) {
	echo "<h3>tbl_O2029 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2029 table NOT created :( </h3>"; 
}

$tbl_O2030 = "CREATE TABLE IF NOT EXISTS O2030 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Wedding Music','redacted') NOT NULL DEFAULT 'Wedding Music',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2030); 
if ($query === TRUE) {
	echo "<h3>tbl_O2030 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2030 table NOT created :( </h3>"; 
}

$tbl_O2031 = "CREATE TABLE IF NOT EXISTS O2031 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('High Classical','redacted') NOT NULL DEFAULT 'High Classical',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2031); 
if ($query === TRUE) {
	echo "<h3>tbl_O2031 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2031 table NOT created :( </h3>"; 
}

$tbl_O2032 = "CREATE TABLE IF NOT EXISTS O2032 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Country','redacted') NOT NULL DEFAULT 'Country',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2032); 
if ($query === TRUE) {
	echo "<h3>tbl_O2032 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2032 table NOT created :( </h3>"; 
}


$tbl_O2033 = "CREATE TABLE IF NOT EXISTS O2033 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Alternative Country','redacted') NOT NULL DEFAULT 'Alternative Country',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2033); 
if ($query === TRUE) {
	echo "<h3>tbl_O2033 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2033 table NOT created :( </h3>"; 
}

$tbl_O2034 = "CREATE TABLE IF NOT EXISTS O2034 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Americana','redacted') NOT NULL DEFAULT 'Americana',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2034); 
if ($query === TRUE) {
	echo "<h3>tbl_O2034 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2034 table NOT created :( </h3>"; 
}

$tbl_O2035 = "CREATE TABLE IF NOT EXISTS O2035 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Bluegrass','redacted') NOT NULL DEFAULT 'Bluegrass',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2035); 
if ($query === TRUE) {
	echo "<h3>tbl_O2035 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2035 table NOT created :( </h3>"; 
}

$tbl_O2036 = "CREATE TABLE IF NOT EXISTS O2036 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Contemporary Bluegrass','redacted') NOT NULL DEFAULT 'Contemporary Bluegrass',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2036); 
if ($query === TRUE) {
	echo "<h3>tbl_O2036 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2036 table NOT created :( </h3>"; 
}

$tbl_O2037 = "CREATE TABLE IF NOT EXISTS O2037 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Contemporary Country','redacted') NOT NULL DEFAULT 'Contemporary Country',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2037); 
if ($query === TRUE) {
	echo "<h3>tbl_O2037 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2037 table NOT created :( </h3>"; 
}

$tbl_O2038 = "CREATE TABLE IF NOT EXISTS O2038 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Country Gospel','redacted') NOT NULL DEFAULT 'Country Gospel',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2038); 
if ($query === TRUE) {
	echo "<h3>tbl_O2038 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2038 table NOT created :( </h3>"; 
}

$tbl_O2039 = "CREATE TABLE IF NOT EXISTS O2039 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Honky Tonk','redacted') NOT NULL DEFAULT 'Honky Tonk',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2039); 
if ($query === TRUE) {
	echo "<h3>tbl_O2039 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2039 table NOT created :( </h3>"; 
}

$tbl_O2040 = "CREATE TABLE IF NOT EXISTS O2040 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Outlaw Country','redacted') NOT NULL DEFAULT 'Outlaw Country',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2040); 
if ($query === TRUE) {
	echo "<h3>tbl_O2040 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2040 table NOT created :( </h3>"; 
}

$tbl_O2041 = "CREATE TABLE IF NOT EXISTS O2041 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Traditional Bluegrass','redacted') NOT NULL DEFAULT 'Traditional Bluegrass',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2041); 
if ($query === TRUE) {
	echo "<h3>tbl_O2041 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2041 table NOT created :( </h3>"; 
}

$tbl_O2042 = "CREATE TABLE IF NOT EXISTS O2042 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Traditional Country','redacted') NOT NULL DEFAULT 'Traditional Country',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2042); 
if ($query === TRUE) {
	echo "<h3>tbl_O2042 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2042 table NOT created :( </h3>"; 
}

$tbl_O2043 = "CREATE TABLE IF NOT EXISTS O2043 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Urban Cowboy','redacted') NOT NULL DEFAULT 'Urban Cowboy',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2043); 
if ($query === TRUE) {
	echo "<h3>tbl_O2043 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2043 table NOT created :( </h3>"; 
}

$tbl_O2044 = "CREATE TABLE IF NOT EXISTS O2044 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Electronic','redacted') NOT NULL DEFAULT 'Electronic',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2044); 
if ($query === TRUE) {
	echo "<h3>tbl_O2044 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2044 table NOT created :( </h3>"; 
}

$tbl_O2045 = "CREATE TABLE IF NOT EXISTS O2045 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Ambient','redacted') NOT NULL DEFAULT 'Ambient',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2045); 
if ($query === TRUE) {
	echo "<h3>tbl_O2045 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2045 table NOT created :( </h3>"; 
}

$tbl_O2046 = "CREATE TABLE IF NOT EXISTS O2046 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Downtempo','redacted') NOT NULL DEFAULT 'Downtempo',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2046); 
if ($query === TRUE) {
	echo "<h3>tbl_O2046 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2046 table NOT created :( </h3>"; 
}

$tbl_O2047 = "CREATE TABLE IF NOT EXISTS O2047 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Electronica','redacted') NOT NULL DEFAULT 'Electronica',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2047); 
if ($query === TRUE) {
	echo "<h3>tbl_O2047 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2047 table NOT created :( </h3>"; 
}

$tbl_O2048 = "CREATE TABLE IF NOT EXISTS O2048 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('IDM/Experimental','redacted') NOT NULL DEFAULT 'IDM/Experimental',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2048); 
if ($query === TRUE) {
	echo "<h3>tbl_O2048 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2048 table NOT created :( </h3>"; 
}

$tbl_O2050 = "CREATE TABLE IF NOT EXISTS O2050 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Holiday','redacted') NOT NULL DEFAULT 'Holiday',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2050); 
if ($query === TRUE) {
	echo "<h3>tbl_O2050 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2050 table NOT created :( </h3>"; 
}

$tbl_O2051 = "CREATE TABLE IF NOT EXISTS O2051 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Chanukah','redacted') NOT NULL DEFAULT 'Chanukah',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2051); 
if ($query === TRUE) {
	echo "<h3>tbl_O2051 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2051 table NOT created :( </h3>"; 
}

$tbl_O2052 = "CREATE TABLE IF NOT EXISTS O2052 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Christmas','redacted') NOT NULL DEFAULT 'Christmas',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2052); 
if ($query === TRUE) {
	echo "<h3>tbl_O2052 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2052 table NOT created :( </h3>"; 
}

$tbl_O2053 = "CREATE TABLE IF NOT EXISTS O2053 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Christmas: Children','redacted') NOT NULL DEFAULT 'Christmas: Children',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2053); 
if ($query === TRUE) {
	echo "<h3>tbl_O2053 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2053 table NOT created :( </h3>"; 
}

$tbl_O2054 = "CREATE TABLE IF NOT EXISTS O2054 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Christmas: Classic','redacted') NOT NULL DEFAULT 'Christmas: Classic',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2054); 
if ($query === TRUE) {
	echo "<h3>tbl_O2054 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2054 table NOT created :( </h3>"; 
}

$tbl_O2055 = "CREATE TABLE IF NOT EXISTS O2055 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Christmas: Classical','redacted') NOT NULL DEFAULT 'Christmas: Classical',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2055); 
if ($query === TRUE) {
	echo "<h3>tbl_O2055 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2055 table NOT created :( </h3>"; 
}

$tbl_O2056 = "CREATE TABLE IF NOT EXISTS O2056 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Christmas: Jazz','redacted') NOT NULL DEFAULT 'Christmas: Jazz',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2056); 
if ($query === TRUE) {
	echo "<h3>tbl_O2056 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2056 table NOT created :( </h3>"; 
}

$tbl_O2057 = "CREATE TABLE IF NOT EXISTS O2057 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Christmas: Modern','redacted') NOT NULL DEFAULT 'Christmas: Modern',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2057); 
if ($query === TRUE) {
	echo "<h3>tbl_O2057 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2057 table NOT created :( </h3>"; 
}

$tbl_O2058 = "CREATE TABLE IF NOT EXISTS O2058 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Christmas: Pop','redacted') NOT NULL DEFAULT 'Christmas: Pop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2058); 
if ($query === TRUE) {
	echo "<h3>tbl_O2058 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2058 table NOT created :( </h3>"; 
}

$tbl_O2059 = "CREATE TABLE IF NOT EXISTS O2059 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Christmas: R&B','redacted') NOT NULL DEFAULT 'Christmas: R&B',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2059); 
if ($query === TRUE) {
	echo "<h3>tbl_O2059 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2059 table NOT created :( </h3>"; 
}

$tbl_O2060 = "CREATE TABLE IF NOT EXISTS O2060 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Christmas: Religious','redacted') NOT NULL DEFAULT 'Christmas: Religious',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2060); 
if ($query === TRUE) {
	echo "<h3>tbl_O2060 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2060 table NOT created :( </h3>"; 
}

$tbl_O2061 = "CREATE TABLE IF NOT EXISTS O2061 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Christmas: Rock','redacted') NOT NULL DEFAULT 'Christmas: Rock',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2061); 
if ($query === TRUE) {
	echo "<h3>tbl_O2061 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2061 table NOT created :( </h3>"; 
}

$tbl_O2062 = "CREATE TABLE IF NOT EXISTS O2062 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Easter','redacted') NOT NULL DEFAULT 'Easter',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2062); 
if ($query === TRUE) {
	echo "<h3>tbl_O2062 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2062 table NOT created :( </h3>"; 
}

$tbl_O2063 = "CREATE TABLE IF NOT EXISTS O2063 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Halloween','redacted') NOT NULL DEFAULT 'Halloween',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2063); 
if ($query === TRUE) {
	echo "<h3>tbl_O2063 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2063 table NOT created :( </h3>"; 
}

$tbl_O2064 = "CREATE TABLE IF NOT EXISTS O2064 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Holiday: Other','redacted') NOT NULL DEFAULT 'Holiday: Other',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2064); 
if ($query === TRUE) {
	echo "<h3>tbl_O2064 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2064 table NOT created :( </h3>"; 
}

$tbl_O2065 = "CREATE TABLE IF NOT EXISTS O2065 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Thanksgiving','redacted') NOT NULL DEFAULT 'Thanksgiving',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2065); 
if ($query === TRUE) {
	echo "<h3>tbl_O2065 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2065 table NOT created :( </h3>"; 
}

$tbl_O2066 = "CREATE TABLE IF NOT EXISTS O2066 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Opera','redacted') NOT NULL DEFAULT 'Opera',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2066); 
if ($query === TRUE) {
	echo "<h3>tbl_O2066 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2066 table NOT created :( </h3>"; 
}

$tbl_O2067 = "CREATE TABLE IF NOT EXISTS O2067 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Singer/Songwriter','redacted') NOT NULL DEFAULT 'Singer/Songwriter',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2067); 
if ($query === TRUE) {
	echo "<h3>tbl_O2067 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2067 table NOT created :( </h3>"; 
}

$tbl_O2068 = "CREATE TABLE IF NOT EXISTS O2068 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Alternative Folk','redacted') NOT NULL DEFAULT 'Alternative Folk',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2068); 
if ($query === TRUE) {
	echo "<h3>tbl_O2068 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2068 table NOT created :( </h3>"; 
}

$tbl_O2069 = "CREATE TABLE IF NOT EXISTS O2069 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Contemporary Folk','redacted') NOT NULL DEFAULT 'Contemporary Folk',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2069); 
if ($query === TRUE) {
	echo "<h3>tbl_O2069 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2069 table NOT created :( </h3>"; 
}

$tbl_O2070 = "CREATE TABLE IF NOT EXISTS O2070 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Contemporary Singer/Songwriter','redacted') NOT NULL DEFAULT 'Contemporary Singer/Songwriter',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2070); 
if ($query === TRUE) {
	echo "<h3>tbl_O2070 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2070 table NOT created :( </h3>"; 
}

$tbl_O2071 = "CREATE TABLE IF NOT EXISTS O2071 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Folk-Rock','redacted') NOT NULL DEFAULT 'Folk-Rock',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2071); 
if ($query === TRUE) {
	echo "<h3>tbl_O2071 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2071 table NOT created :( </h3>"; 
}

$tbl_O2072 = "CREATE TABLE IF NOT EXISTS O2072 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('New Acoustic','redacted') NOT NULL DEFAULT 'New Acoustic',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2072); 
if ($query === TRUE) {
	echo "<h3>tbl_O2072 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2072 table NOT created :( </h3>"; 
}

$tbl_O2073 = "CREATE TABLE IF NOT EXISTS O2073 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Traditional Folk','redacted') NOT NULL DEFAULT 'Traditional Folk',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2073); 
if ($query === TRUE) {
	echo "<h3>tbl_O2073 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2073 table NOT created :( </h3>"; 
}

$tbl_O2074 = "CREATE TABLE IF NOT EXISTS O2074 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Jazz','redacted') NOT NULL DEFAULT 'Jazz',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2074); 
if ($query === TRUE) {
	echo "<h3>tbl_O2074 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2074 table NOT created :( </h3>"; 
}

$tbl_O2075 = "CREATE TABLE IF NOT EXISTS O2075 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Big Band','redacted') NOT NULL DEFAULT 'Big Band',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2075); 
if ($query === TRUE) {
	echo "<h3>tbl_O2075 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2075 table NOT created :( </h3>"; 
}

$tbl_O2076 = "CREATE TABLE IF NOT EXISTS O2076 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Avant-Garde Jazz','redacted') NOT NULL DEFAULT 'Avant-Garde Jazz',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2076); 
if ($query === TRUE) {
	echo "<h3>tbl_O2076 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2076 table NOT created :( </h3>"; 
}

$tbl_O2077 = "CREATE TABLE IF NOT EXISTS O2077 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Crossover Jazz','redacted') NOT NULL DEFAULT 'Crossover Jazz',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2077); 
if ($query === TRUE) {
	echo "<h3>tbl_O2077 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2077 table NOT created :( </h3>"; 
}

$tbl_O2078 = "CREATE TABLE IF NOT EXISTS O2078 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Dixieland','redacted') NOT NULL DEFAULT 'Dixieland',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2078); 
if ($query === TRUE) {
	echo "<h3>tbl_O2078 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2078 table NOT created :( </h3>"; 
}

$tbl_O2079 = "CREATE TABLE IF NOT EXISTS O2079 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Fusion','redacted') NOT NULL DEFAULT 'Fusion',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2079); 
if ($query === TRUE) {
	echo "<h3>tbl_O2079 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2079 table NOT created :( </h3>"; 
}

$tbl_O2080 = "CREATE TABLE IF NOT EXISTS O2080 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Latin Jazz','redacted') NOT NULL DEFAULT 'Latin Jazz',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2080); 
if ($query === TRUE) {
	echo "<h3>tbl_O2080 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2080 table NOT created :( </h3>"; 
}

$tbl_O2081 = "CREATE TABLE IF NOT EXISTS O2081 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Mainstream Jazz','redacted') NOT NULL DEFAULT 'Mainstream Jazz',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2081); 
if ($query === TRUE) {
	echo "<h3>tbl_O2081 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2081 table NOT created :( </h3>"; 
}

$tbl_O2082 = "CREATE TABLE IF NOT EXISTS O2082 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Ragtime','redacted') NOT NULL DEFAULT 'Ragtime',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2082); 
if ($query === TRUE) {
	echo "<h3>tbl_O2082 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2082 table NOT created :( </h3>"; 
}

$tbl_O2083 = "CREATE TABLE IF NOT EXISTS O2083 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Smooth Jazz','redacted') NOT NULL DEFAULT 'Smooth Jazz',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2083); 
if ($query === TRUE) {
	echo "<h3>tbl_O2083 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2083 table NOT created :( </h3>"; 
}

$tbl_O2084 = "CREATE TABLE IF NOT EXISTS O2084 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Hard Bop','redacted') NOT NULL DEFAULT 'Hard Bop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2084); 
if ($query === TRUE) {
	echo "<h3>tbl_O2084 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2084 table NOT created :( </h3>"; 
}

$tbl_O2085 = "CREATE TABLE IF NOT EXISTS O2085 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Trad Jazz','redacted') NOT NULL DEFAULT 'Trad Jazz',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2085); 
if ($query === TRUE) {
	echo "<h3>tbl_O2085 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2085 table NOT created :( </h3>"; 
}

$tbl_O2086 = "CREATE TABLE IF NOT EXISTS O2086 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Cool','redacted') NOT NULL DEFAULT 'Cool',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2086); 
if ($query === TRUE) {
	echo "<h3>tbl_O2086 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2086 table NOT created :( </h3>"; 
}

$tbl_O2087 = "CREATE TABLE IF NOT EXISTS O2087 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Latino','redacted') NOT NULL DEFAULT 'Latino',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2087); 
if ($query === TRUE) {
	echo "<h3>tbl_O2087 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2087 table NOT created :( </h3>"; 
}

$tbl_O2088 = "CREATE TABLE IF NOT EXISTS O2088 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Latin Jazz','redacted') NOT NULL DEFAULT 'Latin Jazz',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2088); 
if ($query === TRUE) {
	echo "<h3>tbl_O2088 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2088 table NOT created :( </h3>"; 
}

$tbl_O2089 = "CREATE TABLE IF NOT EXISTS O2089 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Contemporary Latin','redacted') NOT NULL DEFAULT 'Contemporary Latin',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2089); 
if ($query === TRUE) {
	echo "<h3>tbl_O2089 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2089 table NOT created :( </h3>"; 
}

$tbl_O2090 = "CREATE TABLE IF NOT EXISTS O2090 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Pop Latino','redacted') NOT NULL DEFAULT 'Pop Latino',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2090); 
if ($query === TRUE) {
	echo "<h3>tbl_O2090 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2090 table NOT created :( </h3>"; 
}
$tbl_O2091 = "CREATE TABLE IF NOT EXISTS O2091 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Raíces','redacted') NOT NULL DEFAULT 'Raíces',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2091); 
if ($query === TRUE) {
	echo "<h3>tbl_O2091 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2091 table NOT created :( </h3>"; 
}

$tbl_O2092 = "CREATE TABLE IF NOT EXISTS O2092 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Reggaeton','redacted') NOT NULL DEFAULT 'Reggaeton',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2092); 
if ($query === TRUE) {
	echo "<h3>tbl_O2092 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2092 table NOT created :( </h3>"; 
}

$tbl_O2093 = "CREATE TABLE IF NOT EXISTS O2093 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Baladas','redacted') NOT NULL DEFAULT 'Baladas',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2093); 
if ($query === TRUE) {
	echo "<h3>tbl_O2093 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2093 table NOT created :( </h3>"; 
}

$tbl_O2094 = "CREATE TABLE IF NOT EXISTS O2094 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Rock Latino','redacted') NOT NULL DEFAULT 'Rock Latino',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2094); 
if ($query === TRUE) {
	echo "<h3>tbl_O2094 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2094 table NOT created :( </h3>"; 
}

$tbl_O2095 = "CREATE TABLE IF NOT EXISTS O2095 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Salsa','redacted') NOT NULL DEFAULT 'Salsa',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2095); 
if ($query === TRUE) {
	echo "<h3>tbl_O2095 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2095 table NOT created :( </h3>"; 
}

$tbl_O2096 = "CREATE TABLE IF NOT EXISTS O2096 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('New Age','redacted') NOT NULL DEFAULT 'New Age',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2096); 
if ($query === TRUE) {
	echo "<h3>tbl_O2096 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2096 table NOT created :( </h3>"; 
}

$tbl_O2097 = "CREATE TABLE IF NOT EXISTS O2097 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Environmental','redacted') NOT NULL DEFAULT 'Environmental',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2097); 
if ($query === TRUE) {
	echo "<h3>tbl_O2097 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2097 table NOT created :( </h3>"; 
}

$tbl_O2098 = "CREATE TABLE IF NOT EXISTS O2098 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Healing','redacted') NOT NULL DEFAULT 'Healing',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2098); 
if ($query === TRUE) {
	echo "<h3>tbl_O2098 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2098 table NOT created :( </h3>"; 
}

$tbl_O2099 = "CREATE TABLE IF NOT EXISTS O2099 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Meditation','redacted') NOT NULL DEFAULT 'Meditation',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2099); 
if ($query === TRUE) {
	echo "<h3>tbl_O2099 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2099 table NOT created :( </h3>"; 
}

$tbl_O2100 = "CREATE TABLE IF NOT EXISTS O2100 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Nature','redacted') NOT NULL DEFAULT 'Nature',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2100); 
if ($query === TRUE) {
	echo "<h3>tbl_O2100 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2100 table NOT created :( </h3>"; 
}

$tbl_O2101 = "CREATE TABLE IF NOT EXISTS O2101 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Relaxation','redacted') NOT NULL DEFAULT 'Relaxation',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2101); 
if ($query === TRUE) {
	echo "<h3>tbl_O2101 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2101 table NOT created :( </h3>"; 
}

$tbl_O2102 = "CREATE TABLE IF NOT EXISTS O2102 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Travel','redacted') NOT NULL DEFAULT 'Travel',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2102); 
if ($query === TRUE) {
	echo "<h3>tbl_O2102 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2102 table NOT created :( </h3>"; 
}

$tbl_O2103 = "CREATE TABLE IF NOT EXISTS O2103 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Pop','redacted') NOT NULL DEFAULT 'Pop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2103); 
if ($query === TRUE) {
	echo "<h3>tbl_O2103 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2103 table NOT created :( </h3>"; 
}

$tbl_O2104 = "CREATE TABLE IF NOT EXISTS O2104 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Adult Contemporary','redacted') NOT NULL DEFAULT 'Adult Contemporary',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2104); 
if ($query === TRUE) {
	echo "<h3>tbl_O2104 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2104 table NOT created :( </h3>"; 
}

$tbl_O2105 = "CREATE TABLE IF NOT EXISTS O2105 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Britpop','redacted') NOT NULL DEFAULT 'Britpop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2105); 
if ($query === TRUE) {
	echo "<h3>tbl_O2105 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2105 table NOT created :( </h3>"; 
}

$tbl_O2106 = "CREATE TABLE IF NOT EXISTS O2106 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Pop/Rock','redacted') NOT NULL DEFAULT 'Pop/Rock',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2106); 
if ($query === TRUE) {
	echo "<h3>tbl_O2106 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2106 table NOT created :( </h3>"; 
}

$tbl_O2107 = "CREATE TABLE IF NOT EXISTS O2107 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Soft Rock','redacted') NOT NULL DEFAULT 'Soft Rock',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2107); 
if ($query === TRUE) {
	echo "<h3>tbl_O2107 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2107 table NOT created :( </h3>"; 
}

$tbl_O2108 = "CREATE TABLE IF NOT EXISTS O2108 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Teen Pop','redacted') NOT NULL DEFAULT 'Teen Pop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2108); 
if ($query === TRUE) {
	echo "<h3>tbl_O2108 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2108 table NOT created :( </h3>"; 
}

$tbl_O2109 = "CREATE TABLE IF NOT EXISTS O2109 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('R&B/Soul','redacted') NOT NULL DEFAULT 'R&B/Soul',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2109); 
if ($query === TRUE) {
	echo "<h3>tbl_O2109 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2109 table NOT created :( </h3>"; 
}

$tbl_O2110 = "CREATE TABLE IF NOT EXISTS O2110 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Contemporary R&B','redacted') NOT NULL DEFAULT 'Contemporary R&B',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2110); 
if ($query === TRUE) {
	echo "<h3>tbl_O2110 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2110 table NOT created :( </h3>"; 
}

$tbl_O2111 = "CREATE TABLE IF NOT EXISTS O2111 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			 type ENUM('Doo Wop','redacted') NOT NULL DEFAULT 'Doo Wop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2111); 
if ($query === TRUE) {
	echo "<h3>tbl_O2111 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2111 table NOT created :( </h3>"; 
}

$tbl_O2112 = "CREATE TABLE IF NOT EXISTS O2112 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Funk','redacted') NOT NULL DEFAULT 'Funk',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2112); 
if ($query === TRUE) {
	echo "<h3>tbl_O2112 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2112 table NOT created :( </h3>"; 
}


$tbl_O2113 = "CREATE TABLE IF NOT EXISTS O2113 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Neo-Soul','redacted') NOT NULL DEFAULT 'Neo-Soul',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2113); 
if ($query === TRUE) {
	echo "<h3>tbl_O2113 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2113 table NOT created :( </h3>"; 
}


$tbl_O2114 = "CREATE TABLE IF NOT EXISTS O2114 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Quiet Storm','redacted') NOT NULL DEFAULT 'Quiet Storm',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2114); 
if ($query === TRUE) {
	echo "<h3>tbl_O2114 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2114 table NOT created :( </h3>"; 
}

$tbl_O2115 = "CREATE TABLE IF NOT EXISTS O2115 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Soul','redacted') NOT NULL DEFAULT 'Soul',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2115); 
if ($query === TRUE) {
	echo "<h3>tbl_O2115 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2115 table NOT created :( </h3>"; 
}

$tbl_O2116 = "CREATE TABLE IF NOT EXISTS O2116 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Soundtrack','redacted') NOT NULL DEFAULT 'Soundtrack',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2116); 
if ($query === TRUE) {
	echo "<h3>tbl_O2116 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2116 table NOT created :( </h3>"; 
}

$tbl_O2117 = "CREATE TABLE IF NOT EXISTS O2117 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Foreign Cinema','redacted') NOT NULL DEFAULT 'Foreign Cinema',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2117); 
if ($query === TRUE) {
	echo "<h3>tbl_O2117 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2117 table NOT created :( </h3>"; 
}

$tbl_O2118 = "CREATE TABLE IF NOT EXISTS O2118 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Musicals','redacted') NOT NULL DEFAULT 'Musicals',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2118); 
if ($query === TRUE) {
	echo "<h3>tbl_O2118 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2118 table NOT created :( </h3>"; 
}

$tbl_O2119 = "CREATE TABLE IF NOT EXISTS O2119 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Original Score','redacted') NOT NULL DEFAULT 'Original Score',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2119); 
if ($query === TRUE) {
	echo "<h3>tbl_O2119 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2119 table NOT created :( </h3>"; 
}

$tbl_O2120 = "CREATE TABLE IF NOT EXISTS O2120 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Soundtrack','redacted') NOT NULL DEFAULT 'Soundtrack',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2120); 
if ($query === TRUE) {
	echo "<h3>tbl_O2120 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2120 table NOT created :( </h3>"; 
}

$tbl_O2121 = "CREATE TABLE IF NOT EXISTS O2121 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('TV Soundtrack','redacted') NOT NULL DEFAULT 'TV Soundtrack',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2121); 
if ($query === TRUE) {
	echo "<h3>tbl_O2121 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2121 table NOT created :( </h3>"; 
}

$tbl_O2122 = "CREATE TABLE IF NOT EXISTS O2122 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Dance','redacted') NOT NULL DEFAULT 'Dance',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2122); 
if ($query === TRUE) {
	echo "<h3>tbl_O2122 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2122 table NOT created :( </h3>"; 
}

$tbl_O2123 = "CREATE TABLE IF NOT EXISTS O2123 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Breakbeat','redacted') NOT NULL DEFAULT 'Breakbeat',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2123); 
if ($query === TRUE) {
	echo "<h3>tbl_O2123 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2123 table NOT created :( </h3>"; 
}

$tbl_O2124 = "CREATE TABLE IF NOT EXISTS O2124 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Exercise','redacted') NOT NULL DEFAULT 'Exercise',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2124); 
if ($query === TRUE) {
	echo "<h3>tbl_O2124 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2124 table NOT created :( </h3>"; 
}

$tbl_O2125 = "CREATE TABLE IF NOT EXISTS O2125 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Garage','redacted') NOT NULL DEFAULT 'Garage',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2125); 
if ($query === TRUE) {
	echo "<h3>tbl_O2125 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2125 table NOT created :( </h3>"; 
}

$tbl_O2126 = "CREATE TABLE IF NOT EXISTS O2126 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Hardcore','redacted') NOT NULL DEFAULT 'Hardcore',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2126); 
if ($query === TRUE) {
	echo "<h3>tbl_O2126 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2126 table NOT created :( </h3>"; 
}

$tbl_O2127 = "CREATE TABLE IF NOT EXISTS O2127 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Jungle/Drum’n’bass','redacted') NOT NULL DEFAULT 'Jungle/Drum’n’bass',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2127); 
if ($query === TRUE) {
	echo "<h3>tbl_O2127 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2127 table NOT created :( </h3>"; 
}

$tbl_O2128 = "CREATE TABLE IF NOT EXISTS O2128 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Techno','redacted') NOT NULL DEFAULT 'Techno',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2128); 
if ($query === TRUE) {
	echo "<h3>tbl_O2128 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2128 table NOT created :( </h3>"; 
}

$tbl_O2129 = "CREATE TABLE IF NOT EXISTS O2129 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Trance','redacted') NOT NULL DEFAULT 'Trance',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2129); 
if ($query === TRUE) {
	echo "<h3>tbl_O2129 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2129 table NOT created :( </h3>"; 
}

$tbl_O2130 = "CREATE TABLE IF NOT EXISTS O2130 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Hip-Hop/Rap','redacted') NOT NULL DEFAULT 'Hip-Hop/Rap',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2130); 
if ($query === TRUE) {
	echo "<h3>tbl_O2130 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2130 table NOT created :( </h3>"; 
}

$tbl_O2131 = "CREATE TABLE IF NOT EXISTS O2131 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Alternative Rap','redacted') NOT NULL DEFAULT 'Alternative Rap',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2131); 
if ($query === TRUE) {
	echo "<h3>tbl_O2131 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2131 table NOT created :( </h3>"; 
}

$tbl_O2132 = "CREATE TABLE IF NOT EXISTS O2132 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Latin Rap','redacted') NOT NULL DEFAULT 'Latin Rap',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2132); 
if ($query === TRUE) {
	echo "<h3>tbl_O2132 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2132 table NOT created :( </h3>"; 
}

$tbl_O2133 = "CREATE TABLE IF NOT EXISTS O2133 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Old School Rap','redacted') NOT NULL DEFAULT 'Old School Rap',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2133); 
if ($query === TRUE) {
	echo "<h3>tbl_O2133 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2133 table NOT created :( </h3>"; 
}

$tbl_O2134 = "CREATE TABLE IF NOT EXISTS O2134 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('World','redacted') NOT NULL DEFAULT 'World',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2134); 
if ($query === TRUE) {
	echo "<h3>tbl_O2134 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2134 table NOT created :( </h3>"; 
}

$tbl_O2135 = "CREATE TABLE IF NOT EXISTS O2135 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Afro-Beat','redacted') NOT NULL DEFAULT 'Afro-Beat',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2135); 
if ($query === TRUE) {
	echo "<h3>tbl_O2135 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2135 table NOT created :( </h3>"; 
}

$tbl_O2136 = "CREATE TABLE IF NOT EXISTS O2136 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Cajun','redacted') NOT NULL DEFAULT 'Cajun',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2136); 
if ($query === TRUE) {
	echo "<h3>tbl_O2136 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2136 table NOT created :( </h3>"; 
}

$tbl_O2137 = "CREATE TABLE IF NOT EXISTS O2137 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Celtic','redacted') NOT NULL DEFAULT 'Celtic',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2137); 
if ($query === TRUE) {
	echo "<h3>tbl_O2137 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2137 table NOT created :( </h3>"; 
}

$tbl_O2138 = "CREATE TABLE IF NOT EXISTS O2138 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Indian Pop','redacted') NOT NULL DEFAULT 'Indian Pop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2138); 
if ($query === TRUE) {
	echo "<h3>tbl_O2138 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2138 table NOT created :( </h3>"; 
}

$tbl_O2139 = "CREATE TABLE IF NOT EXISTS O2139 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Japanese Pop','redacted') NOT NULL DEFAULT 'Japanese Pop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2139); 
if ($query === TRUE) {
	echo "<h3>tbl_O2139 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2139 table NOT created :( </h3>"; 
}

$tbl_O2140 = "CREATE TABLE IF NOT EXISTS O2140 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Klezmer','redacted') NOT NULL DEFAULT 'Klezmer',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2140); 
if ($query === TRUE) {
	echo "<h3>tbl_O2140 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2140 table NOT created :( </h3>"; 
}

$tbl_O2141 = "CREATE TABLE IF NOT EXISTS O2141 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Polka','redacted') NOT NULL DEFAULT 'Polka',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2141); 
if ($query === TRUE) {
	echo "<h3>tbl_O2141 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2141 table NOT created :( </h3>"; 
}

$tbl_O2142 = "CREATE TABLE IF NOT EXISTS O2142 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Worldbeat','redacted') NOT NULL DEFAULT 'Worldbeat',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2142); 
if ($query === TRUE) {
	echo "<h3>tbl_O2142 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2142 table NOT created :( </h3>"; 
}

$tbl_O2143 = "CREATE TABLE IF NOT EXISTS O2143 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Zydeco','redacted') NOT NULL DEFAULT 'Zydeco',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2143); 
if ($query === TRUE) {
	echo "<h3>tbl_O2143 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2143 table NOT created :( </h3>"; 
}

$tbl_O2144 = "CREATE TABLE IF NOT EXISTS O2144 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Caribbean','redacted') NOT NULL DEFAULT 'Caribbean',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2144); 
if ($query === TRUE) {
	echo "<h3>tbl_O2144 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2144 table NOT created :( </h3>"; 
}

$tbl_O2145 = "CREATE TABLE IF NOT EXISTS O2145 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Hawaiian','redacted') NOT NULL DEFAULT 'Hawaiian',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2145); 
if ($query === TRUE) {
	echo "<h3>tbl_O2145 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2145 table NOT created :( </h3>"; 
}

$tbl_O2146 = "CREATE TABLE IF NOT EXISTS O2146 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Alternative','redacted') NOT NULL DEFAULT 'Alternative',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2146); 
if ($query === TRUE) {
	echo "<h3>tbl_O2146 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2146 table NOT created :( </h3>"; 
}

$tbl_O2147 = "CREATE TABLE IF NOT EXISTS O2147 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('College Rock','redacted') NOT NULL DEFAULT 'College Rock',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2147); 
if ($query === TRUE) {
	echo "<h3>tbl_O2147 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2147 table NOT created :( </h3>"; 
}

$tbl_O2148 = "CREATE TABLE IF NOT EXISTS O2148 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Goth Rock','redacted') NOT NULL DEFAULT 'Goth Rock',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2148); 
if ($query === TRUE) {
	echo "<h3>tbl_O2148 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2148 table NOT created :( </h3>"; 
}

$tbl_O2149 = "CREATE TABLE IF NOT EXISTS O2149 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Grunge','redacted') NOT NULL DEFAULT 'Grunge',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2149); 
if ($query === TRUE) {
	echo "<h3>tbl_O2149 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2149 table NOT created :( </h3>"; 
}

$tbl_O2150 = "CREATE TABLE IF NOT EXISTS O2150 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Indie Rock','redacted') NOT NULL DEFAULT 'Indie Rock',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2150); 
if ($query === TRUE) {
	echo "<h3>tbl_O2150 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2150 table NOT created :( </h3>"; 
}

$tbl_O2151 = "CREATE TABLE IF NOT EXISTS O2151 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('New Wave','redacted') NOT NULL DEFAULT 'New Wave',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2151); 
if ($query === TRUE) {
	echo "<h3>tbl_O2151 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2151 table NOT created :( </h3>"; 
}

$tbl_O2152 = "CREATE TABLE IF NOT EXISTS O2152 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Punk','redacted') NOT NULL DEFAULT 'Punk',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2152); 
if ($query === TRUE) {
	echo "<h3>tbl_O2152 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2152 table NOT created :( </h3>"; 
}

$tbl_O2153 = "CREATE TABLE IF NOT EXISTS O2153 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Punk','redacted') NOT NULL DEFAULT 'Punk',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2153); 
if ($query === TRUE) {
	echo "<h3>tbl_O2153 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2153 table NOT created :( </h3>"; 
}

$tbl_O2154 = "CREATE TABLE IF NOT EXISTS O2154 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Rock','redacted') NOT NULL DEFAULT 'Rock',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2154); 
if ($query === TRUE) {
	echo "<h3>tbl_O2154 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2154 table NOT created :( </h3>"; 
}

$tbl_O2155 = "CREATE TABLE IF NOT EXISTS O2155 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Arena Rock','redacted') NOT NULL DEFAULT 'Arena Rock',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2155); 
if ($query === TRUE) {
	echo "<h3>tbl_O2155 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2155 table NOT created :( </h3>"; 
}

$tbl_O2156 = "CREATE TABLE IF NOT EXISTS O2156 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Blues-Rock','redacted') NOT NULL DEFAULT 'Blues-Rock',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2156); 
if ($query === TRUE) {
	echo "<h3>tbl_O2156 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2156 table NOT created :( </h3>"; 
}

$tbl_O2157 = "CREATE TABLE IF NOT EXISTS O2157 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('British Invasion','redacted') NOT NULL DEFAULT 'British Invasion',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2157); 
if ($query === TRUE) {
	echo "<h3>tbl_O2157 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2157 table NOT created :( </h3>"; 
}

$tbl_O2158 = "CREATE TABLE IF NOT EXISTS O2158 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Death Metal','redacted') NOT NULL DEFAULT 'Death Metal',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2158); 
if ($query === TRUE) {
	echo "<h3>tbl_O2158 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2158 table NOT created :( </h3>"; 
}

$tbl_O2159 = "CREATE TABLE IF NOT EXISTS O2159 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Glam Rock','redacted') NOT NULL DEFAULT 'Glam Rock',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2159); 
if ($query === TRUE) {
	echo "<h3>tbl_O2159 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2159 table NOT created :( </h3>"; 
}

$tbl_O2160 = "CREATE TABLE IF NOT EXISTS O2160 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Hair Metal','redacted') NOT NULL DEFAULT 'Hair Metal',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2160); 
if ($query === TRUE) {
	echo "<h3>tbl_O2160 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2160 table NOT created :( </h3>"; 
}

$tbl_O2161 = "CREATE TABLE IF NOT EXISTS O2161 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Metal','redacted') NOT NULL DEFAULT 'Metal',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2161); 
if ($query === TRUE) {
	echo "<h3>tbl_O2161 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2161 table NOT created :( </h3>"; 
}

$tbl_O2162 = "CREATE TABLE IF NOT EXISTS O2162 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Jam Bands','redacted') NOT NULL DEFAULT 'Jam Bands',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2162); 
if ($query === TRUE) {
	echo "<h3>tbl_O2162 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2162 table NOT created :( </h3>"; 
}

$tbl_O2163 = "CREATE TABLE IF NOT EXISTS O2163 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Prog-Rock','redacted') NOT NULL DEFAULT 'Prog-Rock',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2163); 
if ($query === TRUE) {
	echo "<h3>tbl_O2163 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2163 table NOT created :( </h3>"; 
}

$tbl_O2164 = "CREATE TABLE IF NOT EXISTS O2164 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Psychedelic','redacted') NOT NULL DEFAULT 'Psychedelic',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2164); 
if ($query === TRUE) {
	echo "<h3>tbl_O2164 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2164 table NOT created :( </h3>"; 
}

$tbl_O2165 = "CREATE TABLE IF NOT EXISTS O2165 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Rock & Roll','redacted') NOT NULL DEFAULT 'Rock & Roll',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2165); 
if ($query === TRUE) {
	echo "<h3>tbl_O2165 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2165 table NOT created :( </h3>"; 
}

$tbl_O2166 = "CREATE TABLE IF NOT EXISTS O2166 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Rockabilly','redacted') NOT NULL DEFAULT 'Rockabilly',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2166); 
if ($query === TRUE) {
	echo "<h3>tbl_O2166 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2166 table NOT created :( </h3>"; 
}

$tbl_O2167 = "CREATE TABLE IF NOT EXISTS O2167 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Roots Rock','redacted') NOT NULL DEFAULT 'Roots Rock',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2167); 
if ($query === TRUE) {
	echo "<h3>tbl_O2167 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2167 table NOT created :( </h3>"; 
}

$tbl_O2168 = "CREATE TABLE IF NOT EXISTS O2168 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Southern Rock','redacted') NOT NULL DEFAULT 'Southern Rock',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2168); 
if ($query === TRUE) {
	echo "<h3>tbl_O2168 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2168 table NOT created :( </h3>"; 
}

$tbl_O2169 = "CREATE TABLE IF NOT EXISTS O2169 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Surf','redacted') NOT NULL DEFAULT 'Surf',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2169); 
if ($query === TRUE) {
	echo "<h3>tbl_O2169 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2169 table NOT created :( </h3>"; 
}

$tbl_O2170 = "CREATE TABLE IF NOT EXISTS O2170 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Tex-Mex','redacted') NOT NULL DEFAULT 'Tex-Mex',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2170); 
if ($query === TRUE) {
	echo "<h3>tbl_O2170 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2170 table NOT created :( </h3>"; 
}

$tbl_O2171 = "CREATE TABLE IF NOT EXISTS O2171 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Christian & Gospel','redacted') NOT NULL DEFAULT 'Christian & Gospel',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2171); 
if ($query === TRUE) {
	echo "<h3>tbl_O2171 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2171 table NOT created :( </h3>"; 
}

$tbl_O2172 = "CREATE TABLE IF NOT EXISTS O2172 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Islamic Music','redacted') NOT NULL DEFAULT 'Islamic Music',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2172); 
if ($query === TRUE) {
	echo "<h3>tbl_O2172 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2172 table NOT created :( </h3>"; 
}

$tbl_O2173 = "CREATE TABLE IF NOT EXISTS O2173 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Christian Metal','redacted') NOT NULL DEFAULT 'Christian Metal',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2173); 
if ($query === TRUE) {
	echo "<h3>tbl_O2173 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2173 table NOT created :( </h3>"; 
}

$tbl_O2174 = "CREATE TABLE IF NOT EXISTS O2174 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Christian Pop','redacted') NOT NULL DEFAULT 'Christian Pop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2174); 
if ($query === TRUE) {
	echo "<h3>tbl_O2174 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2174 table NOT created :( </h3>"; 
}

$tbl_O2175 = "CREATE TABLE IF NOT EXISTS O2175 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Christian Rap','redacted') NOT NULL DEFAULT 'Christian Rap',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2175); 
if ($query === TRUE) {
	echo "<h3>tbl_O2175 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2175 table NOT created :( </h3>"; 
}

$tbl_O2176 = "CREATE TABLE IF NOT EXISTS O2176 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Christian Rock','redacted') NOT NULL DEFAULT 'Christian Rock',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2176); 
if ($query === TRUE) {
	echo "<h3>tbl_O2176 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2176 table NOT created :( </h3>"; 
}

$tbl_O2177 = "CREATE TABLE IF NOT EXISTS O2177 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Classic Christian','redacted') NOT NULL DEFAULT 'Classic Christian',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2177); 
if ($query === TRUE) {
	echo "<h3>tbl_O2177 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2177 table NOT created :( </h3>"; 
}

$tbl_O2178 = "CREATE TABLE IF NOT EXISTS O2178 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Contemporary Gospel','redacted') NOT NULL DEFAULT 'Contemporary Gospel',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2178); 
if ($query === TRUE) {
	echo "<h3>tbl_O2178 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2178 table NOT created :( </h3>"; 
}

$tbl_O2179 = "CREATE TABLE IF NOT EXISTS O2179 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Gospel','redacted') NOT NULL DEFAULT 'Gospel',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2179); 
if ($query === TRUE) {
	echo "<h3>tbl_O2179 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2179 table NOT created :( </h3>"; 
}

$tbl_O2180 = "CREATE TABLE IF NOT EXISTS O2180 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Vocal','redacted') NOT NULL DEFAULT 'Vocal',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2180); 
if ($query === TRUE) {
	echo "<h3>tbl_O2180 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2180 table NOT created :( </h3>"; 
}

$tbl_O2181 = "CREATE TABLE IF NOT EXISTS O2181 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Traditional Pop','redacted') NOT NULL DEFAULT 'Traditional Pop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2181); 
if ($query === TRUE) {
	echo "<h3>tbl_O2181 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2181 table NOT created :( </h3>"; 
}

$tbl_O2182 = "CREATE TABLE IF NOT EXISTS O2182 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Vocal Jazz','redacted') NOT NULL DEFAULT 'Vocal Jazz',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2182); 
if ($query === TRUE) {
	echo "<h3>tbl_O2182 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2182 table NOT created :( </h3>"; 
}

$tbl_O2183 = "CREATE TABLE IF NOT EXISTS O2183 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Vocal Pop','redacted') NOT NULL DEFAULT 'Vocal Pop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2183); 
if ($query === TRUE) {
	echo "<h3>tbl_O2183 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2183 table NOT created :( </h3>"; 
}

$tbl_O2184 = "CREATE TABLE IF NOT EXISTS O2184 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Reggae','redacted') NOT NULL DEFAULT 'Reggae',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2184); 
if ($query === TRUE) {
	echo "<h3>tbl_O2184 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2184 table NOT created :( </h3>"; 
}

$tbl_O2185 = "CREATE TABLE IF NOT EXISTS O2185 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Dancehall','redacted') NOT NULL DEFAULT 'Dancehall',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2185); 
if ($query === TRUE) {
	echo "<h3>tbl_O2185 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2185 table NOT created :( </h3>"; 
}

$tbl_O2186 = "CREATE TABLE IF NOT EXISTS O2186 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Roots Reggae','redacted') NOT NULL DEFAULT 'Roots Reggae',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2186); 
if ($query === TRUE) {
	echo "<h3>tbl_O2186 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2186 table NOT created :( </h3>"; 
}

$tbl_O2187 = "CREATE TABLE IF NOT EXISTS O2187 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Dub','redacted') NOT NULL DEFAULT 'Dub',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2187); 
if ($query === TRUE) {
	echo "<h3>tbl_O2187 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2187 table NOT created :( </h3>"; 
}

$tbl_O2188 = "CREATE TABLE IF NOT EXISTS O2188 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Ska','redacted') NOT NULL DEFAULT 'Ska',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2188); 
if ($query === TRUE) {
	echo "<h3>tbl_O2188 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2188 table NOT created :( </h3>"; 
}

$tbl_O2189 = "CREATE TABLE IF NOT EXISTS O2189 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Easy Listening','redacted') NOT NULL DEFAULT 'Easy Listening',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2189); 
if ($query === TRUE) {
	echo "<h3>tbl_O2189 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2189 table NOT created :( </h3>"; 
}

$tbl_O2190 = "CREATE TABLE IF NOT EXISTS O2190 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Bop','redacted') NOT NULL DEFAULT 'Bop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2190); 
if ($query === TRUE) {
	echo "<h3>tbl_O2190 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2190 table NOT created :( </h3>"; 
}

$tbl_O2191 = "CREATE TABLE IF NOT EXISTS O2191 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Swing','redacted') NOT NULL DEFAULT 'Swing',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2191); 
if ($query === TRUE) {
	echo "<h3>tbl_O2191 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2191 table NOT created :( </h3>"; 
}

$tbl_O2192 = "CREATE TABLE IF NOT EXISTS O2192 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('J-Pop','redacted') NOT NULL DEFAULT 'J-Pop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2192); 
if ($query === TRUE) {
	echo "<h3>tbl_O2192 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2192 table NOT created :( </h3>"; 
}

$tbl_O2193 = "CREATE TABLE IF NOT EXISTS O2193 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Enka','redacted') NOT NULL DEFAULT 'Enka',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2193); 
if ($query === TRUE) {
	echo "<h3>tbl_O2193 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2193 table NOT created :( </h3>"; 
}

$tbl_O2194 = "CREATE TABLE IF NOT EXISTS O2194 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Anime','redacted') NOT NULL DEFAULT 'Anime',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2194); 
if ($query === TRUE) {
	echo "<h3>tbl_O2194 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2194 table NOT created :( </h3>"; 
}

$tbl_O2195 = "CREATE TABLE IF NOT EXISTS O2195 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Kayokyoku','redacted') NOT NULL DEFAULT 'Kayokyoku',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2195); 
if ($query === TRUE) {
	echo "<h3>tbl_O2195 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2195 table NOT created :( </h3>"; 
}

$tbl_O2196 = "CREATE TABLE IF NOT EXISTS O2196 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Fitness & Workout','redacted') NOT NULL DEFAULT 'Fitness & Workout',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2196); 
if ($query === TRUE) {
	echo "<h3>tbl_O2196 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2196 table NOT created :( </h3>"; 
}

$tbl_O2197 = "CREATE TABLE IF NOT EXISTS O2197 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('K-Pop','redacted') NOT NULL DEFAULT 'K-Pop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2197); 
if ($query === TRUE) {
	echo "<h3>tbl_O2197 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2197 table NOT created :( </h3>"; 
}

$tbl_O2198 = "CREATE TABLE IF NOT EXISTS O2198 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Karaoke','redacted') NOT NULL DEFAULT 'Karaoke',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2198); 
if ($query === TRUE) {
	echo "<h3>tbl_O2198 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2198 table NOT created :( </h3>"; 
}

$tbl_O2199 = "CREATE TABLE IF NOT EXISTS O2199 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Instrumental','redacted') NOT NULL DEFAULT 'Instrumental',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2199); 
if ($query === TRUE) {
	echo "<h3>tbl_O2199 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2199 table NOT created :( </h3>"; 
}

$tbl_O2200 = "CREATE TABLE IF NOT EXISTS O2200 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Brazilian','redacted') NOT NULL DEFAULT 'Brazilian',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2200); 
if ($query === TRUE) {
	echo "<h3>tbl_O2200 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2200 table NOT created :( </h3>"; 
}

$tbl_O2201 = "CREATE TABLE IF NOT EXISTS O2201 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Axé','redacted') NOT NULL DEFAULT 'Axé',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2201); 
if ($query === TRUE) {
	echo "<h3>tbl_O2201 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2201 table NOT created :( </h3>"; 
}

$tbl_O2202 = "CREATE TABLE IF NOT EXISTS O2202 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Bossa Nova','redacted') NOT NULL DEFAULT 'Bossa Nova',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2202); 
if ($query === TRUE) {
	echo "<h3>tbl_O2202 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2202 table NOT created :( </h3>"; 
}

$tbl_O2203 = "CREATE TABLE IF NOT EXISTS O2203 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Choro','redacted') NOT NULL DEFAULT 'Choro',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2203); 
if ($query === TRUE) {
	echo "<h3>tbl_O2203 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2203 table NOT created :( </h3>"; 
}

$tbl_O2204 = "CREATE TABLE IF NOT EXISTS O2204 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Forró','redacted') NOT NULL DEFAULT 'Forró',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2204); 
if ($query === TRUE) {
	echo "<h3>tbl_O2204 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2204 table NOT created :( </h3>"; 
}

$tbl_O2205 = "CREATE TABLE IF NOT EXISTS O2205 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Frevo','redacted') NOT NULL DEFAULT 'Frevo',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2205); 
if ($query === TRUE) {
	echo "<h3>tbl_O2205 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2205 table NOT created :( </h3>"; 
}

$tbl_O2206 = "CREATE TABLE IF NOT EXISTS O2206 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Pagode','redacted') NOT NULL DEFAULT 'Pagode',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2206); 
if ($query === TRUE) {
	echo "<h3>tbl_O2206 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2206 table NOT created :( </h3>"; 
}

$tbl_O2207 = "CREATE TABLE IF NOT EXISTS O2207 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Samba','redacted') NOT NULL DEFAULT 'Samba',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2207); 
if ($query === TRUE) {
	echo "<h3>tbl_O2207 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2207 table NOT created :( </h3>"; 
}

$tbl_O2208 = "CREATE TABLE IF NOT EXISTS O2208 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Sertanejo','redacted') NOT NULL DEFAULT 'Sertanejo',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2208); 
if ($query === TRUE) {
	echo "<h3>tbl_O2208 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2208 table NOT created :( </h3>"; 
}

$tbl_O2209 = "CREATE TABLE IF NOT EXISTS O2209 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Baile Funk','redacted') NOT NULL DEFAULT 'Baile Funk',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2209); 
if ($query === TRUE) {
	echo "<h3>tbl_O2209 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2209 table NOT created :( </h3>"; 
}

$tbl_O2210 = "CREATE TABLE IF NOT EXISTS O2210 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Spoken Word','redacted') NOT NULL DEFAULT 'Spoken Word',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2210); 
if ($query === TRUE) {
	echo "<h3>tbl_O2210 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2210 table NOT created :( </h3>"; 
}

$tbl_O2211 = "CREATE TABLE IF NOT EXISTS O2211 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('Disney','redacted') NOT NULL DEFAULT 'Disney',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2211); 
if ($query === TRUE) {
	echo "<h3>tbl_O2211 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2211 table NOT created :( </h3>"; 
}

$tbl_O2212 = "CREATE TABLE IF NOT EXISTS O2212 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('French Pop','redacted') NOT NULL DEFAULT 'French Pop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2212); 
if ($query === TRUE) {
	echo "<h3>tbl_O2212 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2212 table NOT created :( </h3>"; 
}

$tbl_O2213 = "CREATE TABLE IF NOT EXISTS O2213 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('German Pop','redacted') NOT NULL DEFAULT 'German Pop',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2213); 
if ($query === TRUE) {
	echo "<h3>tbl_O2213 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2213 table NOT created :( </h3>"; 
}

$tbl_O2214 = "CREATE TABLE IF NOT EXISTS O2214 ( 
			 musiciantypeid INT(11) NOT NULL AUTO_INCREMENT,
             musicianid VARCHAR(255) NOT NULL,
			  type ENUM('German Folk','redacted') NOT NULL DEFAULT 'German Folk',
			  ip VARCHAR(255) NOT NULL,
			  typelog DATETIME NOT NULL,
              PRIMARY KEY (musiciantypeid),
 			  UNIQUE KEY username (musiciantypeid,musicianid)
                )"; 
$query = mysqli_query($con, $tbl_O2214); 
if ($query === TRUE) {
	echo "<h3>tbl_O2214 table created OK :) </h3>"; 
} else {
	echo "<h3>tbl_O2214 table NOT created :( </h3>"; 
}

?>
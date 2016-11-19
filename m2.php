<?php
include_once("php_includes/db_conx.php"); 


$tbl_musicoptions = "CREATE TABLE IF NOT EXISTS musicoptions ( 
                id INT(11) NOT NULL,
			  firstname VARCHAR(16) NOT NULL,
			  lastname VARCHAR(16) NOT NULL,
                musicname VARCHAR(16) NOT NULL,
				background VARCHAR(255) NOT NULL,
				question VARCHAR(255) NULL,
				answer VARCHAR(255) NULL,
                PRIMARY KEY (id),
                UNIQUE KEY username (musicname) 
                )"; 
$query = mysqli_query($con, $tbl_musicoptions); 
if ($query === TRUE) {
	echo "<h3>musicoptions table created OK :) </h3>"; 
} else {
	echo "<h3>musicoptions table NOT created :( </h3>"; 
}

?>
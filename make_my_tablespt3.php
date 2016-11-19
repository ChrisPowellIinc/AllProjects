<?php
include_once("php_includes/db_conx.php"); 

$tbl_usersmusic = "CREATE TABLE IF NOT EXISTS usersmusic (
              musicid INT(11) NOT NULL AUTO_INCREMENT,
			  firstname VARCHAR(16) NOT NULL,
			  lastname VARCHAR(28) NOT NULL,
			  musicname VARCHAR(255) NOT NULL,
			  email VARCHAR(255) NOT NULL,
			  password VARCHAR(255) NOT NULL,
			  musictype ENUM('O2000','O2001','O2002','O2003','O2004','O2005','O2006','O2007','O2008','O2009','O2010','O2011','O2012','O2013','O2014','O2015','O2016','O2017','O2018','O2019','O2020','O2021','O2022','O2023','O2024','O2025','O2026','O2027','O2028','O2029','O2030','O2031','O2032','O2033','O2034','O2035','O2036','O2037','O2038','O2039','O2040','O2041','O2043','O2044','O2045','O2046','O2047','O2048','O2049','O2050','O2051','O2052','O2053','O2054','O2055','O2056','O2057','O2058','O2059','O2060','O2061','O2062','O2063','O2064','O2065','O2066','O2067','O2068','O2069','O2070','O2071','O2072','O2073','O2074','O2075','O2076','O2077','O2078','O2079','O2080','O2081','O2082','O2083','O2084','O2085','O2086','O2087','O2088','O2089','O2090','O2091','O2092','O2093','O2094','O2095','O2096','O2097','O2098','O2099','O2100','O2101','O2102','O2103','O2104','O2105','O2106','O2107','O2108','O2109','O2110','O2111','O2112','O2113','O2114','O2115','O2116','O2117','O2118','O2119','O2120','O2121','O2122','O2123','O2124','O2125','O2126','O2127','O2128','O2129','O2130','O2131','O2132','O2133','O2134','O2135','O2136','O2137','O2138','O2139','O2140','O2141','O2142','O2143','O2144','O2145','O2146','O2147','O2148','O2149','O2150','O2151','O2152','O2153','O2154','O2155','O2156','O2157','O2158','O2159','O2160','O2161','O2162','O2163','O2164','O2165','O2166','O2167','O2168','O2169','O2170','O2171','O2172','O2173','O2174','O2175','O2176','O2177','O2178','O2179','O2180','O2181','O2182','O2183','O2184','O2185','O2186','O2187','O2188','O2189','O2190','O2191','O2192','O2193','O2194','O2195','O2196','O2197','O2198','O2199','O2200','O2201','O2202','O2203','O2204','O2205','O2206','O2207','O2208','O2209','O2210','O2211','O2212','O2213','O2214','O2215')  NOT NULL DEFAULT 'O2215',
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
			UNIQUE KEY username (musicname,email),
              PRIMARY KEY (musicid)
             )";
$query = mysqli_query($con, $tbl_usersmusic);
if ($query === TRUE) {
	echo "<h3>usersmusic table created OK 2:) </h3>"; 
} else {
	echo "<h3>usersmusic table NOT created 2 :( </h3>"; 
}
////////////////////////////////////
////////////////////////////////////
$tbl_supportmusic = "CREATE TABLE IF NOT EXISTS supportmusic ( 
                id INT(11) NOT NULL AUTO_INCREMENT,
			  firstname VARCHAR(16) NOT NULL,
			  lastname VARCHAR(16) NOT NULL,
                username VARCHAR(16) NOT NULL,
                datemade DATETIME NOT NULL,
                PRIMARY KEY (id)
                )"; 
$query = mysqli_query($con, $tbl_supportmusic); 
if ($query === TRUE) {
	echo "<h3>supportmusic table created OK :) </h3>"; 
} else {
	echo "<h3>supportmusic table NOT created :( </h3>"; 
}
////////////////////////////////////
////////////////////////////////////
$tbl_statusmusic = "CREATE TABLE IF NOT EXISTS statusmusic ( 
                id INT(11) NOT NULL AUTO_INCREMENT,
                musicid INT(11) NOT NULL,
                music_name VARCHAR(16) NOT NULL,
                author VARCHAR(16) NOT NULL,
                type ENUM('a','b','c') NOT NULL,
                data TEXT NOT NULL,
                postdate DATETIME NOT NULL,
                PRIMARY KEY (id) 
                )"; 
$query = mysqli_query($con, $tbl_statusmusic); 
if ($query === TRUE) {
	echo "<h3>status table created OK :) </h3>"; 
} else {
	echo "<h3>status table NOT created :( </h3>"; 
}
////////////////////////////////////
$tbl_photosmusic = "CREATE TABLE IF NOT EXISTS photosmusic ( 
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
$query = mysqli_query($con, $tbl_photosmusic); 
if ($query === TRUE) {
	echo "<h3>photosmusic table created OK :) </h3>"; 
} else {
	echo "<h3>photosmusic table NOT created :( </h3>"; 
}
////////////////////////////////////
?>
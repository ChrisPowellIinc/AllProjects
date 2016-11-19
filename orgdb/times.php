<?php
//**** START Database connection script
// Connect to database script
//**** END Database connection script

//**** START Create numbered seat buttons
if (isset($_POST['c'])){
	include ("../php_includes/db_conx.php");
	// Initialize our display output to NULL
	$c = preg_replace('#[^a-z0-9]#i', '', $_POST['c']);
	$d = preg_replace('#[^a-z0-9]#i', '', $_POST['d']);

// Query for tables with seats available
$sql = "SELECT * FROM feb1"; 
$query = mysqli_query($con, $sql) or die (mysqli_error($con));
// Loop and get all the data /////////////////////////////////////////////


///
	$type

	$sql = "SELECT type FROM organization WHERE orgid='$orgid' LIMIT 1";
    $query = mysqli_query($con, $sql); 
	$e_check = mysqli_num_rows($query);
	// FORM DATA ERROR HANDLING
	if($orgid == "1900"){
		echo "Airport";
        exit();
	} else if ($orgid == "1901"){ 
        echo "Nightlife";
        exit();
	} else if ($orgid == "1902"){ 
        echo "Attraction";
        exit();
	} else if ($orgid == "1903") {
        echo "Automotive";
        exit(); 
    } else if ($orgid == "1904") {
        echo "Finance Services";
        exit();
    } else if ($orgid == "1905") {
        echo "Bar";
        exit(); 
    } else if ($orgid == "1906") {
        echo "Book Store";
        exit();
    } else if ($orgid == "1907"){ 
        echo "Religious Organization";
        exit();
	} else if ($orgid == "1908"){ 
        echo "Club";
        exit();
	} else if ($orgid == "1909") {
        echo "Government";
        exit(); 
    } else if ($orgid == "1910") {
        echo "Concert Venue";
        exit();
    } else if ($orgid == "1911") {
        echo "Education";
        exit(); 
    } else if ($orgid == "1912") {
        echo "Doctor";
        exit();
    } else if ($orgid == "1913"){ 
        echo "Event Services";
        exit();
	} else if ($orgid == "1914"){ 
        echo "Grocery";
        exit();
	} else if ($orgid == "1915") {
        echo "Pharmacy";
        exit(); 
    } else if ($orgid == "1916") {
        echo "Home Improvement";
        exit();
    } else if ($orgid == "1917") {
        echo "Bar";
        exit(); 
    } else if ($orgid == "1918") {
        echo "Book Store";
        exit();
    } else if ($orgid == "1919") {
        echo "Finance Services";
        exit();
    } else if ($orgid == "1920") {
        echo "Hospital";
        exit(); 
    } else if ($orgid == "1921") {
        echo "Clinic";
        exit();
    } else if ($orgid == "1922"){ 
        echo "Hotel";
        exit();
	} else if ($orgid == "1923"){ 
        echo "Landmark";
        exit();
	} else if ($orgid == "1924") {
        echo "Lawyer Office";
        exit(); 
    } else if ($orgid == "1925") {
        echo "Library";
        exit();
    } else if ($orgid == "1926") {
        echo "Other";
        exit(); 
    } else if ($orgid == "1927") {
        echo "Middle School";
        exit();
    } else if ($orgid == "1928"){ 
        echo "Movie Theater";
        exit();
	} else if ($orgid == "1929"){ 
        echo "Museum";
        exit();
	} else if ($orgid == "1930") {
        echo "Art Gallery";
        exit(); 
    } else if ($orgid == "1931") {
        echo "Outdoor Gear/Sporting Goods";
        exit();
    } else if ($orgid == "1932") {
        echo "Bar";
        exit(); 
    } else if ($orgid == "1933") {
        echo "Book Store";
        exit();
    } 

else if ($orgid == "1901"){ 
        echo "Nightlife";
        exit();
	} else if ($orgid == "1902"){ 
        echo "Attraction";
        exit();
	} else if ($orgid == "1903") {
        echo "Automotive";
        exit(); 
    } else if ($orgid == "1904") {
        echo "Finance Services";
        exit();
    } else if ($orgid == "1905") {
        echo "Bar";
        exit(); 
    } else if ($orgid == "1906") {
        echo "Book Store";
        exit();
    } else if ($orgid == "1907"){ 
        echo "Religious Organization";
        exit();
	} else if ($orgid == "1908"){ 
        echo "Club";
        exit();
	} else if ($orgid == "1909") {
        echo "Government";
        exit(); 
    } else if ($orgid == "1910") {
        echo "Concert Venue";
        exit();
    } else if ($orgid == "1911") {
        echo "Education";
        exit(); 
    } else if ($orgid == "1912") {
        echo "Doctor";
        exit();
    } else if ($orgid == "1913"){ 
        echo "Event Services";
        exit();
	} else if ($orgid == "1914"){ 
        echo "Grocery";
        exit();
	} else if ($orgid == "1915") {
        echo "Pharmacy";
        exit(); 
    } else if ($orgid == "1916") {
        echo "Home Improvement";
        exit();
    } else if ($orgid == "1917") {
        echo "Bar";
        exit(); 
    } else if ($orgid == "1918") {
        echo "Book Store";
        exit();
    } else if ($orgid == "1919") {
        echo "Finance Services";
        exit();
    } else if ($orgid == "1920") {
        echo "Hospital";
        exit(); 
    } else if ($orgid == "1921") {
        echo "Clinic";
        exit();
    } else if ($orgid == "1922"){ 
        echo "Hotel";
        exit();
	} else if ($orgid == "1923"){ 
        echo "Landmark";
        exit();
	} else if ($orgid == "1924") {
        echo "Lawyer Office";
        exit(); 
    } else if ($orgid == "1925") {
        echo "Library";
        exit();
    } else if ($orgid == "1926") {
        echo "Other";
        exit(); 
    } else if ($orgid == "1927") {
        echo "Middle School";
        exit();
    } else if ($orgid == "1928"){ 
        echo "Movie Theater";
        exit();
	} else if ($orgid == "1929"){ 
        echo "Museum";
        exit();
	} else if ($orgid == "1930") {
        echo "Art Gallery";
        exit(); 
    } else if ($orgid == "1931") {
        echo "Outdoor Gear/Sporting Goods";
        exit();
    } else if ($orgid == "1932") {
        echo "Bar";
        exit(); 
    } else if ($orgid == "1933") {
        echo "Book Store";
        exit();
    } 



while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
	// Assign table data to variables

	
	echo "     <input type=\"text\" id=\"dayload\" value=\"$d\" style=\"display: none;\">\n"; 
	echo "     <input type=\"text\" id=\"timeload\" value=\"$c\" style=\"display: none;\">\n"; 
	echo "      <label>\n"; 

if ($c == '0700' && $f10700 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} elseif ($c == '0730' && $f10730 == 0){
echo "      <label>\n"; 
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "    </label>\n"; 
echo "\n";} 
elseif ($c == '0800' && $f10800 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '0830' && $f10830 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$c\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '0900' && $f10900 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '0930' && $f10930 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '0930' && $f10930 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</label>\n"; 
echo "                <br />\n"; 
} 
elseif ($c == '0930' && $f10930 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1000' && $f11000 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} elseif ($c == '1030' && $f11030 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 

elseif ($c == '1100' && $f11100 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1130' && $f11130 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1200' && $f11200 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1230' && $f11230 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1300' && $f11300 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1330' && $f11330 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1400' && $f11400 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1430' && $f11430 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1500' && $f11500 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1530' && $f11530 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1600' && $f11600 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1630' && $f11630 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1700' && $f11700 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1730' && $f11730 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1800' && $f11800 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1830' && $f11830 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1830' && $f11830 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1900' && $f11900 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '1930' && $f11930 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '2000' && $f12000 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '2030' && $f12030 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '2100' && $f12100 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '2130' && $f12130 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '2200' && $f12200 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '2230' && $f12230 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
elseif ($c == '2300' && $f12300 == 0){
echo "                  <input type=\"radio\" id=\"RadioGroup1\" name=\"RadioGroup1\" value=\"$id\"/>\n"; 
echo "                  $location</input>\n"; 
echo "                <br />\n"; 
echo "\n";} 
echo "    </label>\n"; 
}
		}

?>
<?php
include_once("php_includes/session.php"); 
?>
<?php
include_once("php_includes/usernamecheck.php"); 
?>
<?php
include_once("php_includes/signuppost.php"); 
?>

<head>
<link rel="stylesheet" type="text/css" href="css/SignUp.css" />
<link rel="stylesheet" type="text/css" href="css/animate.min.css" />
<script src="javascript/main.js"></script>
<script src="javascript/ajax.js"></script>
<script src="javascript/restrictform.js"></script>

<script src="javascript/prefixfree.js"></script>
<script src="javascript/ThankYou.js"></script>
<script src="javascript/utils.js"></script>
<script src="SpryAssets/SpryTooltip.js" type="text/javascript"></script>



<style type="text/css">
#SoulstatTitle {
	position: absolute;
	left: 0%;
	top: 8%;
	padding: 3px;
	z-index: 2;
	background-color: #fff;
	font-family: "Raleway";
	color: #0B222A;
	font-size: 22px;
	line-height: 130%;
	box-shadow: 0px 1px 3px #666;
}
#TextDemo {
	position: absolute;
	left: 50%;
	top: 8%;
	width: 28%;
	height: 83px;
	z-index: 3;
	font-family: "Raleway";
	color: #858585;
	font-size: 25px;
	line-height: 150%;

}
#DemoButton {
	position: absolute;
	left: .3%;
	top: 16%;
	width: 14%;
	height: 40px;
	z-index: 3;
	font-family: "Raleway";
	color: #fff;
	font-size: 25px;
	line-height: 40px;
	box-shadow: 0px 3px 7px #666;
	cursor: pointer;
	background: -moz-linear-gradient(top,  #0A766A  0%, #004d66 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#0A766A ), color-stop(100%,#004d66)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #0A766A  0%,#004d66 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #0A766A  0%,#004d66 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #0A766A  0%,#004d66 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #0A766A  0%,#004d66 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#005466', endColorstr='#004d66',GradientType=0 ); /* IE6-9 */
	border-radius: 4px;
	-webkit-transition: all 300ms ease-in-out 0s;
	-moz-transition: all 300ms ease-in-out 0s;
	-ms-transition: all 300ms ease-in-out 0s;
	-o-transition: all 300ms ease-in-out 0s;
	transition: all 300ms ease-in-out 0s;
}
#DemoButton:hover {
	-webkit-opacity: .97;
	-moz-opacity: .97;
	opacity: .97;
	box-shadow:  0px 2px 20px #000;
 
}
#TitleText {
	font-family: "Raleway";
	color: #000;
	font-size: 25px;
	position: absolute;
	left: 0%;
	top: 82%;
	z-index: 11;
	background-color: #fff;
	opacity: .97;
	padding: 8px;
	border: 1px solid #DDDDDD;
}
#BGanimations {
	position: absolute;
	left: 0%;
	top: 0%;
	width: 100%;
	z-index: 0;
	opacity: .97;
	height: 100%;
}
canvas {
	  display: block; 
	  position: absolute;
}
#SignUp2 {
	left: 50%;
	top: 70px;
	width: 50%;
	z-index: 5;
	font-family: "Raleway";
	color: #FFFFFF;
	font-size: 35px;
	position: absolute;
	background-color: #003946;
	line-height: 60px;
	padding-left: 13px;
	box-shadow: 0px 0px 12px #666;
}
#Line1SignUp {
	position: absolute;
	left: 59%;
	top: 30%;
	width: 27%;
	height: 1px;
	z-index: 2;
	background-color: #A2A2A2;
}
#FormSignUp {
	position: absolute;
	left: 70%;
	top: 6%;
	width: 28%;
	height: 82%;
	z-index: 7;
	background-color: #FFFFFF;
	box-shadow: 0px 6px 11px #666;
	overflow-y: auto;
	max-height: 642px;
	font-family: "Raleway";
}
.inputhover {
	-webkit-transition: all 300ms ease-in-out 0s;
	-moz-transition: all 300ms ease-in-out 0s;
	-ms-transition: all 300ms ease-in-out 0s;
	-o-transition: all 300ms ease-in-out 0s;
	transition: all 300ms ease-in-out 0s;

}
.inputhover:hover {
	-webkit-opacity: .9;
	-moz-opacity: .9;
	opacity: .9;
	box-shadow:  0px 2px 20px #000;

}

.FirstName {
	border: 1px solid #DDDDDD;
	position: absolute;
	left: 2%;
	top: 10px;
	width: 96%;
	height: 50px;
	z-index: 8;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 8px;
}

.LastName {
	border: 1px solid #DDDDDD;
	position: absolute;
	left: 2%;
	top: 75px;
	width: 96%;
	height: 50px;
	z-index: 8;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 8px;
}
.Username {
	border: 1px solid #DDDDDD;
	position: absolute;
	left: 2%;
	top: 140px;
	width: 96%;
	height: 50px;
	z-index: 8;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 8px;
}

.EmailForm {
	border: 1px solid #DDDDDD;
	position: absolute;
	left: 2%;
	top: 205px;
	width: 96%;
	height: 50px;
	z-index: 8;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 8px;
}
.PasswordForm {
	border: 1px solid #DDDDDD;
	position: absolute;
	left: 2%;
	top: 300px;
	width: 96%;
	height: 50px;
	z-index: 8;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 8px;
}
.PasswordForm2 {
	border: 1px solid #DDDDDD;
	position: absolute;
	left: 2%;
	top: 395px;
	width: 96%;
	height: 50px;
	z-index: 8;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 8px;
}


#apDiv1 {
	position: absolute;
	left: 0%;
	top: 90%;
	width: 100%;
	height: 10%;
	z-index: 8;
	background-color: #01181D;
}
#apDiv2 {
position: absolute;
left: 1%;
top: 20%;
width: 47%;
height: 62%;
z-index: 9;
background-color: #FFFFFF;
opacity: .98;
border: 1px solid #DDDDDD;
border: border: 1px solid #DDDDDD;
box-shadow: 0px 0px 50px #666;
}
#apDiv3 {
	position: absolute;
	left: 134px;
	top: 257px;
	width: 202px;
	height: 191px;
	z-index: 12;
}

.TextWhiteBottom {
	font-family: "Raleway";
	color: #fff;
	font-size: 14px;
	text-indent: 8px;
}
#text1 {
	position: absolute;
	left: 5%;
	top: 0%;
	padding: 3px;
	height: 100%;
	z-index: 12;
	padding: 2%;
}



</style>
<link href="SpryAssets/SpryTooltip.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#Enterpw {
	position: absolute;
	left: 2%;
	top: 268px;
	width: 96%;
	z-index: 12;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 2px;
}

#Confirmpw {
	position: absolute;
	left: 2%;
	top: 363px;
	width: 96%;
	z-index: 12;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 2px;
}

#Birthday {
	position: absolute;
	left: 2%;
	top: 461px;
	width: 96%;
	z-index: 12;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 2px;
}
#Month1 {
	position: absolute;
	left: 2%;
	top: 495px;
	width: 96%;
	height: 41px;
	z-index: 12;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 2px;
}
.Month2 {
	width: 30%;
	height: 41px;
	z-index: 12;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 2px;

}
#Day1 {
	position: absolute;
	left: 32%;
	top: 495px;
	height: 41px;
	z-index: 12;
	width: 50%;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 2px;
}
.Day2 {
	height: 41px;
	z-index: 12;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 2px;
	width: 30%;

}
#Year1 {
	position: absolute;
	left: 48%;
	top: 495px;
	height: 41px;
	z-index: 12;
	width: 51%;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 2px;
}
.Gender {
	position: absolute;
	left: 65.5%;
	top: 495px;
	height: 41px; 
	z-index: 12;
	width: 30%;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 2px;
	border: 1px solid #ACACAC;

}
#Male {
	position: absolute;
	left: 48%;
	top: 560px;
	/* height: 41px; */
	z-index: 12;
	width: 30%;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 2px;
}
.Year2 {
	height: 41px;
	z-index: 12;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 2px;
	width: 30%;
}
.SignUpButton {
	position: absolute;
	top: 568px;
	left: 2%;
	width: 96%;
	height: 33px;
	background-color: #444444;
	color: #FFF;
	font-family: "Raleway";
	border-radius: 5px;
	cursor: pointer;
	line-height: 33px;
	margin-bottom: 28px;
	font-size: 20px;
	-webkit-transition: all 300ms ease-in-out 0s;
	-moz-transition: all 300ms ease-in-out 0s;
	-ms-transition: all 300ms ease-in-out 0s;
	-o-transition: all 300ms ease-in-out 0s;
	transition: all 300ms ease-in-out 0s;
	border: inherit;
	box-shadow: 0px 3px 7px #666;
	cursor: pointer;
	background: -moz-linear-gradient(top, #0A766A 0%, #004d66 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#0A766A ), color-stop(100%,#004d66));
	background: -webkit-linear-gradient(top, #0A766A 0%,#004d66 100%);
	background: -o-linear-gradient(top, #0A766A 0%,#004d66 100%);
	background: -ms-linear-gradient(top, #0A766A 0%,#004d66 100%);
	background: linear-gradient(to bottom, #0A766A 0%,#004d66 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#005466', endColorstr='#004d66',GradientType=0 );
	border-radius: 4px;
	-webkit-transition: all 100ms ease-in-out 0s;
	-moz-transition: all 100ms ease-in-out 0s;
	-ms-transition: all 100ms ease-in-out 0s;
	-o-transition: all 100ms ease-in-out 0s;
	transition: all 100ms ease-in-out 0s;
}

.SignUpButton:hover {
	box-shadow:  0px 2px 20px #000;
	
}


#thankyou {
	width: 28%;
	z-index: 12;
	line-height: 53px;
	opacity: 0;
}
</style>
<style type="text/css">
	p.error, p.success {
		font-weight: bold;
		padding: 10px;
		border: 1px solid;
	}
	p.error {
		background: #ffc0c0;
		color: #900;
	}
	p.success {
		background: #b3ff69;
		color: #4fa000;
	}
.visiblety {
	background: -moz-linear-gradient(top, #AE1212 0%, #004d66 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#AE1212 ), color-stop(100%,#004d66));
	background: -webkit-linear-gradient(top, #AE1212 0%,#004d66 100%);
	background: -o-linear-gradient(top, #AE1212 0%,#004d66 100%);
	background: -ms-linear-gradient(top, #AE1212 0%,#004d66 100%);
	background: linear-gradient(to bottom, #AE1212 0%,#004d66 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#005466', endColorstr='#004d66',GradientType=0 );
	border-radius: 4px;
	-webkit-transition: all 300ms ease-in-out 0s;
	-moz-transition: all 300ms ease-in-out 0s;
	-ms-transition: all 300ms ease-in-out 0s;
	-o-transition: all 300ms ease-in-out 0s;
	position: absolute;
	top: 40%;
	background-color: #0066CC;
	-webkit-transition: all 300ms ease-in-out 0s;
	-moz-transition: all 300ms ease-in-out 0s;
	-ms-transition: all 300ms ease-in-out 0s;
	-o-transition: all 300ms ease-in-out 0s;
	transition: all 300ms ease-in-out 0s;
	left: 34%;
	border-radius: 4px;
	color: white;
	opacity: 1 !important;
	box-shadow:  0px 2px 20px #000;
		font-family: "Raleway";
	font-size: 22px;

}	
#status {
	position: absolute;
	left: 50%;
	top: 170px;
	width: 20%;
	height: 35px;
	z-index: 12;
	font-family: "Raleway";
	color: #002E2E;
	font-size: 16px;
	text-indent: 2px;
	overflow: visible;
}
#terms {
	display: block; 
}

</style>
<script type="text/javascript">
    (function() {
        var link_element = document.createElement("link"),
            s = document.getElementsByTagName("script")[0];
        if (window.location.protocol !== "http:" && window.location.protocol !== "https:") {
            link_element.href = "http:";
        }
        link_element.href += "//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900";
        link_element.rel = "stylesheet";
        link_element.type = "text/css";
        s.parentNode.insertBefore(link_element, s);
    })();
</script>



</head>

<body>

<div id="BGanimations">
    <canvas id="c"></canvas>
</div>
<div id="SoulstatTitle">All OF Us</div>
<div id="DemoButton">
  <div align="center">DEMO!</div>
</div>


<div id="status"></div>
<div class="tooltipContent" id="sprytooltip1">September 2014</div>

<div id="TitleText">Network, Explore, Experience.</div>
<div id="SignUp2">Sign Up</div>
<div id="Line1SignUp"></div>
<div id="FormSignUp">

<form name="signupform" id="signupform" onSubmit="return false;">

<input value="First Name" id="firstname" type="text" onBlur="checkfirstname()" onKeyUp="restrict('firstname')" maxlength="16" class="FirstName inputhover" />

<input value="Last Name" id="lastname" type="text" onBlur="checklastname()" onKeyUp="restrict('lastname')" maxlength="16"  class="LastName inputhover" />

<input value="Username" id="username" type="text" onBlur="checkusername()" onKeyUp="restrict('username')" maxlength="16"  class="Username inputhover" />

<input value="Email" name="email" id="email" type="text" onFocus="emptyElement('status')" onkeyUp="restrict('email')" maxlength="88" class="EmailForm inputhover" />

<div id="Enterpw">Password</div>
<input id="pass1" onFocus="emptyElement('status')" maxlength="100" name="Password" type="password"  class="PasswordForm inputhover" />
<div id="Confirmpw">Confirm Password</div>
<input id="pass2" onFocus="emptyElement('status')" maxlength="100" name="Password" type="password"  class="PasswordForm2 inputhover" />

<div id="Birthday">Birthday</div>
<div id="Month1">
  <label for="Month" ></label>
  <select name="Month" class="Month2" id="Month">
    <option value="Month">Month</option>
    <option value="Jan">Jan</option>
    <option value="Feb.">Feb.</option>
    <option value="Mar.">Mar.</option>
    <option value="Apr.">Apr.</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="Aug.">Aug.</option>
    <option value="Sept.">Sept.</option>
    <option value="Oct.">Oct.</option>
    <option value="Nov.">Nov.</option>
    <option value="Dec.">Dec.</option>
  </select>
</div>

<div id="Day1">
  <label for="Day" ></label>
  <select name="Day" class="Day2" id="Day">
    <option value="Day">Day</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
  </select>
</div>

<div id="Year1">
  <label for="Year" ></label>
  <select name="Year" class="Year2" id="Year">
<option value="">Year</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option>
  </select>
  
</div>

<div id="Female">
    <select id="gender" class="Gender" onFocus="emptyElement('status')">
      <option value="">Gender</option>
      <option value="m">Male</option>
      <option value="f">Female</option>
    </select>
</div>

<div onClick="signup()" id="signupbtn" class="SignUpButton">
  <div align="center">JOIN!</div>
</div>
</form>      
      
 


</div>

<div id="apDiv1">
<div id="text1" class="TextWhiteBottom">SoulStat © 2014 - English</div>
</div>
<div id="SoulStatImg"></div>
<div id="ZipnovusImg"></div>
<div id="DiamhnoidImg"></div>
<script src="javascript/backgroudnani.js"></script>

<script type="text/javascript">
var sprytooltip1 = new Spry.Widget.Tooltip("sprytooltip1", "#DemoButton", {followMouse:true, closeOnTooltipLeave:true, useEffect:"fade", offsetX:"3px", offsetY:"3px"});
</script>
</body>
</html>

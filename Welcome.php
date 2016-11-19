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


canvas {
	  display: block; 
	  position: absolute;
}
#SignUp2 {
	left: 89%;
	top: 10px;
	/* height: 35px; */
	width: 9.8%;
	z-index: 5;
	font-family: "Times New Roman", Times, serif;
	color: #FFFFFF;
	font-size: 23px;
	line-height: 35px;
	position: absolute;
	text-align: center;
	font-style: italic;
	background: -moz-linear-gradient(top, rgba(0,102,51,0.89) 0%, rgba(0,101,51,0.89) 2%, rgba(0,71,75,0.8) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,102,51,0.89)), color-stop(2%,rgba(0,101,51,0.89)), color-stop(100%,rgba(0,71,75,0.8)));
	background: -webkit-linear-gradient(top, rgba(0,102,51,0.89) 0%,rgba(0,101,51,0.89) 2%,rgba(0,71,75,0.8) 100%);
	background: -o-linear-gradient(top, rgba(0,102,51,0.89) 0%,rgba(0,101,51,0.89) 2%,rgba(0,71,75,0.8) 100%);
	background: -ms-linear-gradient(top, rgba(0,102,51,0.89) 0%,rgba(0,101,51,0.89) 2%,rgba(0,71,75,0.8) 100%);
	background: linear-gradient(to bottom, rgba(0,102,51,0.89) 0%,rgba(0,101,51,0.89) 2%,rgba(0,71,75,0.8) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e3006633', endColorstr='#cc00474b',GradientType=0 );
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
.UsernameHome {
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
#footer {
	position: absolute;
	left: 0%;
	top: 95%;
	width: 100%;
	height: 5%;
	z-index: 8;
	background-color: #01181D;
	overflow: hidden;
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
	display: table-cell;
}
#text1 {
	padding: 2%;
	height: 100%;
	z-index: 12;
	width: 50%;
}
</style>
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
	margin-bottom: 25px;
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

#body-container {
	position: absolute;
	left: 0%;
	top: 0%;
	width: 100%;
	z-index: 6;
	height: 100%;
	background: -moz-linear-gradient(top,  rgba(255,255,255,0.98) 0%, rgba(255,255,255,0.98) 1%, rgba(255,255,255,0.98) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0.98)), color-stop(1%,rgba(255,255,255,0.98)), color-stop(100%,rgba(255,255,255,0.98)));
	background: -webkit-linear-gradient(top,  rgba(255,255,255,0.98) 0%,rgba(255,255,255,0.98) 1%,rgba(255,255,255,0.98) 100%);
	background: -o-linear-gradient(top,  rgba(255,255,255,0.98) 0%,rgba(255,255,255,0.98) 1%,rgba(255,255,255,0.98) 100%);
	background: -ms-linear-gradient(top,  rgba(255,255,255,0.98) 0%,rgba(255,255,255,0.98) 1%,rgba(255,255,255,0.98) 100%);
	background: linear-gradient(to bottom,  rgba(255,255,255,0.98) 0%,rgba(255,255,255,0.98) 1%,rgba(255,255,255,0.98) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#faffffff', endColorstr='#faffffff',GradientType=0 );
}
#soulstat-logo {
	position: fixed;
	left: 6.2%;
	top: 5px;
	width: 71px;
	height: 71px;
	z-index: 11;
	background-image: url(images/SoulStat.fw.png);
	background-size: contain;
	background-position: center top;
	background-repeat: no-repeat;
	-webkit-transition: all 400mss ease-in-out 0s;
	-moz-transition: all 400ms ease-in-out 0s;
	-ms-transition: all 400ms ease-in-out 0s;
	-o-transition: all 400ms ease-in-out 0s;
	transition: all 400ms ease-in-out 0s;

    -webkit-animation-name: Floatingx;
    -webkit-animation-duration: 3s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: ease-in-out;
	
    -moz-animation-name: Floating;
    -moz-animation-duration: 3s;
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: ease-in-out;
	
}

@-webkit-keyframes Floatingx{
    from {-webkit-transform:translate(0, 0px);}
    65% {-webkit-transform:translate(0, 15px);}
    to {-webkit-transform: translate(0, -0px);    }    
}
    
@-moz-keyframes Floating{
    from {-moz-transform:translate(0, 0px);}
    65% {-moz-transform:translate(0, 15px);}
    to {-moz-transform: translate(0, -0px);}    
}
#SoulStatRobot {
	position: fixed;
	left: 6.5%;
	top: 0px;
	width: 58px;
	height: 58px;
	z-index: 11;
	box-shadow: 0px 0px 39px #807D7D;
	border-radius: 50%;
	background: rgb(0,76,102);
	background: -moz-linear-gradient(-45deg,  rgba(0,76,102,1) 0%, rgba(0,64,32,1) 100%);
	background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(0,76,102,1)), color-stop(100%,rgba(0,64,32,1)));
	background: -webkit-linear-gradient(-45deg,  rgba(0,76,102,1) 0%,rgba(0,64,32,1) 100%);
	background: -o-linear-gradient(-45deg,  rgba(0,76,102,1) 0%,rgba(0,64,32,1) 100%);
	background: -ms-linear-gradient(-45deg,  rgba(0,76,102,1) 0%,rgba(0,64,32,1) 100%);
	background: linear-gradient(135deg,  rgba(0,76,102,1) 0%,rgba(0,64,32,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#004c66', endColorstr='#004020',GradientType=1 );
	-webkit-animation: SS 4.5s infinite linear;
	animation: SS 4.5s infinite linear;
}

@keyframes SS {
	from {
		transform: rotate(0deg)
		           translate(-200px)
		           rotate(0deg);
	}
	to {
		transform: rotate(360deg)
		           translate(-200px) 
		           rotate(-360deg);
	}
}

#signin-box {
	position: absolute;
	left: 30%;
	top: 149px;
	width: 40%;
	height: 283px;
	z-index: 7;
	border: 1px solid #D6D6D6;
	border-radius: 5px;
}
#cloudbottom {
	position: absolute;
	left: 0%;
	top: 66%;
	width: 100%;
	height: 34%;
	z-index: 7;
	background-image: url(images/clouds.jpg);
	background-size: cover;
	background-position: center center;
}
#cloudbottombgcover {
	position: absolute;
	left: 0%;
	top: 66%;
	width: 100%;
	height: 34%;
	z-index: 8;
	background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(100%,rgba(255,255,255,0)));
	background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%);
	background: -o-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%);
	background: -ms-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%);
	background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#00ffffff',GradientType=0 );
}
#cloudbottomcolor {
	position: absolute;
	left: 0%;
	top: 98%;
	width: 100%;
	height: 2%;
	z-index: 8;
	opacity: .8;
	background-color: #C8C8C8;
}

.fadeinZoom2 {
	opacity: 0;
	animation-name: cloudfade;
	animation-fill-mode: forwards;
	animation-duration: 3s; /* 3 seconds */
	animation-timing-function: linear;
	animation-delay: 1s;
	animation-iteration-count: once;
	animation-direction: normal;
	animation-play-state: running;
	/* Firefox: */
	-moz-animation-name: cloudfade;
	-moz-animation-fill-mode: forwards;
	-moz-animation-duration: 3s;
	-moz-animation-timing-function: linear;
	-moz-animation-delay: 1s;
	-moz-animation-iteration-count: once;
	-moz-animation-direction: normal;
	-moz-animation-play-state: running;
	/* Safari and Chrome: */
	-webkit-animation-name: cloudfade;
	-webkit-animation-fill-mode: forwards;
	-webkit-animation-duration: 3s;
	-webkit-animation-timing-function: linear;
	-webkit-animation-delay: 1s;
	-webkit-animation-iteration-count: once;
	-webkit-animation-direction: nomral;
	-webkit-animation-play-state: running;
	/* Opera: */
	-o-animation-name: cloudfade;
	-o-animation-fill-mode: forwards;
	-o-animation-duration: 3s;
	-o-animation-timing-function: linear;
	-o-animation-delay: 1s;
	-o-animation-iteration-count: once;
	-o-animation-direction: normal;
	-o-animation-play-state: running;
	
	-webkit-transition: all 400ms ease-in-out 0s;
	-moz-transition: all 400ms ease-in-out 0s;
	-ms-transition: all 400ms ease-in-out 0s;
	-o-transition: all 400ms ease-in-out 0s;
	transition: all 400ms ease-in-out 0s;
}

@-webkit-keyframes cloudfade {
	from {
	opacity: 0 ;

	}
	to {
	opacity:1 ;
	}
}
.fadeinZoom3 {
	opacity: 0;
	animation-name: cloudfade3;
	animation-fill-mode: forwards;
	animation-duration: 400ms; /* 3 seconds */
	animation-timing-function: linear;
	animation-delay: 0s;
	animation-iteration-count: once;
	animation-direction: normal;
	animation-play-state: running;
	/* Firefox: */
	-moz-animation-name: cloudfade3;
	-moz-animation-fill-mode: forwards;
	-moz-animation-duration: 400ms;
	-moz-animation-timing-function: linear;
	-moz-animation-delay: 0s;
	-moz-animation-iteration-count: once;
	-moz-animation-direction: normal;
	-moz-animation-play-state: running;
	/* Safari and Chrome: */
	-webkit-animation-name: cloudfade3;
	-webkit-animation-fill-mode: forwards;
	-webkit-animation-duration: 400ms;
	-webkit-animation-timing-function: linear;
	-webkit-animation-delay: 0s;
	-webkit-animation-iteration-count: once;
	-webkit-animation-direction: nomral;
	-webkit-animation-play-state: running;
	/* Opera: */
	-o-animation-name: cloudfade3;
	-o-animation-fill-mode: forwards;
	-o-animation-duration: 400ms;
	-o-animation-timing-function: linear;
	-o-animation-delay: 0s;
	-o-animation-iteration-count: once;
	-o-animation-direction: normal;
	-o-animation-play-state: running;
	
	-webkit-transition: all 400ms ease-in-out 0s;
	-moz-transition: all 400ms ease-in-out 0s;
	-ms-transition: all 400ms ease-in-out 0s;
	-o-transition: all 400ms ease-in-out 0s;
	transition: all 400ms ease-in-out 0s;
}

@-webkit-keyframes cloudfade3 {
	from {
	opacity: 0 ;

	}
	to {
	opacity:1 ;
	}
}

#analyticsbackground {
	position: absolute;
	left: 0%;
	top: 110%;
	width: 100%;
	height: 90%;
	z-index: 7;
	background-image: url(images/analyticsbackground.jpg);
	background-size: cover;	
	background-position: center center;
}
#analyticsbackgroundcolor {
	position: absolute;
	left: 0%;
	top: 110%;
	width: 100%;
	height: 90%;
	z-index: 8;
background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.35) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.35)));
background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a6000000',GradientType=0 );
}

#customizebackground {
	position: absolute;
	left: 0%;
	top: 220%;
	width: 100%;
	height: 90%;
	z-index: 7;
	background-image: url(images/customizebackground.jpg); 
	background-size: cover;	
	background-position: center center;
}
#customizebackgroundcolor {
	position: absolute;
	left: 0%;
	top: 220%;
	width: 100%;
	height: 90%;
	z-index: 8;
background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.35) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.35)));
background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a6000000',GradientType=0 );
}
#ocenaimagebackground {
	position: absolute;
	left: 0%;
	top: 330%;
	width: 100%;
	height: 90%;
	z-index: 7;
	background-image: url(images/waterstat.jpg);
	background-size: cover;
	background-position: center center;
}
#ocenaimagebackgroundcolor {
	position: absolute;
	left: 0%;
	top: 330%;
	width: 100%;
	height: 90%;
	z-index: 8;
background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.35) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.35)));
background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a6000000',GradientType=0 );
}
#virtualtourbackground {
	position: absolute;
	left: 0%;
	top: 440%;
	width: 100%;
	height: 90%;
	z-index: 7;
	background-image: url(images/dreamhome.jpg);
	background-size: cover;
	background-position: center center;
}
#virtualtourbackgroundcolor {
	position: absolute;
	left: 0%;
	top: 440%;
	width: 100%;
	height: 90%;
	z-index: 8;
background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.35) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.35)));
background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a6000000',GradientType=0 );
}
#tonsmorebackground {
	position: absolute;
	left: 0%;
	top: 550%;
	width: 100%;
	height: 90%;
	z-index: 7;
	background-image: url(images/tonsmore.jpg);
	background-size: cover;
	background-position: center center;
}
#tonsmorebackgroundcolor {
	position: absolute;
	left: 0%;
	top: 550%;
	width: 100%;
	height: 90%;
	z-index: 8;
	background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.35) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.35)));
	background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
	background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
	background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
	background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a6000000',GradientType=0 );
}

#footergradient {
	position: absolute;
	left: 0%;
	top: 610%;
	width: 100%;
	height: 30%;
	z-index: 8;
	background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,1) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,1)));
	background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);
	background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);
	background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);
	background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#000000',GradientType=0 );
}
#footerbottom {
	position: absolute;
	top: 640%; 
	height: 300px;
	width: 100%; 
	background-color:#000;
	z-index: 9;
}
#outer-container2 {
	position: absolute;
	top: 10%; 
	left: 2%;
	height: 80%;
	width: 96%;
	z-index: 9;
}
#outer-container {
	position: absolute;
	top: 14.5%;
	left: 2%;
	width: 96%;
	z-index: 9;
}
.TitleFontContainers {
	font-family: Arial, Helvetica, sans-serif;
	line-height: 100px;
	font-size: 96px;
	color: #fff;
}
.SubTitleFontContainer {
	line-height: 78px;
	font-size: 30px;
	color: #fff;
	text-align: center;
	font-style: italic;
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



<div id="body-container">
<!---Page1 -->     
    <div id="signin-box"></div>
    <div id="SoulStatRobot"></div>
	<div id="soulstat-logo"></div>
    <div id="SignUp2"><em>Sign Up</em></div>
	<div id="cloudbottombgcover"></div>
    <div id="cloudbottom" class="fadeinZoom2"></div>
    <div id="cloudbottomcolor"></div>
<!---Page2 -->     
    <div id="analyticsbackground"></div> 
  <div id="analyticsbackgroundcolor">
   	<div id="outer-container2" style="border: 1px solid #69A995;">
                    <div id="outer-container" style="border: 1px solid #69A995;">
                      <div align="center" class="TitleFontContainers">ANALYTICS DATA </div>
                      <p align="center" class="SubTitleFontContainer"><em>Search our database for various information regarding what users like and various ratings.</em></p>
            </div>

    </div>
  </div>    
      
<!---Page3 -->     
    <div id="customizebackground"></div>  
    <div id="customizebackgroundcolor">
        <div id="outer-container2" style="border: 1px solid #FEFE26;">
                            <div id="outer-container" style="border: 1px solid #FEFE26;">
                              <div align="center" class="TitleFontContainers"> CUSTOMIZE</div>
                              <p align="center" class="SubTitleFontContainer"><em>Develop an environment around your social experience. </em></p>
                    </div>
        
            </div>
        </div>  
    
<!---Page4 -->     
    <div id="ocenaimagebackground"></div>  
  <div id="ocenaimagebackgroundcolor">
  	<div id="outer-container2" style="border: 1px solid #fff;">
                            <div id="outer-container" style="border: 1px solid #fff;">
                              <div align="center" class="TitleFontContainers">"STAT!"</div>
                              <p align="center" class="SubTitleFontContainer"><em>Rate content and view the analytics data behind them.</em></p>
                    </div>
        
            </div>
  
  </div>  

<!---Page5 -->     
    <div id="virtualtourbackground"></div>  
    <div id="virtualtourbackgroundcolor">
    	<div id="outer-container2" style="border: 1px solid #B3B9CA;">
                            <div id="outer-container" style="border: 1px solid #B3B9CA;">
                              <div align="center" class="TitleFontContainers">VIRTUAL TOURS</div>
                              <p align="center" class="SubTitleFontContainer"><em>	Integrate virtual tours seamlessly. </em></p>
                    </div>
        
            </div>
    
    </div>  

<!---Page6 -->     
  <div id="tonsmorebackground"></div>  
    <div id="tonsmorebackgroundcolor">
    	<div id="outer-container2" style="border: 1px solid #fff;">
                            <div id="outer-container" style="border: 1px solid #fff;">
                              <div align="center" class="TitleFontContainers">TONS MORE...</div>
                              <p align="center" class="SubTitleFontContainer"><em>Join the now... All-Of US</em></p>
                    </div>
        
            </div>
    </div>  

    <div id="footergradient"></div>
    <div id="footerbottom"></div>


      
</div>

<script src="javascript/LoadHeadsandsubs.js"></script>

</body>


</html>

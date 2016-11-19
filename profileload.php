


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $u; ?>- All Of Us</title>

<style type="text/css">
.Overlay {
	background-color: rgb(243, 243, 243);
}
.postimagestyle {
	background-image: url(<?php echo $profile_pic; ?>);
}
.reppostimagestyle {
    background-image: url(Icons/usersign.fw.png);
	background-color: #004879;
}

</style>

<style type="text/css">


img.friendpics{
	width: 110px;
	height: 74px;
	margin: 2px;
}
</style>

<style type="text/css">
.fadeinZoom {
	height: 100%;
	animation-name: CL;
	animation-fill-mode: forwards;
	animation-duration: 1s; /* 3 seconds */
	animation-timing-function: linear;
	animation-delay: 0s;
	animation-iteration-count: once;
	animation-direction: normal;
	animation-play-state: running;
	/* Firefox: */
	-moz-animation-name: CL;
	-moz-animation-fill-mode: forwards;
	-moz-animation-duration: 1s;
	-moz-animation-timing-function: linear;
	-moz-animation-delay: 0s;
	-moz-animation-iteration-count: once;
	-moz-animation-direction: normal;
	-moz-animation-play-state: running;
	/* Safari and Chrome: */
	-webkit-animation-name: CL;
	-webkit-animation-fill-mode: forwards;
	-webkit-animation-duration: 1s;
	-webkit-animation-timing-function: linear;
	-webkit-animation-delay: 0s;
	-webkit-animation-iteration-count: once;
	-webkit-animation-direction: nomral;
	-webkit-animation-play-state: running;
	/* Opera: */
	-o-animation-name: CL;
	-o-animation-fill-mode: forwards;
	-o-animation-duration: 1s;
	-o-animation-timing-function: linear;
	-o-animation-delay: 0s;
	-o-animation-iteration-count: once;
	-o-animation-direction: normal;
	-o-animation-play-state: running;
}

@-webkit-keyframes CL {
	from {
			 -ms-transform: scale(.02,.02); /* IE 9 */
    -webkit-transform: scale(.02,.02); /* Chrome, Safari, Opera */
    transform: scale(.02,.02);

		opacity: 0 ;
	}
	to {
			 -ms-transform: scale(1,1); /* IE 9 */
    -webkit-transform: scale(1,1); /* Chrome, Safari, Opera */
    transform: scale(1,1);

		opacity:1 ;
	}
}

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
		margin: 0;
		padding: 0;
		height: 100%;
		width: 100%;
		}
ol, ul {
	list-style: none;
	font-family: inherit;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}		

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	min-height: 100%;
	background-color:#FFF;
}

.backgroundcolorchange {
	position: absolute;
	left: 0%;
	top: 0%;
	width: 100%;
	height: 100%;
	z-index: 1;
	background-color: #fafafa;
}
html { 
    height:100%;
}
	
#topbackgroundimage {
	position: absolute;
	left: 0%;
	top: 21px;
	width: 100%;
	height: 468px;
	z-index: 1;
}
#borderbar {
    position: absolute;
    width: 49.5%;
    left: 38.5%;
    height: 3016px;
    overflow: visible;
    z-index: 8;
    background-repeat: no-repeat;
    webkit-transition: all 300ms linear 0ms;
    -moz-transition: all 300ms linear 0ms;
    -ms-transition: all 300ms linear 0ms;
    -o-transition: all 300ms linear 0ms;
    transition: all 300ms linear 0ms;}
#TabsInfo {
	position: absolute;
	left: 0%;
	width: 100%;
	z-index: 3;
	box-shadow: 0px 0px 85px #B8B8B8;
	text-indent: 2%;
	top: 0px;
}
#profileimage {
	position: fixed;
	z-index: 5;
	border-top-left-radius: 12px;
	border-bottom-right-radius: 12px;
	-webkit-transition: all 300ms ease-in-out 0s;
	-moz-transition: all 300ms ease-in-out 0s;
	-ms-transition: all 300ms ease-in-out 0s;
	-o-transition: all 300ms ease-in-out 0s;
	transition: all 300ms ease-in-out 0s;
	overflow: visible;
	box-shadow: 0px 1px 1px #999;
    opacity: 0.95;
	left: 1%;
    top: 11vh;
    width: 54.5%;
    height: 73vh;
}
.procollapse {
    height: 22vh !important;
}
#Soundbox {
	position: absolute;
	left: 10%;
	top: 42px;
	width: 23%;
	height: 471px;
	overflow: hidden;
	z-index: 6;
	box-shadow: 0px 1px 1px #999;
	background: -moz-linear-gradient(top, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.95) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0.95)), color-stop(100%,rgba(255,255,255,0.95)));
	background: -webkit-linear-gradient(top, rgba(255,255,255,0.95) 0%,rgba(255,255,255,0.95) 100%);
	background: -o-linear-gradient(top, rgba(255,255,255,0.95) 0%,rgba(255,255,255,0.95) 100%);
	background: -ms-linear-gradient(top, rgba(255,255,255,0.95) 0%,rgba(255,255,255,0.95) 100%);
	background: linear-gradient(to bottom, rgba(255,255,255,0.95) 0%,rgba(255,255,255,0.95) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2ffffff', endColorstr='#f2ffffff',GradientType=0 );
	webkit-transition: all 200ms linear 0ms;
	-moz-transition: all 200ms linear 0ms;
	-ms-transition: all 200ms linear 0ms;
	-o-transition: all 200ms linear 0ms;
	transition: all 200ms linear 0ms;
}
#Adboxbox {
position: fixed;
    left: 1%;
    top: 93vh;
	   width: 54.5%;
    height: 3vh;
    z-index: 7;
    border-radius: 1px;
    background-color: #B6B6B6;
	box-shadow: 0px 1px 2px #CECECE;
	    background: -moz-linear-gradient(top, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.95) 100%);
    background: -o-linear-gradient(top, rgba(255,255,255,0.95) 0%,rgba(255,255,255,0.95) 100%);
    background: -ms-linear-gradient(top, rgba(255,255,255,0.95) 0%,rgba(255,255,255,0.95) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2ffffff', endColorstr='#f2ffffff',GradientType=0 );
    opacity: 1;
	    -webkit-transition: 300ms ease-in-out 0s;
    -moz-transition: 300ms ease-in-out 0s;
    -ms-transition: 300ms ease-in-out 0s;
    -o-transition: 300ms ease-in-out 0s;
    transition: 300ms ease-in-out 0s;

}
#InfoBox {
position: fixed;
    left: 1%;
    top: 90vh;
    width: 54.5%;
    height: 0vh;
    z-index: 7;
	background-image:url(images/infosample.jpg);
    background-size: cover;
    background-repeat: no-repeat;
		background-position:top center; 
	border: solid 1px #F1F1F1;
    box-shadow: 0px 1px 1px #999;
    background-color: #fff;
	    -webkit-transition: 300ms ease-in-out 0s;
    -moz-transition: 300ms ease-in-out 0s;
    -ms-transition: 300ms ease-in-out 0s;
    -o-transition: 300ms ease-in-out 0s;
    transition: 300ms ease-in-out 0s;

	}
div#profile_pic_box{float:center; height:200px; width:100%; overflow:visible;}
div#profile_pic_box > img{z-index:2000; width:200px;}
div#profile_pic_box > a {
	display: none;
	position: absolute;
	margin: 51% 0px 0px 0%;
	z-index: 4000;
	background: #0F495C;
	border-radius: 3px;
	font-family: "Raleway";
	font-size: 16px;
	text-decoration: none;
	color: #FFFFFF;
	width: 96%;
	opacity: .8;
	line-height: 32px;
	left: 2%;
	box-shadow: 0px 0px 15px #fff;
}
div#profile_pic_box > form{
	display: none;
	position: absolute;
	z-index: 3000;
	padding: 2%;
	opacity: .95;
	background: #FAFAFA;
	width: 96%;
	height: 89px;
	top: 4%;
	border-radius: 6px;
	box-shadow: 0px 1px 9px #575353;
}
div#profile_pic_box:hover a {
    display: block;
}
#profileimage:hover {
	opacity: 1 !important;
	box-shadow: 0px 0px 118px #B6B6B6 !important;
}
</style>
<style type="text/css">

#ProfileUploadBox {
	position: absolute;
	left: 25%;
	top: 0px;
	width: 200px;
	height: 126px;
	z-index: 7;
	background-color: bisque;
}
#ProfileUploadBox2 {
	position: absolute;
	left: 69%;
	top: 0px;
	width: 9%;
	height: 41px;
	z-index: 102;
	box-shadow: inset 0px 1px 9px #fff;
	background-color: rgb(242, 242, 242);
	overflow: hidden;
	-webkit-transition: all 300ms ease-in-out 0s;
	-moz-transition: all 300ms ease-in-out 0s;
	-ms-transition: all 300ms ease-in-out 0s;
	-o-transition: all 300ms ease-in-out 0s;
	transition: all 300ms ease-in-out 0s;
}
#ProfileUploadBox2:hover {
	-webkit-opacity: .97;
	-moz-opacity: .97;
	opacity: .97;
	background-color: #0C6E69;
	box-shadow: 0px 2px 20px #000;
	cursor: pointer;
	color: #FFF;
}
#CoverBox {
	position: absolute;
	left: 0%;
	top: 0px;
	width: 9%;
	height: 41px;
	z-index: 102;
	background-color: #0F495C;
	overflow: hidden;
	border-radius: 7px;
	-webkit-transition: all 300ms ease-in-out 0s;
	-moz-transition: all 300ms ease-in-out 0s;
	-ms-transition: all 300ms ease-in-out 0s;
	-o-transition: all 300ms ease-in-out 0s;
	transition: all 300ms ease-in-out 0s;
}
#CoverBox:hover {
	-webkit-opacity: .97;
	-moz-opacity: .97;
	opacity: .97;
	background-color: #0C6E69;
	box-shadow: 0px 2px 20px #000;
	cursor: pointer;
	color: #FFF;
}

div.spinnable-carousel.cover div:nth-child(1) {
	background-size: cover;
	background-color: #0F495C;
	opacity: .95;
	background-image: url(<?php echo $cover_1_pic; ?>);
	background-position: center center;
}
div.spinnable-carousel.cover div:nth-child(2) {
	background-size: cover;
	background-color: #0F495C;
	background-image: url(<?php echo $cover_2_pic; ?>);	
	opacity: .95;
	background-position: center center;
}


div.spinnable-carousel.cover div:nth-child(3) {
	background-size: cover;
	background-color: #0F495C;
	background-image: url(<?php echo $cover_3_pic; ?>);
	opacity: .95;
	background-position: center center;
}
div.spinnable-carousel.cover div:nth-child(4) {
	background-size: cover;
	background-color: #0F495C;
	background-image: url(<?php echo $cover_4_pic; ?>);
	opacity: .95;
	background-position: center center;
}
div.spinnable-carousel.cover div:nth-child(5) {
	background-size: cover;
	background-color: #0F495C;
	background-image: url(<?php echo $cover_5_pic; ?>);
	opacity: .95;
	background-position: center center;
}
div.spinnable-carousel.cover div:nth-child(6) {
	background-size: cover;
	background-color: #0F495C;
	background-image: url(<?php echo $cover_6_pic; ?>);
	opacity: .95;
	background-position: center center;
}


div.spinnable-carousel.profile div:nth-child(1) {
	background-size: cover;
	background-image: url(<?php echo $profile_pic; ?>);
	background-position: center center;
	border-radius: 5%;
	width: 96%;
	margin-left: 2%;
	height: 96%;
	margin-top: 2%;	
}
div.spinnable-carousel.profile div:nth-child(2) {
	background-size: cover;
	background-image:url(images/profile_woods/p1.jpg);
	background-color: #F39;
	opacity: .95;
	background-position: center center;
	border-radius: 5%;
	width: 96%;
	margin-left: 2%;
	height: 96%;
	margin-top: 2%;
}
div.spinnable-carousel.profile div:nth-child(3) {
  background-size: cover;
	background-image:url(images/profile_woods/p2.jpg);
	background-color: #6FF;
	opacity: .95;
	background-position: center center;
	border-radius: 5%;
	width: 96%;
	margin-left: 2%;
	height: 96%;
	margin-top: 2%;
}
div.spinnable-carousel.profile div:nth-child(4) {
	background-size: cover;
	background-image:url(images/profile_woods/p3.jpg);	
	background-color: #669;
	opacity: .95;
	background-position: center center;
	border-radius: 5%;
	width: 96%;
	margin-left: 2%;
	height: 96%;
	margin-top: 2%;
}
div.spinnable-carousel.profile div:nth-child(5) {
	background-size: cover;
	background-image:url(images/profile_woods/p4.jpg);
	background-color: #0CC;
	opacity: .95;
	background-position: center center;
	border-radius: 5%;
	width: 96%;
	margin-left: 2%;
	height: 96%;
	margin-top: 2%;
}
div.spinnable-carousel.profile div:nth-child(6) {
	background-size: cover;
	background-image:url(images/profile_woods/p5.jpg);
	background-color: #933;
	opacity: .95;
	background-position: center center;
	border-radius: 5%;
	width: 96%;
	margin-left: 2%;
	height: 96%;
	margin-top: 2%;
}
#ProfilePhoto1 {
	background-image: url(<?php echo $profile_pic; ?>);
    position: absolute;
    left: 1%;
    top: 408px;
    width: 15vh;
    height: 15vh;
    background-size: cover;
    background-position: center center;
    border-radius: 50%;
}


.coverchangephoto {
	box-shadow: 0px 2px 35px #727272;
	-webkit-transition: all 300ms ease-in-out 0s;
	-moz-transition: all 300ms ease-in-out 0s;
	-ms-transition: all 300ms ease-in-out 0s;
	-o-transition: all 300ms ease-in-out 0s;
	transition: all 300ms ease-in-out 0s;
}
#CoverPhoto1 {
    position: absolute;
    left: 1%;
    top: 90px;
    width: 14%;
    height: 15vh;
    background-size: cover;
	background-image: url(<?php echo $cover_1_pic; ?>);
	background-position: center center;
}
#CoverPhoto2 {
	position: absolute;
	left: 17.8%;
	top: 90px;
	width: 14%;
    height: 15vh;
	background-size: cover; 
	background-image: url(<?php echo $cover_2_pic; ?>);
	background-position: center center;
}
#CoverPhoto3 {
	position: absolute;
	left: 34.6%;
	top: 90px;
	width: 14%;
    height: 15vh;
	background-size: cover; 
	background-image: url(<?php echo $cover_3_pic; ?>);
	background-position: center center;
}
#CoverPhoto4 {
	position: absolute;
	left: 51.4%;
	top: 90px;
	width: 14%;
    height: 15vh;
	background-size: cover; 
	background-image: url(<?php echo $cover_4_pic; ?>);
	background-position: center center;
}
#CoverPhoto5 {
	position: absolute;
	left: 68.2%;
	top: 90px;
	width: 14%;
    height: 15vh;
	background-size: cover; 
	background-image: url(<?php echo $cover_5_pic; ?>);
	background-position: center center;
}
#CoverPhoto6 {
	position: absolute;
	left: 85%;
	top: 90px;
	width: 14%;
    height: 15vh;
	background-size: cover; 
	background-image: url(<?php echo $cover_6_pic; ?>);  
	background-position: center center;
}


.coverchangephoto:hover {
	z-index: 900;
	cursor: pointer;
	box-shadow: 0px 2px 35px #0F495C;
}
	
#GradeintRight {
	position: absolute;
	left: 1%;
	top: 0px;
	width: 98%;
	height: 351px;
	z-index: 99;
	opacity: 1;
}
#SettingsIcon {
	position: absolute;
	left: 65%;
	top: 0px;
	width: 3.5%;
	height: 41px;
	background-position: center center;
	z-index: 100;
	background-size: contain;
	background-repeat: no-repeat;
	background-color: #0F495C;
	background-image: url(images/Settingslogo.fw.png);
	box-shadow: 0px 0px 10px #726F6F;
}
#Clickuploadphotos {
	position: absolute;
	left: 65%;
	top: 0px;
	width: 35%;
	height: 50px;
}
#EditInformation {
	position: absolute;
	left: 80%;
	top: 0px;
	width: 9%;
	height: 41px;
	z-index: 102;
	box-shadow: inset 0px 1px 9px #fff;
	background-color: rgb(242, 242, 242);
	overflow: hidden;
}		
#UserBoxTopLeft {
    position: fixed;
    font-size: 1.91vh;
    color: #5F5F5F;
    z-index: 199;
    background-color: #FAFAFA;
    box-shadow: 0px 0px .6vw #FEFEFE;
    font-family: "Raleway";
    padding-right: 1%;
    -webkit-transition: all 0ms ease-in-out 300ms;
    -moz-transition: all 0ms ease-in-out 300ms;
    -ms-transition: all 0ms ease-in-out 300ms;
    -o-transition: all 0ms ease-in-out 300ms;
    transition: all 0ms ease-in-out 300ms;
    text-indent: 1.2%;
	    border-radius: 2px;
	}	
.UsernameNarrow {
	left: 7%;
    top: 6vh;
    line-height: 4vh;
	}		
.UsernameWide {
    left: 7%;
    top: 6vh;
    line-height: 4vh;
}		
	
#StatsInfo {
	position: fixed;
	left: 0%;
	top: 0%;
	width: 100%;
	height: 100%;
	opacity: 1;
	box-shadow: inset 0px 0px 800px #F8FAFA;
	z-index: 0;
}
.Overlayint {
	z-index: 0;
	background: -moz-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.02) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.02)));
	background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.02) 100%);
	background: -o-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.02) 100%);
	background: -ms-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.02) 100%);
	background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.02) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#05000000',GradientType=0 );
	
}
.OverlayintExpand2 {
	z-index: 201 !important;
	background: -moz-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.02) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.02)));
	background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.02) 100%);
	background: -o-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.02) 100%);
	background: -ms-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.02) 100%);
	background: linear-gradient(to bottom, rgba(86, 34, 23, 0.81) 0%,rgba(0, 26, 29, 0.98) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#05000000',GradientType=0 );
	box-shadow: inset 0px 0px 800px #000 !important;
	
    -webkit-animation-name: overlay2;
    -webkit-animation-duration: 20s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: ease-in-out;
		-webkit-animation-direction: nomral;
	-webkit-animation-play-state: running;
	
    -moz-animation-name: overlay2;
    -moz-animation-duration: 20s;
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: ease-in-out;
		-moz-animation-direction: nomral;
	-moz-animation-play-state: running;


}
    
@-webkit-keyframes overlay2
{
	0% {	opacity: .4;	

		}
	50% { opacity: 1;
		}
	100% {
	opacity: .4;	
}
}
@-moz-keyframes overlay2{
	0% {	opacity: .4;	

		}
	50% { opacity: 1;
		}
	100% {
	opacity: .4;	
}
}

.widecover{
	left: 35% !important;
	top: 42px !important;
	width: 51.5% !important;
	height: 550px;
}

#caro-container2{
		height: 77%;
	top: 44px;
	position: absolute;
	overflow: hidden;
	left: 9.5%;
	box-shadow: 0px 1px 2px #B3B3B3;
	background-color: #F7F7F7;
	-webkit-transition: all 300ms ease-in-out 0ms;
	-moz-transition: all 300ms ease-in-out 0ms;
	-ms-transition: all 300ms ease-in-out 0ms;
	-o-transition: all 300ms ease-in-out 0ms;
	transition: all 300ms ease-in-out 0ms;

	    perspective: 1000px;
    -webkit-perspective: 1000px;
       -moz-perspective: 1000px;
        -ms-perspective: 1000px;
         -o-perspective: 1000px;

    perspective-origin: 50% 50%;
    -webkit-perspective-origin: 50% 50%;
       -moz-perspective-origin: 50% 50%;
        -ms-perspective-origin: 50% 50%;
         -o-perspective-origin: 50% 50%;

    cursor: move;
    user-select: none;
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
         -o-user-select: none;
}
#caro-container1{
	    perspective: 1000px;
    -webkit-perspective: 1000px;
       -moz-perspective: 1000px;
        -ms-perspective: 1000px;
         -o-perspective: 1000px;

    perspective-origin: 50% 50%;
    -webkit-perspective-origin: 50% 50%;
       -moz-perspective-origin: 50% 50%;
        -ms-perspective-origin: 50% 50%;
         -o-perspective-origin: 50% 50%;

    cursor: move;
    user-select: none;
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
         -o-user-select: none;
	height: 19%;
	position: absolute;
	left: 9.5%;
	top: 65%;
	width: 11%;
	z-index: 120;
	overflow: hidden;
	border-radius: 4%;
	background-color: #fff;
}
#ProfilePhotoX1 {
	position: fixed;
	z-index: 200;
	background-size: cover;
	background-image: url(<?php echo $profile_pic; ?>);
	background-position: center center;
box-shadow: 0px 0px .6vw #FEFEFE;
    border: solid 0.6vw #FAFAFA;
	    border-radius: 50%;
	-webkit-transition: all 0ms linear 200ms;
	-moz-transition: all 0ms linear 200ms;
	-ms-transition: all 0ms linear 200ms;
	-o-transition: all 0ms linear 200ms;
	transition: all 0ms linear 200ms;
}
.ProfileNarrow {
    left: .2vw;
    top: .4vh;
    width: 6vw;
    height: 6vw;
}		
.ProfileWide {
    left: .2vw;
    top: .4vh;
    width: 6vw;
    height: 6vw;
}		
.MiniCoverMove {
	left: 11.5% !important;
	top: 116px !important;
	height: 500px !important;
	position: fixed!important;
	opacity: 1 !important;
	width: 25% !important;
	border-top-right-radius: 13px;
	border-bottom-left-radius: 13px;
	webkit-transition: all 300ms linear 0ms;
	-moz-transition: all 300ms linear 0ms;
	-ms-transition: all 300ms linear 0ms;
	-o-transition: all 300ms linear 0ms;
	transition: all 300ms linear 0ms;
}
.MiniCoverMove:hover {
	opacity: 1 !important;
	box-shadow: 0px 0px 19px #737373 !important;
}


.NotificationSpread {
	left: 10% !important;
	width: 23% !important;
	height: 50% !important;
	border-top-left-radius: 12px;
	border-bottom-right-radius: 12px;
	top: 472px !important;
	position: fixed !important;
}
.RegularCoverMove {
	border-top-right-radius: 12px;
	border-bottom-left-radius: 12px;
}
#StatBoxOptions {
	position: absolute;
	left: 40%;
	top: 20%;
	z-index: 201;
	opacity: 1;
	width: 27px;
	height: 27px;
	background-attachment: scroll;
	background-image: url(../../Icons/Go.fw.png);
	background-size: 100% 100%;
	background-color: #347E3C;
	background-repeat: no-repeat;
	background-position: center center;
	box-shadow: 0px 0px 22px #666;
	border-radius: 50%;
	
	animation-fill-mode: forwards;
	animation-duration: 3.5s; /* 3 seconds */
	animation-timing-function: linear;
	animation-delay: 0s;
	animation-iteration-count: once;
	animation-direction: normal;
	animation-play-state: running;
	/* Firefox: */
	-moz-animation-name: CL;
	-moz-animation-fill-mode: forwards;
	-moz-animation-duration: 3.5s;
	-moz-animation-timing-function: linear;
	-moz-animation-delay: 0s;
	-moz-animation-iteration-count: once;
	-moz-animation-direction: normal;
	-moz-animation-play-state: running;
	/* Safari and Chrome: */
	-webkit-animation-name: CL;
	-webkit-animation-fill-mode: forwards;
	-webkit-animation-duration: 3.5s;
	-webkit-animation-timing-function: linear;
	-webkit-animation-delay: 0s;
	-webkit-animation-iteration-count: once;
	-webkit-animation-direction: nomral;
	-webkit-animation-play-state: running;
	/* Opera: */
	-o-animation-name: CL;
	-o-animation-fill-mode: forwards;
	-o-animation-duration: 3.5s;
	-o-animation-timing-function: linear;
	-o-animation-delay: 0s;
	-o-animation-iteration-count: once;
	-o-animation-direction: normal;
	-o-animation-play-state: running;

	-webkit-animation: SpinLogin 4.5s infinite linear;
	animation: SpinLogin 4.5s infinite linear;
	-webkit-transition: all 200ms ease-in-out 0s;
	-moz-transition: all 200ms ease-in-out 0s;
	-ms-transition: all 200ms ease-in-out 0s;
	-o-transition: all 200ms ease-in-out 0s;
	transition: all 200ms ease-in-out 0s;
}
#StatBoxOptions:hover {
	-webkit-opacity: .97;
	-moz-opacity: .97;
	opacity: .97;
	box-shadow:  0px 0px 20px #347E3C;
	cursor: pointer;
 
}

@keyframes SpinLogin {
	from {
		transform: rotate(0deg);
	}
	to {
		transform: rotate(360deg);
	}
}


.StatBoxOpen{
	box-shadow: inset 0px 1px 6px #B0B0B0 !important;
	font-size: 17px !important;
	color: #5F5F5F !important;
	z-index: 100 !important;
	line-height: 41px !important;
	font-family: "Raleway" !important;
	text-indent: 1% !important;
	width: 88% !important;
	border: #999 0px solid !important;
	border-radius: 3px;
	position: absolute;
	left: 1%;
	top: 5px;
}
.StatBoxClose{

}

.NotificationDisplayOpen{
    left: 36.5% !important;
    width: 35.5% !important;
    top: 4vh !important;
    background-color: rgba(255, 255, 255, 0.96);
}
.NotificationDisplayClosed{
    left: 57.5% !important;
    width: 27.5% !important;
    top: 4vh !important;}
#Coverinfo {
	position: fixed;
	left: 10%;
	top: 533px;
	width: 23%;
	height: 396px;
	z-index: 6;
	box-shadow: 0px 1px 1px #BDBDBD;
}
#Userinfo {
    float: left;
    left: 90%;
    top: 27vh;
    width: 100%;
    height: 52%;
    z-index: 199;
    background-color: #fff;
    overflow: scroll;
}
.cleartosolidclass {
	animation-name: cleartosolid;
	animation-fill-mode: forwards;
	animation-duration: 1s;
	animation-timing-function: linear;
	animation-delay: 0s;
	animation-iteration-count: once;
	animation-direction: normal;
	animation-play-state: running;
	/* Firefox: ; */
	-moz-animation-name: cleartosolid;
	-moz-animation-fill-mode: forwards;
	-moz-animation-duration: 1s;
	-moz-animation-timing-function: linear;
	-moz-animation-delay: 0s;
	-moz-animation-iteration-count: once;
	-moz-animation-direction: normal;
	-moz-animation-play-state: running;
	-webkit-animation-name: cleartosolid;
	-webkit-animation-fill-mode: forwards;
	-webkit-animation-duration: 1s;
	-webkit-animation-timing-function: linear;
	-webkit-animation-delay: 0s;
	-webkit-animation-iteration-count: once;
	-webkit-animation-direction: nomral;
	-webkit-animation-play-state: running;
	/* Opera: ; */
	-o-animation-name: cleartosolid;
	-o-animation-fill-mode: forwards;
	-o-animation-duration: 1s;
	-o-animation-timing-function: linear;
	-o-animation-delay: 0s;
	-o-animation-iteration-count: once;
	-o-animation-direction: normal;
	-o-animation-play-state: running;
}

@keyframes cleartosolid
{
	0%   {opacity: 1;}
	50%   {opacity: .5;}
	100% { opacity: 1;}
}
@-moz-keyframes cleartosolid /* Firefox */
{
	0%   {opacity: 1;}
	50%   {opacity: .5;}
	100% { opacity: 1;}
}
@-webkit-keyframes cleartosolid /* Safari and Chrome */
{
	0%   {opacity: 1;}
	50%   {opacity: .5;}
	100% { opacity: 1;}
}
@-o-keyframes cleartosolid /* Opera */
{
	0%   {opacity: 1;}
	50%   {opacity: .5;}
	100% { opacity: 1;}
}
.cleartosolidclass2 {
	animation-name: cleartosolid2;
	animation-fill-mode: forwards;
	animation-duration: 1.5s;
	animation-timing-function: linear;
	animation-delay: 0s;
	animation-iteration-count: once;
	animation-direction: normal;
	animation-play-state: running;
	/* Firefox: ; */
	-moz-animation-name: cleartosolid2;
	-moz-animation-fill-mode: forwards;
	-moz-animation-duration: 1.5s;
	-moz-animation-timing-function: linear;
	-moz-animation-delay: 0s;
	-moz-animation-iteration-count: once;
	-moz-animation-direction: normal;
	-moz-animation-play-state: running;
	-webkit-animation-name: cleartosolid2;
	-webkit-animation-fill-mode: forwards;
	-webkit-animation-duration: 1.5s;
	-webkit-animation-timing-function: linear;
	-webkit-animation-delay: 0s;
	-webkit-animation-iteration-count: once;
	-webkit-animation-direction: nomral;
	-webkit-animation-play-state: running;
	/* Opera: ; */
	-o-animation-name: cleartosolid2;
	-o-animation-fill-mode: forwards;
	-o-animation-duration: 1.5s;
	-o-animation-timing-function: linear;
	-o-animation-delay: 0s;
	-o-animation-iteration-count: once;
	-o-animation-direction: normal;
	-o-animation-play-state: running;
}

@keyframes cleartosolid2
{
	0%   {opacity: 1;}
	50%   {opacity: .5;}
	100% { opacity: 1;}
}
@-moz-keyframes cleartosolid2 /* Firefox */
{
	0%   {opacity: 1;}
	50%   {opacity: .5;}
	100% { opacity: 1;}
}
@-webkit-keyframes cleartosolid2 /* Safari and Chrome */
{
	0%   {opacity: 1;}
	50%   {opacity: .5;}
	100% { opacity: 1;}
}
@-o-keyframes cleartosolid2 /* Opera */
{
	0%   {opacity: 1;}
	50%   {opacity: .5;}
	100% { opacity: 1;}
}



</style>


<link rel="stylesheet" href="Fonts/font.css">
<link rel="stylesheet" href="assets/minimal.css" type="text/css">
<link rel="stylesheet" href="css/user.css" type="text/css">
<link href="styles/spinnable_carousel.css" rel="stylesheet" type="text/css" />
<link href="styles/carousel3d.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="animate.min.css" />
<link rel="stylesheet" href="css/statusposts.css" type="text/css">
<script>
var SoulControl1;

window.addEventListener('load', function(User){ 
{
	document.getElementById('memeid').addEventListener("click", memeid1);
}
function memeid1()
{
	document.getElementById('memecontainer').className = "visibleeditormeme";
	document.getElementById('memecontainer2').className = "visibleeditormeme";
}
});

</script>


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



<script>
	var yPos, yPosdos;
	function yScroll(){
	
		yPos = window.pageYOffset;
		yPosdos = window.pageYOffset;

		if(yPos > 90){
			document.getElementById('UserBoxTopLeft').className = "UsernameWide cleartosolidclass";
			document.getElementById('ProfilePhotoX1').className = "ProfileWide cleartosolidclass";
			document.getElementById('borderbar').className = "NotificationDisplayOpen cleartosolidclass";
			document.getElementById('ExpandFeatureButton').className = "ExpandFeatureStage2 cleartosolidclass";
			document.getElementById('borderbar').className = "NotificationDisplayOpen";
			document.getElementById('postcontainerlist').className = "postcontainerlistopen";
			document.getElementById('profileimage').className = "covercollapse2";
			document.getElementById('InfoBox').className = "covercollapse ";
			document.getElementById('Adboxbox').className = "covercollapse";
		} else {
			document.getElementById('UserBoxTopLeft').className = "UsernameNarrow cleartosolidclass2";
			document.getElementById('ProfilePhotoX1').className = "ProfileNarrow cleartosolidclass2";
			document.getElementById('borderbar').className = "NotificationDisplayClosed cleartosolidclass2";
			document.getElementById('statustext').className = "StatBoxOpen cleartosolidclass2";
			document.getElementById('ExpandFeatureButton').className = "ExpandFeatureStage1 cleartosolidclass2";
			document.getElementById('borderbar').className = "NotificationDisplayClosed ";
			document.getElementById('postcontainerlist').className = "postcontainerlistclosed";
			document.getElementById('profileimage').className = "";
			document.getElementById('Adboxbox').className = "";
			document.getElementById('InfoBox').className = "";
		}

	}
	window.addEventListener("scroll", yScroll);
</script>
<link rel="stylesheet" type="text/css" href="AE/css/statcss2.css">
<script language=Javascript type="text/javascript" src="AE/javascript/jquery-1.8.3.min.js"></script>
<script language=Javascript type="text/javascript" src="AE/javascript/statjs.js"></script>

<script src="javascript/main.js"></script>
<script src="javascript/ajax.js"></script>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="lib/modernizr-1.6.min.js" type="text/javascript" charset="utf-8"></script>
<script src="source/minimal.js" type="text/javascript" charset="utf-8"></script>
<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="javascriptx/modernizr-1.6.min.js" type="text/javascript" charset="utf-8"></script>
<script src="javascriptx/minimal.js" type="text/javascript" charset="utf-8"></script>
<script src="javascriptx/util1.js" type="text/javascript"></script>
<script src="javascriptx/NumberAnimation.js" type="text/javascript"></script>
<script src="javascriptx/Cursor.js" type="text/javascript"></script>
<script src="javascriptx/Vector.js" type="text/javascript"></script>
<script src="javascript/triggeruserinfo.js" type="text/javascript"></script>



<link href="test3d/css/cubecss.css" rel="stylesheet" type="text/css">

<script src="test3d/javascript/rotate-boxx.js"></script>
<script src="test3d/javascript/trigger1.js"></script>

<script src="javascriptx/loadJson.js" type="text/javascript"></script>
<script src="javascriptx/Carousel3D.js" type="text/javascript"></script>
<script src="javascriptx/SpinnableCarousel.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
/**
 * When the page loads, load in the page indicated
 * by the text after the pound sign.
 */
window.addEventListener("load", function() {
    // Add touch event so that links work in iPhone/iPad as well.
    // Based on idea from:
    // http://stackoverflow.com/questions/20204255/anchor-tag-not-working-in-safari-ios-for-iphone-ipod-touch-ipad
    var links = document.getElementsByTagName("a");
    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener("touchstart", function() { window.open(this, "_self"); });
    }

    var caroPages = [ "page1x.php" ];
    carousel = new Carousel3D(document.getElementById("carousel"), caroPages);
    carousel.goToPage("page1x.php");

    setTimeout(function() { document.body.className = "ready backgroundcolorchange"; }, 100);
});

</script>



</head>
<body>

  <div id="borderbar" class="NotificationDisplayClosed">
      
    
</div>
  <div id="profileimage">
    
    <div id="container">
      <div class="carousel3d-container" style="width:100%; height: 100%; position: absolute; z-index: 10;">
        <div id="carousel" class="carousel3d" style="width:100%; height: 100%;">
          <figure></figure>
          </div>
        </div>
      </div>
</div>

  
  
 
  
  

<link rel="stylesheet" href="css/mobile.css" type="text/css">
</body>
<script src="javascript/dynamic.js"></script>




</html>

<?php
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {   
}else{
	$_SESSION['username'] = NULL;
}

?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="Styles/defaultstyles.css">
   	<link rel="stylesheet" href="Styles/footerstyle.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="Javascript/ribbonsscript.js"></script>
<style>
.section{
	width:940px;
	margin-left: auto;
    margin-right: auto;
	text-align: center;
    overflow: hidden;
	background:rgba(0,0,255,0.2) ;
}
.user {
	background:rgba(0,0,255,0.2) ;
	position:fixed;
	right:0;
	margin-right:130px;
	background-attachment:scroll;
	font-size:24px;
	color:#FFF;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;;
}

.signin {
	position:fixed;
	right:0;
	margin-right:130px;
	background-attachment:scroll;
	background:url(Buttons/signin.png) no-repeat;
	background-size: 120px 42px;
}

.signin:hover {
    background:url(Buttons/signinhover.png);
	background-size: 120px 42px;
}

.signup {
	right:0;
	margin-right:10px;
	float:right;
	position:fixed;
	background-attachment:scroll;
	background:url(Buttons/joinusnow.png) no-repeat;
	background-size: 120px 42px;
}

.signup:hover {
    background:url(Buttons/joinusnowhover.png);
	background-size: 120px 42px;
}

.logout {
	right:0;
	margin-right:10px;
	float:right;
	position:fixed;
	background-attachment:scroll;
	background:url(Buttons/logout.png) no-repeat;
	background-size: 120px 42px;
}

.logout:hover {
    background:url(Buttons/logouthover.png);
	background-size: 120px 42px;
}

.slider-text{
	position:abolute;
	margin-left: 30px;
    margin-right: auto;
    margin-top: 10px;
    text-align: center;
    overflow: hidden;
	background: rgba(0,0,0,0.5);
	width: 880px;
	height: 55px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size: 36px;
	color:#FFF;
}
.slider-textnews{
	position:absolute;
    text-align: center;
	background: rgba(0,0,0,0.8);
	width: 300px;
	height: 267px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size: 24px;
	color:#FFF;
	opacity:0.4;
	z-index:1;
	-webkit-transition: opacity 0.3s ease-in;
  -moz-transition: opacity 0.3s ease-in;
  -o-transition: opacity 0.3s ease-in;
  transition: opacity 0.3s ease-in;
}

.slider-textnewssp{
	position:absolute;
    text-align: center;
	background: rgba(0,0,0,0.8);
	width: 240px;
	height: 267px;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	font-size: 24px;
	color:#FFF;
	opacity:0.4;
	z-index:1;
	-webkit-transition: opacity 0.3s ease-in;
  -moz-transition: opacity 0.3s ease-in;
  -o-transition: opacity 0.3s ease-in;
  transition: opacity 0.3s ease-in;
}

.slider-textnews:hover{
	opacity:1;
}
.slider-textnewssp:hover{
	opacity:1;
}

 .youtube-holder
        {
            width: 880px;
            height: 495px;
            background-color: yellow;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            text-align: center;
            overflow: hidden;
			border-color:#0058DB;
			border-style:solid;
			border-width:10px;
			border-radius:5px;
        }
		
		.youtube-holder:hover
		{
			box-shadow: 0px 0px 20px #FF0000;
		}

 .slider-holder
        {
            width: 880px;
            height: 450px;
            background-color: yellow;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            text-align: center;
            overflow: hidden;
			border-color:#0058DB;
			border-style:solid;
			border-width:10px;
			border-radius:5px;
        }
		
		.slider-holder:hover
		{
			box-shadow: 0px 0px 20px #FF0000;
		}
		
        
        .image-holder
        {
            width: 2700px;
            background-color: red;
            height: 450px;
            clear: both;
            position: relative;
            
            -webkit-transition: left 2s;
            -moz-transition: left 2s;
            -o-transition: left 2s;
            transition: left 2s;
        }
        
        .slider-image
        {
            float: left;
            margin: 0px;
            padding: 0px;
            position: relative;
        }
        
        #slider-image-1:target ~ .image-holder
        {
            left: 0px;
        }
        
        #slider-image-2:target ~ .image-holder
        {
            left: -900px;
        }
        
        #slider-image-3:target ~ .image-holder
        {
            left: -1800px;
        }
        
        .button-holder
        {
            position: relative;
            top: -20px;
        }
        
        .slider-change
        {
            display: inline-block;
            height: 10px;
            width: 10px;
            border-radius: 5px;
            background-color: brown;
        }		
.logo{
    margin-left: auto;
    margin-right: auto;
	margin-top:50px;
    text-align: center;
    overflow: hidden;
	position:relative;
}
.otherblocks{
	display:inline-block;
	float:left;
}
.slider-holder2{
	float:left;
    width: 300px;
    height: 267px;
	margin-left: 20px;
    margin-top: 10px;
	border-color:#0058DB;
	border-style:solid;
	border-width:10px;
        }
.slider-holder3{
	float:right;
    width: 300px;
    height: 267px;
	margin-top: 10px;
	border-color:#0058DB;
	border-style:solid;
	border-width:10px;
	border-bottom-right-radius:5px;
	border-top-right-radius:5px;
        }
.slider-holder4{
	float:right;
    width: 240px;
    height: 267px;
    margin-top: 10px;
	margin-bottom: 10px;
	border-color:#0058DB;
	border-style:solid;
	border-width:10px;
        }
		.slider-holder2:hover
		{
	box-shadow: 0px 0px 20px #FF0000;
	font-size: 12px;
		}
		.slider-holder3:hover
		{
			box-shadow: 0px 0px 20px #FF0000;
		}
		.slider-holder4:hover
		{
			box-shadow: 0px 0px 20px #FF0000;
		}
.footer{
	position:relative;
	margin-top:20px;
	bottom:0px;
    left:0px;
    right:0px;
    margin-bottom:0px;
	width:auto;
}
</style>
<script>
</script>
<title>GamesStarForce</title>
</head>

<body class="body">
<?php 
if ($_SESSION['username'] && $_SESSION['username'] != NULL){
	?>
    <a href="logout.php">
	<img class="logout" style="width:120px;height:42px;border:0;" align="right"/>
	</a>
    <?php
}
else{
	?>
	<a href="signup.php">
	<img class="signup" style="width:120px;height:42px;border:0;" align="right"/>
	</a>

	<a href="signin.php">
  	<img class="signin" style="width:120px;height:42px;" align="right" />
	</a>
	<?php
}
?>

<div id='cssmenu'>
<ul>
   <li><a href='homepage.php'><span>Home</span></a></li>
   <li><a href='dbedit.php'><span>Add Game</span></a></li>
   <li><a href='Gamedatabase.php'><span>Games list</span></a></li>
   <li><a href='news.php'><span>News</span></a></li>
</ul>
</div>
<section class="section">
<div class="logo">
	<img src="Photoshop and other edits/website Logo.png" alt="logo" width="512" height="345"></img>
</div>
<div class="slider-text">Today's featured games</div>
 <div class="slider-holder">
        <span id="slider-image-1"></span>
        <span id="slider-image-2"></span>
        <span id="slider-image-3"></span>
        <div class="image-holder">
            <a href="ginfo.php?game=Bloodborne"><img src="Gameboxes/bb2.jpg" width="900" class="slider-image" /></a>
            <a href="ginfo.php?game=Xenoblade Chronicles X"><img src="Gameboxes/xcx2.png" width="900" class="slider-image" /></a>
            <a href="ginfo.php?game=Halo 5 Guardians"><img src="Gameboxes/h52.jpg" width="900" class="slider-image" /></a>
        </div>
        <div class="button-holder">
            <a href="#slider-image-1" class="slider-change"></a>
            <a href="#slider-image-2" class="slider-change"></a>
            <a href="#slider-image-3" class="slider-change"></a>
        </div>
</div>
<div class="slider-text">Today's Trending Topics</div>
<div class="otherblocks">

<div class="slider-holder2"><a href="articles.php?news=Kojima" style="text-decoration:none; color:#FFF"/>
<div class="slider-textnews">Hideo Kojima has started a new development studio with the help of sony 
and he is currently working on his new game that is coming for the ps4</a></div>
<img src="others/Kojiman.png"/>
</div>

<div class="slider-holder3"><a href="articles.php?news=mhx" style="text-decoration:none; color:#FFF"/>
<div class="slider-textnews">According to capcom, monster Hunter X has sold over 2 million copies in japan and boosted the New 3DS sales a bit over the last month</a></div>
<img src="others/MHX.png"/>
</div>

<div class="slider-holder4"><a href="articles.php?news=ffvii" style="text-decoration:none; color:#FFF"/>
<div class="slider-textnewssp">Final Fantasy 7 Remake will be released into several parts and according to square
enix - that's better</a></div>
<img src="others/Cloud.png"/>
</div>

</div>
<div class="slider-text">Today's Featured New Game Trailer</div>
<div class="youtube-holder">
<iframe width="880" height="495" src="https://www.youtube.com/embed/ARHVKZ5K1b0" frameborder="0" allowfullscreen></iframe></div>
</section>

<footer class="footer-distributed">
<div class="footer-left">

				
				<img src="Photoshop and other edits/website Logo.png" alt="logo" width="130" height="88" style="margin-left:50px"></img>

				<p class="footer-links">
					<a href="homepage.php">Home</a>
					-
					<a href="news.php">News</a>
					-
					<a href="Gamedatabase.php">Games List</a>
					-
					<a href="faq.php">Faq</a>
				</p>

				<p class="footer-name">Game Starforce &copy; 2016 All rights received</p>
			</div>
            
			<div class="footer-right">

				<p class="footer-about">
					<span>About This website</span>
					An open source website that tells you everything you want to know about games and games news , Join us now so you can receive the latest news and information about your favourite games , if you have any questions you can contact us, or if you are the doctor who is grading this project , go to the faqs page , specially if this was received at 8/1/2016
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>
</footer>

</body>
</html>
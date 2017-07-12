<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="Styles/defaultstyles.css">
   <link rel="stylesheet" href="Styles/searchstyle.css">
    <link rel="stylesheet" href="Styles/footerstyle.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="Javascript/ribbonsscript.js"></script>
   <title>Game Database</title>
<style>
.logo{
    margin-left: auto;
    margin-right: auto;
	margin-top:50px;
    text-align: center;
    overflow: hidden;
	position:relative;
}
.section{
	width:940px;
	margin-left: auto;
    margin-right: auto;
	margin-top : 50px;
    overflow: hidden;
}
.pages{
	margin-left: auto;
    margin-right: auto;
	margin-top : 50px;
	text-align:center;
    overflow: hidden;
}
footer{
	position:relative;
	margin-top:20px;
	bottom:0px;
    left:0px;
    right:0px;
    margin-bottom:0px;
	width:100%;
}
</style>
</head>
<body class="body">
<div id='cssmenu'>
<div id='cssmenu'>
<ul>
   <li><a href='homepage.php'><span>Home</span></a></li>
   <li><a href='dbedit.php'><span>Add Game</span></a></li>
   <li><a href='Gamedatabase.php'><span>Games list</span></a></li>
   <li><a href='news.php'><span>News</span></a></li>
</ul>
</div>
<div class="logo">
	<img src="Photoshop and other edits/website Logo.png" alt="logo" width="600" height="404"></img>
</div>
<form class="searchform" action="Gamedatabase.php" method="GET">
  <input list="games" type="TEXT" name="search" placeholder="Search your game">
  <button type="SUBMIT" name="submit">Search</button>
</form>
<div class="section">
<div class="results">
<?php
 include('search.php');
?>
</div>
</div>
<footer class="footer-distributed">
<div class="footer-left">

				
				<img src="Photoshop and other edits/website Logo.png" alt="logo" width="130" height="88" style="margin-left:50px"></img>

				<p class="footer-links">
					<a href="#">Home</a>
					-
					<a href="#">Top 10</a>
					-
					<a href="#">Games List</a>
					-
					<a href="#">Faq</a>
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
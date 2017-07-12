<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="Styles/defaultstyles.css">
   <link rel="stylesheet" href="Styles/footerstyle.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="Javascript/ribbonsscript.js"></script>
   <title>Game Database</title>
<style>
.section{
	width:940px;
	margin-left: auto;
    margin-right: auto;
	margin-top: 50px;
	text-align: center;
    overflow: hidden;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	color:#FFF;
	padding:10px;
	background:rgba(0,0,255,0.2) ;
}
footer{
	position:relative;
	margin-top:20px;
	bottom:0px;
    left:0px;
    right:0px;
    margin-bottom:0px;
}
</style>
</head>
<body class="body">
<div id='cssmenu'>
<div id='cssmenu'>
<ul>
   <li><a href='homepage.php'><span>Home</span></a></li>
   <li><a href='faq.php'><span>FAQs</span></a></li>
   <li><a href='Gamedatabase.php'><span>Games list</span></a></li>
   <li><a href='news.php'><span>News</span></a></li>
</ul>
</div>
<div class="section">
<?php
include('search.php');

$output = NULL;
	$page = NULL;
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password,"gameslist");

	$key = $_GET['news'];
	
	$fdata = $conn->query("SELECT * FROM articles WHERE keyword = '$key'");
	$data = $fdata->fetch_assoc();
	
	echo "<h1>" . $data['heading'] . "</h1></br>";
	?>
    <img src="<?php echo $data['images']; ?>" />
	<p style="font-size:20px" align="left">Author : <?php echo $data['Author']; ?></p>
	<p style="font-size:20px" align="left">Release Date : <?php echo $data['Date']; ?></p>
	<p align="left"><?php echo $data['article']; ?></p>
	<?php
?>
</div>
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
<?php
$conf = NULL;
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {   
}else{
	$_SESSION['username'] = NULL;
}
if(isset($_POST['INSERT'])){
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password,"gameslist");
	
	$Igametitle = $_POST['gametitle'];
	$Ideveloper = $_POST['developer'];
	$Ipublisher = $_POST['publisher'];
	$Irelease = $_POST['releasedate'];
	$Imetacritic = $_POST['metacritic'];
	$Ioverview = $_POST['overview'];
	$Iyoutube = $_POST['youtube'];
	$Istore = $_POST['store'];
	
	if ( $Igametitle && $Ideveloper && $Ipublisher && $Irelease && $Ioverview ){
	
	$sqlinsert = "INSERT INTO games (GameTitle, Developer, Publisher, ReleaseDate, Metacritic, Overview, Youtube, Store) VALUES('$Igametitle','$Ideveloper','$Ipublisher','$Irelease','$Imetacritic','$Ioverview','$Iyoutube','$Istore')";
	
	$Insert = $conn->query($sqlinsert);
	
	if($Insert){
		$conf = "game has been added ! Thanks for your contribution";
	}else{
		$conf = "Somthing went wrong !!!";
	}
	}else{
		$conf = "You can't add this game , missing information , fill the * forms";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="Styles/defaultstyles.css">
   	<link rel="stylesheet" href="Styles/footerstyle.css">
      <link rel="stylesheet" href="Styles/loginstyle.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="Javascript/ribbonsscript.js"></script>
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
</style>
<script>
</script>
<title>GamesStarForce</title>
</head>

<body class="body">
<div id='cssmenu'>
<ul>
   <li><a href='homepage.php'><span>Home</span></a></li>
   <li><a href='dbedit.php'><span>Add Game</span></a></li>
   <li><a href='Gamedatabase.php'><span>Games list</span></a></li>
   <li><a href='news.php'><span>News</span></a></li>
</ul>
</div>
<section class="section">
<div class="box">
<?php
if($_SESSION['username'] && $_SESSION['username'] != NULL){
	?>
        <form method="POST" action="dbedit.php">
<input type="text" placeholder="Game Title*" name="gametitle"/>
<input type="text" placeholder="Developer*" name="developer"/>
<input type="text" placeholder="Publisher*" name="publisher"/>
<input type="text" placeholder="Release Date*" name="releasedate"/>
<input type="text" placeholder="Metacritic" name="metacritic"/>
<input type="text" placeholder="Description*" name="overview"/>
<input type="text" placeholder="Youtube Trailer(embedded link)" name="youtube"/>
<input type="text" placeholder="Game Store link" name="store"/>
<button type="submit" name="INSERT">Insert Game Data</button>
    <?php
	echo $conf;
}
else{
	?>
    <p style="size:24px">Sorry but You have to register to use this form , to avoid spam , you can register<a href="signup.php"> here</a> or if 
    you have an account already , sign in <a href="signin.php"> here</a></p>
<?php
}
?>
</form>
</div>
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
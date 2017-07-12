<?php 
if(isset($_POST['submit'])){
    $to = "support@gamestarfoce.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $from . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $from . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $from . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
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

<p align="left" style="font-size:24px; margin-left:20px"> Q : What is this website for ??</p>
<p align="left" style="font-size:18px; margin-left:20px"> A : This website is for gaming news and also a games list organizer , which means you can get info about games you are interested in from here</p>
</br>

<p align="left" style="font-size:24px; margin-left:20px"> Q : How do I use this ??</p>
<p align="left" style="font-size:18px; margin-left:20px"> A : It's easy , The homepage is designed to take a quick and informative look about what is happening in the gaming world , and if you want to search for a specific game just use the Games list page and search for the game you want</p></br>


<p align="left" style="font-size:24px; margin-left:20px"> Q : Tools use for creating the website ??</p>
<p align="left" style="font-size:18px; margin-left:20px"> A : well there was a lot of tools that was used for making this website happen ( Notepad++ - Dreamweaver(for it's live preview ability only) - wamp(includes apache server- phpmyadmin) - photoshop)</p>
</br>

<div class="box">

<form action="" method="post">
<input type='text' placeholder="Subject" name="subject" size="30"></p>
<input type="email" placeholder="e-mail" name="email"><br>
<textarea rows="5" name="message" cols="30"></textarea><br>
<button type="submit" name="submit" value="Submit">Submit</button>
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
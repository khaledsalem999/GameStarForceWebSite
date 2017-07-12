<?php
$conf = NULL;
if (isset($_POST['submit']))
{
$submit = $_POST['submit'];
$username= strtolower(strip_tags($_POST['username']));
$password= strip_tags($_POST['password']);
$password_again= strip_tags($_POST['password_again']);
$email= strip_tags($_POST['email']);

if($submit)
{// Create connection
$conn = new mysqli('localhost', 'root', '', 'account');
// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$namecheck = mysqli_query($conn," SELECT username FROM user WHERE username='$username'");
$count = mysqli_num_rows($namecheck);
if ($count !=0)
	
	{die ( "user name already taken");
		
	}
	
	
if ( $username && $password && $password_again && $email)
{
	    
if ( $password==$password_again)
{	

if ( strlen($username)>25 )
{
	$conf = "Long username !!";
}	
	 
else 
{

if (strlen($password)>25|| strlen($password)<4)
{
	
	$conf = "password too short";
	
	  }
else 
	{
		 $password = md5($password);
		 $password_again = md5($password_again);
		
	

$sql = "INSERT INTO user VALUES('', '$username','$password','$email')";
if ($conn->query($sql) === TRUE) {
    $conf = "you have signed up";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}}
		
			 
		}
		}
	 else 
	 $conf = "Password Doesn't match !!";
 
	
	    }
	
	else 
		
	$conf = "please fill in all the fields !!";
	
       
	   }
	   }


?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="Styles/defaultstyles.css">
   <link rel="stylesheet" href="Styles/loginstyle.css">
    <link rel="stylesheet" href="Styles/footerstyle.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="Javascript/ribbonsscript.js"></script>
<style>
.box{	
width:400px;
  height:590px;
	margin-left: auto;
    margin-right: auto;
	margin-top: 50px;
	text-align: center;
    overflow: hidden;
	background:rgba(0,0,255,0.2) ;
  font-family:Helvetica;
  color:#fff;
  background:rgba(0,0,255,0.2);
  padding:30px 0px;
}
.logo{
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    overflow: hidden;
	position:relative;
}
.section{
	width:940px;
	margin-left: auto;
    margin-right: auto;
	text-align: center;
    overflow: hidden;
	background:rgba(0,0,255,0.2)
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
    <div class="box">
    <div class="logo">
	<img src="Photoshop and other edits/website Logo.png" alt="logo" width="250" height="168"></img>
</div>
<form action='signup.php' method='POST'>
      <input type="text" placeholder="Username" name="username"/>
      <input type="text" placeholder="E-mail" name="email"/>
      <input type="password" placeholder="Password" name="password"/>
      <input type="password" placeholder="Re-Type password" name="password_again"/>
      <button type='submit' name = 'submit' value='Register' >Sign up</button>
      <?php echo $conf; ?>
      <p>Already a member? <span><a href="signin.php">Log In</a></span></p>
      </form>
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
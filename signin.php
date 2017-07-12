<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="Styles/defaultstyles.css">
   <link rel="stylesheet" href="Styles/loginstyle.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="Javascript/ribbonsscript.js"></script>
<style>
.box{	
width:400px;
  height:400px;
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
	background:rgba(0,0,255,0.2);
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
<form name="Signin" action="login.php" method="POST" onSubmit="return validateForm()">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <button type="submit" value="Login">Login</button>	
      <p>Not a member? <span><a href="signup.php">Sign Up</span></p>
</form>
</div>
</body>
</html>
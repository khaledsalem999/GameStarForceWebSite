<?php
 session_start();
   $username = $_POST['username'];
        $password =$_POST['password'];
 
    if($username &&$password )

	{ $conncet = mysqli_connect("localhost" ,"root" , "", "account" )or die ("coudnt connect");
		mysqli_select_db($conncet,"account") or die ("could find db");
		$query = mysqli_query($conncet," SELECT * FROM user WHERE username = '$username' ");
		$numrows = mysqli_num_rows($query );
	if ($numrows!=0){ 
	
	while ( $row = mysqli_fetch_assoc($query))
		{	
			$dbusername = $row ['username'];
			$dbpassword = $row ['password'];
		}
	
	if ( $username == $dbusername && md5($password) == $dbpassword)
	{    echo "<script type='text/javascript'>alert('you logged in successfully!')  <a href='homepage.php'>click</a></script>";
		
		?>
		<meta http-equiv="refresh" content="N; homepage.php">
		<?php
        $_SESSION['username']=$dbusername;
		
	}
	else 
		 echo  "incorrect password";
	
}
else 
die( "That user doesn't exist");
    }
	
	else 
		 echo  "please enter username and password";
?>
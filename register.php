<?php

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
	
	{$conf = "user name already taken";
		
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
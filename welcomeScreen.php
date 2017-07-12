<?php

session_start();
if ( $_SESSION['username'])
	
echo "welcome, ".$_SESSION['username']."!<br><a href='logout.php'>Logout</a>";
else 
	die ("you must be logged in ");

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="N; homepage.php">
</head>
</html>
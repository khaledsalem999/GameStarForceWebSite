<?php
	$output = null;
	$guessing = null;

if(isset($_GET['submit'])){
	$output = NULL;
	$page = NULL;
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password,"gameslist");
	
	$page = isset($_GET['submit']) ? $conn->real_escape_string($_GET['submit']) : 0;
	
	if($page=="" || $page=="1"){
		$page1=0;
	}
	else
	{
		$page1=($page*10)-10;
	}
	
	$search = $conn->real_escape_string($_GET['search']);
	
	//Game Database Query
	$result = $conn->query("SELECT * FROM games WHERE GameTitle LIKE '$search%' limit $page1,10");
	
	if($result->num_rows > 0){
		
		echo "<table width=100%>
		<tr>
		<th>Game Title</th>
		<th>Developer</th>
		<th>Release Date</th>
		</tr>";
		
		while($rows = $result->fetch_assoc())
		{
			?>
			<tr>
			<td><a href="ginfo.php?game=<?php echo $rows['GameTitle'] ; ?>" style="text-decoration:none; color:#000"> <?php echo $rows['GameTitle'] ; ?></a></td>
			<td> <?php echo $rows['Developer'] ; ?> </td>
			<td> <?php echo $rows['ReleaseDate'] ; ?>  </td>
			</tr>
			<?php
		}
		
		echo "</table>";
		
		$result2 = $conn->query("SELECT * FROM games WHERE GameTitle LIKE '$search%'");
		
		$count = $result2->num_rows;	
		$countn = $count/10;
		$countn = ceil($countn);
		
		echo "<div class=pages>";
		
		for($b=1;$b<=$countn;$b++){
			?><a href="Gamedatabase.php?search=<?php echo $conn->real_escape_string($_GET['search']); ?>&submit=<?php echo $b; ?>" style="text-decoration:none"><?php echo $b." "; ?></a> <?php
		}
		
		echo "</div>";
		
	}else{
		$output = "No results";
	}
	
	echo $output;
}
?>
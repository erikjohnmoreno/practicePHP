<?php 
	include 'connect_to_database.php';
	$sql = "SELECT * FROM accounts";
	$result = mysql_query($sql);
	$username = $_POST['username'];
	$password = $_POST['password'];

	
	$info = mysql_fetch_assoc($result);

	if ($info['username']==$username) {
		echo "thats nice";
	}

	mysql_close($conn);

 ?>
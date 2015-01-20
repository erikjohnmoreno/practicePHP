<!DOCTYPE html>
<html>
<head>
	<title>Display Account Table</title>
</head>
<body>
		<?php 
			include "connect_to_database.php";
			$username = $_POST['username'];
			$password = $_POST['password'];
			echo $username.$password;
			
		 ?>

</body>
</html>
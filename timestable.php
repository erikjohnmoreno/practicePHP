<!DOCTYPE html>
<html>
<head>
	<title>A Time Table Programme</title>
</head>
<body>
	<form action="timestable.php" method="post">
		Start: <input type="text" name="start">
		End: <input type="text" name="end">
		Multiplier: <input type="text" name="multiplier"><br>
		<input type="submit" name="multiply" value="Do Times Table">
	</form>
</body>
</html>


<?php 
	if (isset($_POST['multiply'])) {

		$start = $_POST['start'];
		$end = $_POST['end'];
		$multiplier = $_POST['multiplier'];

		for ($i= $start; $i <= $end ; $i++) { 
			$product = $i * $multiplier;
			echo "$i multiplied by $multiplier = $product<br>";
		}



	}
 ?>
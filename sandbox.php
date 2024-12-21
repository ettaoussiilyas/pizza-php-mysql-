<?php 

	if(isset($_POST['submit'])){

		setcookie('gender', $_POST['gender'] , time() + 86400);

		session_start();

		$_SESSION['name'] = $_POST['name'];


		header('Location: index.php');
	}

	//spaceship operator
	//$result = 5 <=> 6;
	//$result = 5 <=> 4;
	// $result = 5 <=> 5;
	//$result = 'shaun' <=> 'yoshi';

	//echo $result;





?>

<!DOCTYPE html>
<html>
<head>
	<title>php tuts</title>
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="name">
		<select name="gender">
			<option value="Mr">Male</option>
			<option value="M.">Female</option>
		</select>
		<input type="submit" name="submit" value="submit">
		
	</form>

</body>
</html>
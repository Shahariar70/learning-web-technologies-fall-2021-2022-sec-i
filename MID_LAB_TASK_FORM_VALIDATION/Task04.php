<?php 
	
	if(isset($_REQUEST['submit']))
	{
		$gender = $_REQUEST['mygender'];
		if($gender != "")
		{
			echo $gender;
		}
		else
		{
			echo "Select atleast a gender";
		}
	}
?>

<html>
<head>
	<title>Gender</title>
</head>
<body>
	<form method="post">
		Gender: <input type="hidden" name="mygender" value="" />
		<input type="radio" name="mygender" value="Male">Male
		<input type="radio" name="mygender" value="Female">Female
		<input type="radio" name="mygender" value="Other">Other
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>
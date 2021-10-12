<?php 
	
	if(isset($_REQUEST['submit']))
	{
		$dob = $_REQUEST['mydate'];
		if($dob != "")
		{
			if (preg_match("/^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$/", $_POST["date"]) === 0)
			{
				echo $dob;
			}
			else
			{
				echo "Invalid";
			}
		}
		else
		{
			echo "Null value";
		}
	}
?>


<html>
<head>
	<title>Date Of Birth</title>
</head>
<body>
	<form method="post">
		Date Of Birth: <input type="date" name="mydate" value=""/>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>
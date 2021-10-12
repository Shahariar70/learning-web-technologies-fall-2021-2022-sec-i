<?php 
	
	if(isset($_REQUEST['submit']))
	{
		$dob = $_REQUEST['mydate'];
		if($dob != "")
		{
			echo $dob;
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
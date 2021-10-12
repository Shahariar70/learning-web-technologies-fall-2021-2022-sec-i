<?php 

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myname'];
		if($name != "")
		{
			if ((preg_match ("/^[a-zA-z]*$/", $name) ))
			{
				echo $name;
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
	<title> Name </title>
</head>
<body>
	<form method="post" >
		Name: <input type="text" name="myname" value=""/>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
<?php 
	
	if(isset($_REQUEST['myemail']))
	{
		$email = $_REQUEST['myemail'];
		if($email != "")
		{
			if (filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				echo $email;
			}
			else
			{
				echo "Invalid email";
			}
		}
		else
		{
			echo "Empty";
		}
	}
?>


<html>
<head>
	<title> Email </title>
</head>
<body>
	<form method="post">
		Email : <input type="email" name="myemail" value=""/>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>
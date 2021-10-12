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
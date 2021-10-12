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
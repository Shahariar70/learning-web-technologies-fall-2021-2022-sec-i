<?php 
	
	if(isset($_REQUEST['submit']))
	{
		$bg = $_REQUEST['mybg'];
		if($bg != "")
		{
			echo $bg;
		}
		else
		{
			echo "Select atleast one blood group";
		}
	}
?>

<html>
<head>
	<title>Gender</title>
</head>
<body>
	<form method="post">
		Blood Group: <input type="hidden" name="mybg" value="" />
		<select>
			<option value="A(+)ve">A(+)ve</option>
			<option value="A(-)ve">A(-)ve</option>
			<option value="B(+)ve">B(+)ve</option>
			<option value="B(-)ve">B(-)ve</option>
			<option value="AB(+)ve">AB(+)ve</option>
			<option value="AB(-)ve">AB(-)ve</option>
			<option value="O(+)ve">O(+)ve</option>
			<option value="O(-)ve">O(-)ve</option>
			<input type="submit" name="submit" value="submit">
		</select>
	</form>
</body>
</html>
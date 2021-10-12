<?php 
	
	if(isset($_REQUEST['submit']))
	{
		$degree = $_REQUEST['mydegree'];
		if($degree != "")
		{
			echo $degree;
		}
		else
		{
			echo "Select atleast a degree";
		}
	}
?>

<html>
<head>
	<title>Degree</title>
</head>
<body>
	<form method="post">
		Degree: <input type="hidden" name="mydegree" value="" />
		<input type="checkbox" name="mydegree" value="SSC">SSC
		<input type="checkbox" name="mydegree" value="HSC">HSC
		<input type="checkbox" name="mydegree" value="BSc">BSc
		<input type="checkbox" name="mydegree" value="MSc">MSc
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>
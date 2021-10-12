<?php

function find ($number)
{
	if ($number%2 == 0)
	{
		echo "It's an Even";
	}
	else
	{
		echo "It's an Odd";
	}
}

$number = 57;
find($number);

?>
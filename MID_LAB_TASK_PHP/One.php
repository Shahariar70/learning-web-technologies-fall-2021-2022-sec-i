<?php

function area ($length, $width)
{
	$area = $length * $width;
	return $area;
}

function perimeter ($length, $width)
{
	$perimeter = 2 * ($length + $width);
	return $perimeter;
}

$length = 2;
$width = 3;

echo "Area: ";
echo (area($length, $width));
echo "\n";
echo "Perimeter: ";
echo (perimeter ($length, $width));

?>
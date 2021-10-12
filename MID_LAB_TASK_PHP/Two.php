<?php

function calculate ($amount)
{
	$calculate = $amount * (15 / 100);
	return $calculate;
}

$amount = 1000;


echo "Vat: ";
echo (calculate ($amount));

?>
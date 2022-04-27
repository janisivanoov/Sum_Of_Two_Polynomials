<?php

function add($A, $B, $m, $n)
{
	$size = max($m, $n);
	$sum = array_fill(0, $size, 0);
	
	for ($i = 0; $i < $m; $i++)
		$sum[$i] = $A[$i];
	
	for ($i = 0; $i < $n; $i++)
		$sum[$i] += $B[$i];
	
	return $sum;
}

function printPoly($poly, $n)
{
	for ($i = 0; $i < $n; $i++)
	{
		echo $poly[$i];
		if ($i != 0)
			echo "x^" . $i;
		if ($i != $n - 1)
		echo " + ";
	}
}

$A = array(5, 0, 10, 6);

$B = array(1, 2, 4);
$m = count($A);
$n = count($B);

echo "First polynomial is \n";
printPoly($A, $m);
echo "\nSecond polynomial is \n";
printPoly($B, $n);

$sum = add($A, $B, $m, $n);
$size = max($m, $n);

echo "\nsum polynomial is \n";
printPoly($sum, $size);

?>

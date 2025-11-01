<?php
// Find the largest among three numbers
$a = 10;
$b = 25;
$c = 15;

if ($a >= $b && $a >= $c)
    $largest = $a;
elseif ($b >= $a && $b >= $c)
    $largest = $b;
else
    $largest = $c;

echo "Largest number is $largest";
?>

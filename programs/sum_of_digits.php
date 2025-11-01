<?php
// Find sum of digits of a number
$num = 12345;
$sum = 0;
$number = $num;

while ($num > 0) {
    $digit = $num % 10;
    $sum += $digit;
    $num = (int)($num / 10);
}

echo "Sum of digits of $number is $sum";
?>

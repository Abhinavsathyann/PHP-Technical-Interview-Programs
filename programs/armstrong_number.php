<?php
// Check Armstrong number
$num = 153;
$sum = 0;
$temp = $num;

while ($temp != 0) {
    $digit = $temp % 10;
    $sum += $digit * $digit * $digit;
    $temp = (int)($temp / 10);
}

if ($sum == $num)
    echo "$num is an Armstrong number";
else
    echo "$num is not an Armstrong number";
?>

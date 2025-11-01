<?php
// Check if a number is prime
$num = 13;
$flag = 0;

for ($i = 2; $i <= $num / 2; $i++) {
    if ($num % $i == 0) {
        $flag = 1;
        break;
    }
}

if ($flag == 0)
    echo "$num is a Prime number";
else
    echo "$num is not a Prime number";
?>

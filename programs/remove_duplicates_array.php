<?php
// Remove duplicate elements from array
$arr = [1, 2, 2, 3, 4, 4, 5];
$unique = array_unique($arr);
echo "Array after removing duplicates: ";
print_r($unique);
?>

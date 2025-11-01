<?php
// Count vowels in a string
$str = "Hello World";
$vowels = 0;
$str = strtolower($str);

for ($i = 0; $i < strlen($str); $i++) {
    if (in_array($str[$i], ['a', 'e', 'i', 'o', 'u'])) {
        $vowels++;
    }
}

echo "Total vowels: $vowels";
?>

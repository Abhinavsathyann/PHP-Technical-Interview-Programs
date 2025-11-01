<?php
// Check if a string is palindrome
$string = "madam";
if ($string == strrev($string)) {
    echo "$string is a Palindrome";
} else {
    echo "$string is not a Palindrome";
}
?>

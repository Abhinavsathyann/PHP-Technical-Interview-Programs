<?php
// Simple calculator program
$a = 10;
$b = 5;
$op = '+';

switch ($op) {
    case '+': echo "Result: " . ($a + $b); break;
    case '-': echo "Result: " . ($a - $b); break;
    case '*': echo "Result: " . ($a * $b); break;
    case '/': echo "Result: " . ($b != 0 ? $a / $b : "Division by zero error"); break;
    default: echo "Invalid operator";
}
?>

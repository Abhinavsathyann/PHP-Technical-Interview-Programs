<?php
// File read and write operation
$file = "sample.txt";
$content = "Hello, this is a file write example.";

file_put_contents($file, $content);
echo "File written successfully.\n";

echo "File Content:\n";
echo file_get_contents($file);
?>

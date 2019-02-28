<?php

$file = "FiletoGetPut.txt";

file_put_contents($file, "Hi");

$current = file_get_contents($file);
print_r($current);

$current .= "John Smith\n";

file_put_contents($file,$current);

print_r($current);

?>
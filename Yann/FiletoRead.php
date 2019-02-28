<?php

echo getcwd() . "\n";

$filename = "FiletoRead.txt";

echo "<br><br>filesize:" .filesize($filename)."\n";
echo "<br><br>filename: $filename";

$handle= fopen($filename, "r");
$contents = fread($handle, filesize($filename));
print_r($contents);

$handle2= fopen($filename, "r");
$contents2= fread($handle2, 10);
echo "<br><br>".$contents2;


$handle= fopen($filename, "r");
for ($i =0; $i < filesize($filename); $i++) {
    echo "<forloop:>".fgetc($handle);
}
echo "<br><br>ftell:".ftell($handle)."<br>";
rewind($handle);

$handle= fopen($filename, "r");

while (false !== ($char = fgets($handle))) {

    echo"<br>$char";
}




?>
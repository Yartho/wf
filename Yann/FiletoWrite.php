<?php

$FiletoWrite = "FiletoWrite.txt";

$fp = fopen($FiletoWrite, 'w');
fwrite($fp, '1111111111');
fwrite($fp, '23');
fclose($fp);

?>
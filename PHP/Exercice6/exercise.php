<?php
 $filenameOriginal = "file.txt";
 $filenameToWrite = "fileTemp.txt";

 copy ($filenameOriginal, $filenameToWrite);

 $fileContent = file_get_contents($filenameToWrite);

 echo "$fileContent";

 echo "<br> Halfway :".floor(strlen($fileContent)/2);

 $secondPart = substr($fileContent, floor(strlen($fileContent)/2));
 $firstPart = substr($fileContent,0,strlen($secondPart) -1);

 echo "<br>firstPart:<br>".$firstPart;

 echo "<br>secondPart:<br>".$secondPart;

 echo "<br>secondPartReversed:<br>".strrev($secondPart);

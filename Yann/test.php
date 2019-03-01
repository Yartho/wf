<?php

function AddStringToArray ($ArrayIn, $StringIn){
    array_push($ArrayIn,$StringIn);

    return $ArrayIn;


}

function AddStringToArrayExtra ($ArrayIn, $StringIn){
$ArrayIn["newArray"] = $StringIn;
    return $ArrayIn;





}


$MyArray = ['John','Mary'];




//print_r (AddStringToArray ($MyArray, "Joe"));
//$MyArray = AddStringToArray($MyArray, 'Hello');
//print_r ($MyArray);

function FindInArrayAndChange ($ArrayIn, $StringToFind,$NewValue){
  $key =array_search($StringToFind,$ArrayIn );
  $ArrayIn[$key] = $NewValue;

  return $ArrayIn;




};

$MyArray = ['John','Mary'];

print_r(FindInArrayAndCHange ($MyArray, 'John','xxx'));
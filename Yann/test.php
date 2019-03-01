<?php

function AddStringToArray ($ArrayIn, $StringIn){
    array_push($ArrayIn,$StringIn);

    return $ArrayIn;


}

 function AddStringToArrayExtra ($ArrayIn, $StringIn){




 }



 $MyArray = ['John','Mary'];

print_r (AddStringToArray ($MyArray, "Joe"));
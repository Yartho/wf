<?php

$arrayTest = ['1.10', 12.4 , 1.13];
print_r($arrayTest);

for ($a =0; $a < 5; $a++){

echo "<br> a: ".$a;};

for ($i = 0 ;$i < count ($arrayTest); $i++) {

    echo "<br> i:" .$i;
    echo "<br> arrayTest :" .$arrayTest[$i] = "new value";

}

print_r($arrayTest);

array_push($arrayTest, "New Values from array_push");
print_r($arrayTest);

function AddToArray() {
    array_push ($arrayTest);
}
<?php

$input;
$winner;
$BrotherA =0;
$BrotherB = 0;
foreach ($input as $round) { if( $round [0] > $round [1]) { $BrotherA++;}
    else {
        if ($round [0] < $round[1]) {
            $BrotherB++;
        };
    }
}

if ($BrotherA > $BrotherB){$winner = "A";}
else {$winner = "B";}

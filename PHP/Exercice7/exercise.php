<?php

function divide(int $value, int $by) : float {
    if ($by == 0) {
        throw new RuntimeException('Division by 0 is not allowed');
    }

    return (float) ($value/ $by);

};




      //  try {
     //       divide(10, 0);
       // } catch (RuntimeException $exception) {
         //   echo $exception->getMessage();
       // }
        function arrayDivide (array $baseArray, int $by ): array {
            $result = [];

            foreach ($baseArray as $base){
                    try {
                        $result[] = divide($base,$by);
                    }
                    catch (RuntimeException $exception) {
                        echo "<br>". $exception ->getMessage();
                        echo "<br> Using ".$base;
                        $result[] =$base;
                    }

            }

            return $result;
}

print_r (arrayDivide([16,5,6], 0));
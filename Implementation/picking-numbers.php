<?php

/*
 * Complete the 'pickingNumbers' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function pickingNumbers($a) {
    
    $sets = [];
    $size = sizeof($a);

    for($i = 0;$i < $size;$i++) {

        for($j = 0;$j < $size;$j++) {

            if($a[$i] - $a[$j] === 1 || $a[$i] - $a[$j] === 0) {
                $sets[$i][] = $a[$j];
            }
        }
    }
    return sizeof(max($sets));
}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = pickingNumbers($a);

fwrite($fptr, $result . "\n");

fclose($fptr);

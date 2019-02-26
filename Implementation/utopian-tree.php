<?php

// Complete the utopianTree function below.
function utopianTree($n) {
    
    for($i = $curHeight = 1; $i <= $n; $i++) {
            $curHeight += intval($i % 2) !== 0 ? $curHeight : 1; 
        }
    return $curHeight;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    $result = utopianTree($n);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);

?>

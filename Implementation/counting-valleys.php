<?php

    function countingValleys($n, $s) {

        $value = 0;
        $total = 0;

        for($i=0;$i<$n;$i++){
            switch($s[$i]){
                case 'U':
                    $value++;
                    break;
                case 'D':
                    $value--;
                    break;
            }
            if($value == 0 && $s[$i]=='U'){
                $total++;
            }
        }
        return $total;

    }

    $fptr = fopen(getenv("OUTPUT_PATH"), "w");

    $stdin = fopen("php://stdin", "r");

    fscanf($stdin, "%d\n", $n);

    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    $result = countingValleys($n, $s);

    fwrite($fptr, $result . "\n");

    fclose($stdin);
    fclose($fptr);

?>

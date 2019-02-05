<?php

    function pageCount($n, $p) {
    
    return min((int)($p/2), (int)($n/2) - (int)($p/2));
    
	}

    $fptr = fopen(getenv("OUTPUT_PATH"), "w");

    $stdin = fopen("php://stdin", "r");

    fscanf($stdin, "%d\n", $n);

    fscanf($stdin, "%d\n", $p);

    $result = pageCount($n, $p);

    fwrite($fptr, $result . "\n");

    fclose($stdin);
    fclose($fptr);
	
?>

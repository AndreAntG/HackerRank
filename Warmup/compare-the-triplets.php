<?php

/*
 *  * Complete the solve function below.
 *   */
function solve($a0, $a1, $a2, $b0, $b1, $b2) {
	    $aScore = 0;
	        $bScore = 0;

	        $aScore += ($a0 > $b0? 1:0) + ($a1 > $b1? 1:0) + ($a2 > $b2? 1:0);
		    $bScore += ($b0 > $a0? 1:0) + ($b1 > $a1? 1:0) + ($b2 > $a2? 1:0);
		    
		    $score = [];
		        array_push($score,$aScore,$bScore);
		        return $score;   

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $a0A1A2_temp);
$a0A1A2 = explode(' ', $a0A1A2_temp);

$a0 = intval($a0A1A2[0]);

$a1 = intval($a0A1A2[1]);

$a2 = intval($a0A1A2[2]);

fscanf($__fp, "%[^\n]", $b0B1B2_temp);
$b0B1B2 = explode(' ', $b0B1B2_temp);

$b0 = intval($b0B1B2[0]);

$b1 = intval($b0B1B2[1]);

$b2 = intval($b0B1B2[2]);

$result = solve($a0, $a1, $a2, $b0, $b1, $b2);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($__fp);
fclose($fptr);

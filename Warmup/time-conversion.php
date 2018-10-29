omplete the timeConversion function below.
 */
function timeConversion($s) {
    $siglas = substr($s, -2); 
    $time = explode(":", $s);
    
    if (($siglas == 'PM') && ($time[0] != '12')) {
        $time[0] += 12;  
    }
    if(($siglas == 'AM') && ($time [0] == '12')) {
            $time[0] = '00';
    }
    
    $time[2] = chop($time[2], $siglas);
    
    return implode(":", $time);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);

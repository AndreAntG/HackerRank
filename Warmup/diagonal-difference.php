omplete the diagonalDifference function below.
 */
function diagonalDifference($a) {
    $count = sizeof($a);
    $first = 0;
    $second = 0;

        for($x = 0; $x < $count; $x++) {
            $first += $a[$x][$x];
            $second += $a[$x][$count - $x -1];
        }
    
    return abs($first - $second);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d\n", $n);

$a == array();

for ($a_row_itr = 0; $a_row_itr < $n; $a_row_itr++) {
    fscanf($__fp, "%[^\n]", $a_temp);
    $a[] = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($a);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);


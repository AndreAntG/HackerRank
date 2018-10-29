
n migratoryBirds($n, $ar) {
    foreach($ar_ = array_count_values($ar) as $key => $value){
        $arr_key[] = $key;
        $arr_val[] = $value;
    }
        
    array_multisort($arr_val, SORT_DESC, $arr_key, SORT_ASC, $ar_);

    return $arr_key[0];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = migratoryBirds($n, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);


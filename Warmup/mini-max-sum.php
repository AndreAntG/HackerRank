omplete the miniMaxSum function below.
 */
function miniMaxSum($arr) {
    $size = count($arr);
    $sumMin = 0;
    $sumMax = 0;
    
    sort($arr);
    
    $ini = 0;
    $fim = $size - 1;
    
    for($i = 0; $i < $size; $i++){
        if ($i != $ini) {
            $sumMax += $arr[$i];
        }
        if ($i != $fim) {
            $sumMin += $arr[$i];
        }
        
    }
        echo $sumMin . ' ' . $sumMax;
}

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($__fp);


omplete the plusMinus function below.
 */
function plusMinus($arr) {
    $size = sizeof($arr);
    $negativo = 0;
    $zero = 0;
    $positivo = 0;
    
    for ($i = 0 ; $i < $size ; $i++) {
        
        if ($arr[$i] < 0) {
            
            $negativo++;
        
        } elseif ($arr[$i] == 0) {
            
            $zero++;
        } else {
            
            $positivo++;
        }
    }
    
    echo sprintf("%01.6f\n" , ($positivo / $size));
    echo sprintf("%01.6f\n" , ($negativo / $size));
    echo sprintf("%01.6f\n" , ($zero / $size));
    
    
    
}

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d\n", $n);

fscanf($__fp, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($__fp);

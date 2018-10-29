omplete the birthdayCakeCandles function below.
 */
function birthdayCakeCandles($n, $ar) {
    /*
 *      * Write your code here.
 *           */
    $max = $ar[0];
    $counts = [];
    foreach($ar as $a) {
      if(isset($counts[$a])) {
          $counts[$a]++;
      }else {
        $counts[$a] = 1;
      }
      
      if($a > $max) {
        $max = $a; 
      } 
    }
    return $counts[$max];
}



$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d\n", $n);

fscanf($__fp, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($n, $ar);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);

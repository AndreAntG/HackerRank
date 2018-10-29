omplete the countApplesAndOranges function below.
 */
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    $applesdown = 0;
    $orangesdown = 0;
    
    for ($i = 0; $i < count($apples); $i++) {
        if ((($a + $apples[$i]) >= $s) && ((( $a + $apples[$i]) <= $t))) {
            $applesdown++;
        }
        
    }
    for ($i = 0; $i <count($oranges); $i++) {
        if((($b + $oranges[$i]) <= $t) && ((($b + $oranges[$i]) >= $s))) {
            $orangesdown++;
        }              
    }
    echo $applesdown . "\n" . $orangesdown; 
}

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $st_temp);
$st = explode(' ', $st_temp);

$s = intval($st[0]);

$t = intval($st[1]);

fscanf($__fp, "%[^\n]", $ab_temp);
$ab = explode(' ', $ab_temp);

$a = intval($ab[0]);

$b = intval($ab[1]);

fscanf($__fp, "%[^\n]", $mn_temp);
$mn = explode(' ', $mn_temp);

$m = intval($mn[0]);

$n = intval($mn[1]);

fscanf($__fp, "%[^\n]", $apple_temp);

$apple = array_map('intval', preg_split('/ /', $apple_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($__fp, "%[^\n]", $orange_temp);

$orange = array_map('intval', preg_split('/ /', $orange_temp, -1, PREG_SPLIT_NO_EMPTY));

countApplesAndOranges($s, $t, $a, $b, $apple, $orange);

fclose($__fp);


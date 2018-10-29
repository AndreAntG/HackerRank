omplete the staircase function below.
 */
function staircase($n) {
 
    for($i = 1; $i <= $n;  $i++){
       echo str_repeat(' ', $n-$i) . str_repeat('#', $i);
    echo "\n";
    }
}

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d\n", $n);

staircase($n);

fclose($__fp);

ndle = fopen ("php://stdin", "r");
function divisibleSumPairs($n, $k, $ar) {
    
$count = 0;
for($i=0; $i<$n-1; $i++){
    for($j=$i+1; $j<$n; $j++){
        $sum = $ar[$i] + $ar[$j];
        if($sum % $k == 0)
            $count = $count + 1;
    }
}
        return $count;
}

fscanf($handle, "%i %i", $n, $k);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = divisibleSumPairs($n, $k, $ar);
echo $result . "\n";

?>


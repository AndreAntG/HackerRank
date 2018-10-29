ndle = fopen ("php://stdin", "r");
function solve($n, $s, $d, $m){
     $count = 0;
    for($i=0;$i<$n;$i++){
    	$sum = 0;
    	for($x=$i;$x<$m+$i;$x++){
        	if($x < $n)
        		$sum += $s[$x];
        }
        if($sum == $d){
        	$count++;
        }
    }
    return $count;
}



fscanf($handle, "%d",$n);
$s_temp = fgets($handle);
$s = explode(" ",$s_temp);
$s = array_map('intval', $s);
fscanf($handle, "%d %d", $d, $m);
$result = solve($n, $s, $d, $m);
echo $result . "\n";

?>


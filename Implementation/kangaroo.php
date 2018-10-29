ndle = fopen ("php://stdin", "r");
function kangaroo($x1, $v1, $x2, $v2) {
      if ($v1 <= $v2) { 
         return "NO"; 
      }
    else { 
    return (($x2 - $x1)%($v1 - $v2) == 0 ? "YES" : "NO"); 
    }
}

fscanf($handle, "%i %i %i %i", $x1, $v1, $x2, $v2);
$result = kangaroo($x1, $v1, $x2, $v2);
echo $result . "\n";

?>


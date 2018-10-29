omplete the gradingStudents function below.
 */
function gradingStudents($grades) {
    
    for ($i=0;$i <= sizeof($grades); $i++) {
        if ($grades[$i] >= 38) {
            if ($grades[$i] % 5 == 3) {
                $grades[$i] += 2;
            }
        else if ($grades[$i] % 5 == 4) {
            $grades[$i] += 1;
        }
    }
}   return $grades;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d\n", $n);

$grades = array();

for ($grades_itr = 0; $grades_itr < $n; $grades_itr++) {
    fscanf($__fp, "%d\n", $grades_item);
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($__fp);
fclose($fptr);

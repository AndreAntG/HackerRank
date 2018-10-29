
n solve($year) {
if ($year > 1918) {
        $date = DateTime::createFromFormat('Y z', strval($year) . ' ' . strval(255));
        return $date->format("d.m.Y");
    } 
    
    if ($year < 1918) {
        $date = DateTime::createFromFormat('Y z', strval($year) . ' ' . strval(255));
        if ($year % 4 === 0) {
            return "12.09." . $year;
        }
        return $date->format("d.m.Y");
    } 

    return "26.09.1918";

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $year);

$result = solve($year);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

